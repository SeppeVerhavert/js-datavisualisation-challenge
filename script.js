let header1 = document.getElementsByTagName('h3')[0];
let canvas = document.createElement('canvas');
canvas.id = "myCanvas";
header1.appendChild(canvas);

let list = table1.childNodes[5].children;
let countryNames = [];

for (i = 1; i < list.length; i++) {
    array = [];

    for (j = 1; j < list[i].children.length; j++) {
        array.push(list[i].children[j].innerText)
    }

    countryNames.push(array);
}

console.log(countryNames);