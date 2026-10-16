document.addEventListener('DOMContentLoaded', () => {
  const mobileDrawer = document.getElementById('mobileDrawer');
  const mobileToggle = document.getElementById('mobileNavToggle');
  if (mobileToggle && mobileDrawer) {
    mobileToggle.addEventListener('click', () => {
      const open = mobileDrawer.classList.toggle('open');
      mobileToggle.textContent = open ? 'close ✕' : 'menu ☰';
    });
  }

  if (document.getElementById('repoContainer')) {
    loadRepos();
  }

  streamTerminalOutput();
});

// --- whoami terminal (about page only) ---
// Once "whoami" finishes typing, prints the output a character at a time.
// Each character starts as a hidden span so the full text keeps its space
// and the page doesn't shift as it fills in. Without JS, the CSS reveal in
// styles.css still shows the whole line after the command is typed.
const STREAM_START_DELAY_MS = 300; // pause for the "Enter" keypress
const STREAM_CHAR_MS = 18;

function streamTerminalOutput() {
  const output = document.querySelector('.terminal-output');
  if (!output || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  const chars = [...output.textContent].map(ch => {
    const span = document.createElement('span');
    span.textContent = ch;
    span.style.visibility = 'hidden';
    return span;
  });
  output.replaceChildren(...chars);
  output.classList.add('streaming');

  const start = () => {
    let i = 0;
    const timer = setInterval(() => {
      if (i >= chars.length) return clearInterval(timer);
      chars[i++].style.visibility = 'visible';
    }, STREAM_CHAR_MS);
  };

  const command = document.querySelector('.typewrite');
  if (command) {
    command.addEventListener('animationend', () => setTimeout(start, STREAM_START_DELAY_MS), { once: true });
  } else {
    start();
  }
}

// --- GitHub projects list (projects page only) ---
// Pulls public repos for the account (with each repo's full language
// breakdown) and renders them into the expandable directory-listing rows.
const GITHUB_USER = 'alexjvan';
const CACHE_KEY = 'gh-repos-cache-' + GITHUB_USER;
const CACHE_TTL_MS = 60 * 60 * 1000; // 1 hour — unauthenticated GitHub API is rate-limited to 60 req/hr

function colorForLanguage(name) {
  if (!name) return 'oklch(55% 0.01 280)';
  if (LANGUAGE_COLORS[name]) return LANGUAGE_COLORS[name];
  const stripped = name.replace(/[\s.]/g, '');
  return LANGUAGE_COLORS[stripped] || 'oklch(55% 0.01 280)';
}

async function fetchJSON(url) {
  const res = await fetch(url, { headers: { Accept: 'application/vnd.github+json' } });
  if (!res.ok) {
    if (res.status === 403) throw new Error('rate-limited by github, try again in a bit');
    throw new Error('github api error ' + res.status);
  }
  return res.json();
}

function readCache() {
  try {
    const raw = localStorage.getItem(CACHE_KEY);
    if (!raw) return null;
    const parsed = JSON.parse(raw);
    if (Date.now() - parsed.savedAt > CACHE_TTL_MS) return null;
    return parsed.data;
  } catch {
    return null;
  }
}

function writeCache(data) {
  try {
    localStorage.setItem(CACHE_KEY, JSON.stringify({ savedAt: Date.now(), data }));
  } catch {
    // storage full/unavailable — fine to skip caching
  }
}

async function loadRepos() {
  const container = document.getElementById('repoContainer');
  try {
    const cached = readCache();
    if (cached) {
      container.innerHTML = '';
      cached.forEach((entry, i) => container.appendChild(buildRepoRow(entry.repo, entry.languages, i)));
      wireProjectRows();
      return;
    }

    const repos = await fetchJSON(`https://api.github.com/users/${GITHUB_USER}/repos?sort=pushed&per_page=100`);
    const visible = repos
      .filter(r => !r.fork)
      .sort((a, b) => new Date(b.pushed_at) - new Date(a.pushed_at));

    if (!visible.length) {
      container.innerHTML = '<div class="project-loading">no public repos found</div>';
      return;
    }

    // Fetch each repo's language breakdown in parallel rather than chaining
    // requests one at a time. Unauthenticated GitHub requests are capped at
    // 60/hour, so if a language fetch fails (usually a rate limit), fall
    // back to the single primary language the repo list already gave us for
    // free instead of showing nothing.
    const withLanguages = await Promise.all(
      visible.map(async repo => {
        try {
          const languages = await fetchJSON(repo.languages_url);
          return { repo, languages };
        } catch {
          return { repo, languages: repo.language ? { [repo.language]: 1 } : {} };
        }
      })
    );

    writeCache(withLanguages);
    container.innerHTML = '';
    withLanguages.forEach((entry, i) => container.appendChild(buildRepoRow(entry.repo, entry.languages, i)));
    wireProjectRows();
  } catch (err) {
    container.innerHTML = '<div class="project-error">couldn\'t load repos from github (' + err.message + ')</div>';
  }
}

function buildRepoRow(repo, languages, index) {
  const row = document.createElement('div');
  row.className = 'project-row';
  row.dataset.project = index;

  const year = new Date(repo.pushed_at).getFullYear();
  const desc = repo.description || 'No description yet.';

  // Sort all languages used in the repo by bytes written, most to least.
  const langNames = Object.entries(languages)
    .sort((a, b) => b[1] - a[1])
    .map(([name]) => name);
  const tagsHtml = langNames.length
    ? langNames.map(name => `<span class="lang-tag"><span class="lang-dot" style="background:${colorForLanguage(name)}"></span>${name}</span>`).join('')
    : '<span class="lang-tag">—</span>';

  row.innerHTML = `
    <div class="project-row-head">
      <span class="col-name proj-name">${repo.name}/</span>
      <span class="col-year">${year}</span>
      <span class="col-stack proj-tags">${tagsHtml}</span>
      <span class="chevron">›</span>
    </div>
    <div class="project-detail" hidden>
      <p>${desc}</p>
      <a href="${repo.svn_url}" target="_blank" rel="noopener">→ view on github</a>
    </div>
  `;
  return row;
}

function wireProjectRows() {
  document.querySelectorAll('.project-row').forEach(row => {
    const head = row.querySelector('.project-row-head');
    const detail = row.querySelector('.project-detail');
    head.addEventListener('click', () => {
      const isOpen = row.classList.contains('open');
      document.querySelectorAll('.project-row').forEach(r => {
        r.classList.remove('open');
        r.querySelector('.project-detail').hidden = true;
      });
      if (!isOpen) {
        row.classList.add('open');
        detail.hidden = false;
      }
    });
  });
}
