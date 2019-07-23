//-----------------------------------   CANVAS   -------------------------------------------//

let header1 = document.getElementsByTagName('h3')[0];
let canvas = document.createElement('canvas');
canvas.id = "myCanvas";
header1.appendChild(canvas);

//-----------------------------------   PUSH DATA IN OBJECT   ------------------------------//

let list = table1.childNodes[5].children;
let dataRow = {};

for (i = 0; i < list.length; i++) {
    dataRow[i] = [];

    for (j = 1; j < list[i].children.length; j++) {
        let newInteger = list[i].children[j].innerText;
        dataRow[i].push(newInteger);
    }
}

//-----------------------------------   LISTS   -------------------------------------------//

let countryName = dataRow[1].slice(0, 1);
let yearList = dataRow[0].slice(1);
let dataList = dataRow[1].slice(1, 12);
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
            label: 'Crimes dans ' + countryName + ' x1000',
            data: numberList,
            borderWidth: 1
        }]
    },
});

//----------------------------------    NEW CODE    ---------------------------------------//

for (l = 1; l < list.length; l++) {

    let node = document.createElement('td');
    node.innerHTML = '<input type="checkbox" name="name1" />'

    console.log(node);
    console.log(list[l]);

    list[l].appendChild(node);
}