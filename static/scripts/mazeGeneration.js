$(document).ready(function() {
	generateMaze();
});

$(window).resize(function() {
	if($("#map").width() > docWidth) {
		var newW = Math.ceil($("#map").width() / cellSize);
		var diff = newW - mapW;

		console.log("MapW " + mapW +" NewW " + newW + " diff " + diff);
		docWidth = $("#map").width();
		mapW = newW;

		$(".maprow").each(function(i) {
			for(var x = 0; x < diff; x++) {
				$(this).append("<div class='mapCell'></div>");
			}
		});
	}

	if($("#map").height() > docHeight) {
 		var newH = Math.ceil($("#map").height() / cellSize);
		var diff = newH - mapH;
		mapH = newH;
		docHeight = $("#map").height();

		for(var y = 0; y < diff; y++) {
			var newRow = "<div class='maprow'>";
			for(var x = 0; x < mapW; x++) {
				newRow += "<div class='mapCell'></div>";
			}
			newRow += "</div>";
			$("#map").append(newRow);
		}
	}
});

var wallSize = 1;
var cellSize = 50;

var docWidth;
var docHeight;

var mapW;
var mapH;
var map = [];

function generateMaze() {
	mazeInit();
	mazeGeneration();
}

function mazeInit() {
	docWidth = $("#map").width();
	docHeight = $("#map").height();

	mapW = Math.ceil(docWidth / cellSize);
	mapH = Math.ceil(docHeight / cellSize);

	for(var y = 0; y < mapH; y++) {
		var newRow = "<div class='maprow'>";
		for(var x = 0; x < mapW; x++) {
			newRow += "<div class='mapCell' id='cell"+ ((y * mapW) + x) + "'></div>";
			map.push(false);
		}
		newRow += "</div>";
		$("#map").append(newRow);
	}
}

async function mazeGeneration() {
	var startCell = ((mapH / 2) * mapW) + (mapW);

	visitCell(parseInt(startCell));
}

async function visitCell(cell) {

	$("#cell"+cell).addClass('current');
	var safety = 0;
	map[cell] = true;

	var neighbors;

	await sleep(50);

	do {
		neighbors = await findNeighbors(cell);
		if(neighbors.length != 0) {
			var rand = await randomNum(neighbors.length);
			var next = neighbors[rand];

			switch(next.dir) {
				case 0:
					$("#cell"+cell).addClass('pathUp');
					$("#cell"+next.num).addClass('pathDown');
					break;
				case 1:
					$("#cell"+cell).addClass('pathLeft');
					$("#cell"+next.num).addClass('pathRight');
					break;
				case 2:
					$("#cell"+cell).addClass('pathRight');
					$("#cell"+next.num).addClass('pathLeft');
					break;
				case 3:
					$("#cell"+cell).addClass('pathDown');
					$("#cell"+next.num).addClass('pathUp');
					break;
			}
			$("#cell"+cell).removeClass('current');
			await visitCell(next.num);
		}
		safety += 1;
	} while(neighbors.length != 0 && safety < 5);
	$("#cell"+cell).removeClass('current');
}

async function findNeighbors(cell) {
	var neighbors = [];

	// Up
	if(cell - mapW > 0 && !map[cell - mapW]) {
		neighbors.push(new Neighbor(cell - mapW, 0));
	}
	// Left
	if(cell % mapW != 0 && !map[cell - 1]) {
		neighbors.push(new Neighbor(cell - 1, 1));
	}
	// Right
	if((cell + 1) % mapW != 0 && !map[cell + 1]) {
		neighbors.push(new Neighbor(cell + 1, 2));
	}
	// Down
	if(cell + mapW < map.length && !map[cell + mapW]) {
		neighbors.push(new Neighbor(cell + mapW, 3));
	}

	return neighbors;
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

function randomNum(max) {
	return Math.floor(Math.random() * max);
}

function Neighbor(num, dir) {
	this.num = num,
	this.dir = dir
}
