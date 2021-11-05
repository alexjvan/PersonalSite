<?php
	if(isset($_POST['ip'])) {
		$file = "ips.txt";
		$cur = file_get_contents($file);
		$split = explode("\n", $cur);
		$writeback = "";
		$found = false;
		foreach($split as $ip) {
			$ipcount = explode(", ", $ip);
			if($_POST['ip'] == $ipcount[0]) {
				$ipcount[1]++;
				$writeback .= $ipcount[0] . ", " . $ipcount[1];
				$found = true;
			} else
				$writeback .= $ip;
		}
		if(!$found) {
			if($writeback != "")
				$writeback .= "\n";
			$writeback .= $_POST['ip'] . ", 1";
		}
		file_put_contents($file, $writeback);
	}
?>
