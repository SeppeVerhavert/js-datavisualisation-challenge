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

// setTimeout(firstCheckBox, 500);

// function firstCheckBox() {
//     let checkedBox = list[1].children[13].children[0];
//     checkedBox.checked = "checked";
//     checkedBox.id = "firstCheckBox";
//     displayData(checkedBox);
// }

//----------------------------------    DISPLAY DATA     --------------------------------//

function displayData() {
    let checkedBox = this;

    if (checkedBox.attributes.class.value == "checkBox") {
        addData(checkedBox);
        checkedBox.classList.add("checkedIsOn");
        setTimeout(drawChart, 300);
    } else {
        removeFromDataSets(checkedBox);;
        checkedBox.classList.remove("checkedIsOn");
        setTimeout(drawChart, 300);
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
}

//-----------------------------------   CHART   -------------------------------------------//

function drawChart() {
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


function removeFromDataSets(checkedBox) {
    let oldCountry = checkedBox.parentNode.parentNode.children[1].innerHTML;
    for (i = 0; i < dataSets.length; i++) {
        if (dataSets[i].label[0] === oldCountry) {
            dataSets.splice(i, i + 1);
            console.log(i);
        }
    }
}