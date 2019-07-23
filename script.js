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
    checkBox.addEventListener('click', addCountry);
}

//----------------------------------    LISTS   ------------------------------------------//

let countryName = [];
let yearList = [];
let numberList = [];

for (j = 2; j < list[0].children.length; j++) {
    let newYear =  list[0].children[j].innerHTML;
    yearList.push(newYear);
    console.log(yearList);
}

//----------------------------------    ADD COUNTRY     ----------------------------------//

function addCountry() {
    
    let newCountry = this.parentNode.parentNode.children[1].innerHTML;
    countryName.push(newCountry);

    let newData = this.parentNode.parentNode.children;
    for (i = 2; i < newData.length - 1; i++) {
        let newInteger = parseInt(newData[i].innerHTML);
        numberList.push(newInteger);
    }
    drawChart();
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

//----------------------------------    DISPLAY BOOLEAN     --------------------------------//

let dipslay = false;

//----------------------------------    NEW CODE    ----------------------------------------//




