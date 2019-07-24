//-----------------------------------   CANVAS   -------------------------------------------//

let header1 = document.getElementsByTagName('h3')[0];
let canvas = document.createElement('canvas');
canvas.id = "myCanvas";
header1.appendChild(canvas);

//----------------------------------    ADD CHECKBOXES    ---------------------------------//

let countryNames = new Array();

for (i = 1; i < list.length; i++) {
    countryNames[i] = new Array();
    for (j = 1; j < list[i].children.length; j++) {
        array.push(list[i].children[j].innerText)
        countryNames[i].push(list[i].children[j].innerText)
    }
    countryNames.push(array);
    console.log(countryNames);
}

//----------------------------------    

console.log(countryNames); 

let list = table1.childNodes[5].children;

for (l = 1; l < list.length; l++) {
    let node = document.createElement('td');
    node.innerHTML = '<input class="checkBox" type="checkbox"/>'
    list[l].appendChild(node);

    let checkBox = document.getElementsByClassName("checkBox")[l - 1];
    checkBox.addEventListener('click', displayData);
}

//----------------------------------    LISTS   ------------------------------------------//

let countryName = [];
let yearList = [];
let numberList = [];

for (j = 2; j < list[0].children.length; j++) {
    let newYear = list[0].children[j].innerHTML;
    yearList.push(newYear);
}

//----------------------------------    DISPLAY COUNTRY     -------------------------------//

function displayData() {
    let checkedBox = this;

    if (checkedBox.attributes.class.value = "checkBox") {
        console.log(checkedBox);
        addData(checkedBox);
        drawChart();
        checkedBox.classList.add("checkedIsOn");
        console.log(checkedBox);
    } else {
        removeData(checkedBox);
        drawChart();
        checkedBox.classList.remove("checkedIsOn");
        console.log(checkedBox);
    }
}

//----------------------------------    ADD DATA     ----------------------------------//

function addData(checkedBox) {
    addCountry(checkedBox);
    addDataSet(checkedBox);
}

function addCountry(checkedBox) {
    let newCountry = checkedBox.parentNode.parentNode.children[1].innerHTML;
    countryName.push(newCountry);
}

function addDataSet(checkedBox) {
    let newDataSet = checkedBox.parentNode.parentNode.children;
    for (i = 2; i < newDataSet.length - 1; i++) {
        let newInteger = parseFloat((newDataSet[i].innerHTML).replace(',', '.'));
        if (isNaN(newInteger)) { newInteger = 0; }
        numberList.push(newInteger);
    }
}

//----------------------------------    REMOVE DATA     -------------------------------//

function removeData(checkedBox) {
    removeCountry(checkedBox);
    removeDataSet(checkedBox);
}

function removeCountry(checkedBox) {
    let oldCountry = checkedBox.parentNode.parentNode.children[1].innerHTML;
    let indexCountry = countryName.indexOf(oldCountry);
    countryName.splice(indexCountry, indexCountry + 1);
}

function removeDataSet(checkedBox) {
    let oldDataSet = checkedBox.parentNode.parentNode.children;
    for (i = 2; i < oldDataSet.length - 1; i++) {
        let oldData = parseFloat(oldDataSet[i].innerHTML.replace(',', '.'));
        if (isNaN(oldData)) { oldData = 0; }
        let indexData = numberList.indexOf(oldData);
        numberList.splice(indexData, indexData + 1);
    }
}

//-----------------------------------   CHART   -------------------------------------------//

function drawChart() {
    var ctx = document.getElementById('myCanvas').getContext('2d');
    var myChart = new Chart(ctx, {
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
}