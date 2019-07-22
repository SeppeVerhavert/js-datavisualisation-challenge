let header1 = document.getElementsByTagName('h3')[0];
let canvas= document.createElement('canvas');
canvas.id="myCanvas";
header1.appendChild(canvas);

let list = table1.childNodes[5].children;
let cityNames = [];

for (i = 1; i < list.length; i++) {
    cityNames.push(list[i].children[1].firstChild.data);
}