//-----------------------------------   CANVAS   -------------------------------------------//

let header1 = document.getElementsByTagName('h3')[0];
let canvas = document.createElement('canvas');
canvas.id = "myCanvas";
header1.appendChild(canvas);

//----------------------------------    LISTS   ------------------------------------------//

let list = table1.childNodes[5].children;

let countryName = [];
let yearList = [];
let numberList = [];

for (j = 2; j < list[0].children.length; j++) {
    let newYear = list[0].children[j].innerHTML;
    yearList.push(newYear);
}

//----------------------------------    ADD CHECKBOXES    ---------------------------------//

for (l = 1; l < list.length; l++) {
    let node = document.createElement('td');
    node.innerHTML = '<input class="checkBox" type="checkbox"/>'
    list[l].appendChild(node);

    let checkBox = document.getElementsByClassName("checkBox")[l - 1];
    checkBox.addEventListener('click', displayData);
}

//----------------------------------    DISPLAY DATA     --------------------------------//

function displayData() {
    let checkedBox = this;

    if (checkedBox.attributes.class.value == "checkBox") {
        addData(checkedBox);
        checkedBox.classList.add("checkedIsOn");
        setTimeout(drawChart, 1000);
        setTimeout(testFunction, 1000);
    } else {
        removeData(checkedBox);
        checkedBox.classList.remove("checkedIsOn");
        setTimeout(drawChart, 1000);
    }
}

//----------------------------------    ADD DATA     ----------------------------------//

function addData(checkedBox) {
    addCountry(checkedBox);
    addDataSet(checkedBox);
    addToDataSets(checkedBox);
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

//----------------------------------    DATASETS    ---------------------------------------//

let dataSets = []

function addToDataSets() {
    let newCountryName = countryName;
    countryName = [];
    let newNumberList = numberList;
    numberList = [];

    let newObject = {
        label: newCountryName,
        data: newNumberList,
    };

    dataSets.push(newObject);
    console.log(dataSets);
}


function removeFromDataSets() {

    let newObject = {
        label: newCountryName,
        data: newNumberList,
    };

    dataSets.push(newObject);
    console.log(dataSets.length);
}

//-----------------------------------   CHART   -------------------------------------------//

function drawChart() {
    let Belgium = 5;
    var ctx = document.getElementById('myCanvas').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: yearList,
            datasets: dataSets,
        },
    });
}

//----------------------------------    REMOVE DATA     -------------------------------//

function removeData(checkedBox) {
    removeCountry(checkedBox);
    removeDataSet(checkedBox);
    removeFromDataSets(checkedBox);
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

function testFunction() {
    console.log("test");
}