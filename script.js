//-----------------------------------   CANVAS   -------------------------------------------//

let header1 = document.getElementsByTagName('h3')[0];
let canvas = document.createElement('canvas');
canvas.id = "myCanvas";
header1.appendChild(canvas);

//----------------------------------    ADD CHECKBOXES    ---------------------------------//

let list = table1.childNodes[5].children;

for (l = 1; l < list.length; l++) {
    let node = document.createElement('td');
    node.innerHTML = '<input class="checkBox" type="checkbox"/>'
    list[l].appendChild(node);

    let checkBox = document.getElementsByClassName("checkBox")[l - 1];
    checkBox.addEventListener('click', displayCountry);
}

//----------------------------------    LISTS   ------------------------------------------//

let countryName = [];
let yearList = [];
let numberList = [];

for (j = 2; j < list[0].children.length; j++) {
    let newYear = list[0].children[j].innerHTML;
    yearList.push(newYear);
}

//----------------------------------    DISPLAY BOOLEAN     --------------------------------//

let display = false;

//----------------------------------    DISPLAY COUNTRY     -------------------------------//

function displayCountry() {
    let checkedBox = this;
    if (!display) {
        addCountry(checkedBox);
        drawChart();
        display = true;
    }
    else if (display) {
        removeCountry(checkedBox);
        drawChart();
        display = false;
    }
}

//----------------------------------    ADD COUNTRY     ----------------------------------//

function addCountry(checkedBox) {
    let newCountry = checkedBox.parentNode.parentNode.children[1].innerHTML;
    countryName.push(newCountry);

    let newDataSet = checkedBox.parentNode.parentNode.children;
    for (i = 2; i < newDataSet.length - 1; i++) {
        let newInteger = parseFloat((newDataSet[i].innerHTML).replace(',', '.'));
        numberList.push(newInteger);
    }
}

//----------------------------------    REMOVE COUNTRY     -------------------------------//

function removeCountry(checkedBox) {
    let oldCountry = checkedBox.parentNode.parentNode.children[1].innerHTML;
    let indexCountry = countryName.indexOf(oldCountry);
    countryName.splice(indexCountry, indexCountry + 1);

    let oldDataSet = checkedBox.parentNode.parentNode.children;
    for (i = 2; i < oldDataSet.length - 1; i++) {
        let oldData = parseFloat(oldDataSet[i].innerHTML.replace(',', '.'));
        console.log(oldData);
        let indexData = numberList.indexOf(oldData);
        console.log(indexData);
        numberList.splice(indexData, indexData + 1);
        console.log(numberList);
    }
    

    // let newData = checkedBox.parentNode.parentNode.children;
    // for (i = 2; i < newData.length - 1; i++) {
    //     let newInteger = parseInt(newData[i].innerHTML);
    //     numberList.push(newInteger);
    // }
}

//-----------------------------------   CHART   -------------------------------------------//

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