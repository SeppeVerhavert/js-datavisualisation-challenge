//-----------------------------------   CANVAS   -------------------------------------------//

let header1 = document.getElementsByTagName('h3')[0];
let canvas = document.createElement('canvas');
canvas.id = "myCanvas";
header1.appendChild(canvas);

//-----------------------------------   PUSH DATA IN OBJECT   ------------------------------//

let list = table1.childNodes[5].children;
let dataJSON = {};

for (i = 0; i < list.length; i++) {
    dataJSON[i] = [];

    for (j = 1; j < list[i].children.length; j++) {
        let newInteger = list[i].children[j].innerText;
        dataJSON[i].push(newInteger);
    }
}

//-----------------------------------   LISTS   -------------------------------------------//

let countryName = dataJSON[1].slice(0, 1);
let yearList = dataJSON[0].slice(1);
let dataList = dataJSON[1].slice(1, 12);
let numberList = [];

for (k = 0; k < dataList.length; k++) {
    newNumber = parseInt(dataList[k]);
    numberList.push(newNumber);
}

//-----------------------------------   CHART   -------------------------------------------//

var ctx = document.getElementById('myCanvas').getContext('2d');
var myBarChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: yearList,
        datasets: [{
            label: 'Nombre (x1000) dans ' + countryName,
            data: numberList,
            borderWidth: 1
        }]
    },
});

//----------------------------------    CheckBoxes    ---------------------------------------//

for (l = 1; l < list.length; l++) {
    let node = document.createElement('td');
    node.innerHTML = '<input class="checkBox" type="checkbox"/>'
    list[l].appendChild(node);

    let checkBox = document.getElementsByClassName("checkBox")[l - 1];
    checkBox.id = "CB" + l;
    checkBox.addEventListener('click', showID);
}

function showID() {
    console.log(this.id);
}