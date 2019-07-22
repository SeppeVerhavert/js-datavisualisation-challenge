let graph1 = document.getElementsByClassName("mw-headline")[1];
let graph2 = document.getElementsByClassName("mw-headline")[4];

let canvas = document.createElement("canvas");
canvas.id="myGraph";
canvas.innerHTML = 'width="400" height="400"';
graph1.appendChild(canvas);

let canvas2 = document.createElement("canvas");
canvas2.id="mySecondGraph";
canvas2.innerHTML = 'width="400" height="400"';
graph2.appendChild(canvas2);