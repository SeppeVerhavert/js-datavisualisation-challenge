let header1 = document.getElementsByTagName('h3')[0];
let canvas = document.createElement('canvas');
canvas.id = "myCanvas";
header1.appendChild(canvas);

let list = table1.childNodes[5].children;
let dataRow = {};

for (i = 0; i < list.length; i++) {
    dataRow[i] = [];

    for (j = 1; j < list[i].children.length; j++) {
        let newInteger = list[i].children[j].innerText;
        dataRow[i].push(newInteger);
    }
}

let countryName = dataRow[1].slice(0,1);
let yearList = dataRow[0].slice(1);
let dataList = dataRow[1].slice(1,12);
let numberList = [];

for (k=0; k < dataList.length; k++) {
    newNumber = parseInt(dataList[k]);
    numberList.push(newNumber);
}

var ctx = document.getElementById('myCanvas').getContext('2d');
var myBarChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: yearList,
        datasets: [{
            label: countryName,
            data: numberList,
            borderWidth: 1
        }]
    },
});