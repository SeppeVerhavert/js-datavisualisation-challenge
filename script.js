let header1 = document.getElementsByTagName('h3')[0];
let canvas = document.createElement('canvas');
canvas.id = "myCanvas";
header1.appendChild(canvas);

let list = table1.childNodes[5].children;
let countryNames = [];

for (i = 1; i < list.length; i++) {
    countryNames.push(list[i].children[1].firstChild.data);

    for (j = 1; j < list[i].children.length; j++)
        console.log(list[i].children[j].innerText);
}

// console.log(list[1].children[j].innerText);
// console.log(cityNames);