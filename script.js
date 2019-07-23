let header1 = document.getElementsByTagName('h3')[0];
let canvas = document.createElement('canvas');
canvas.id = "myCanvas";
header1.appendChild(canvas);

let list = table1.childNodes[5].children;
let countryNames = new Array();

for (i = 1; i < list.length; i++) {
    countryNames[i] = new Array();

    for (j = 1; j < list[i].children.length; j++) {
        countryNames[i].push(list[i].children[j].innerText)
    }
}

console.log(countryNames[3][4]);

var ctx = document.getElementById('myCanvas').getContext('2d');
var myBarChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: ['2002', '2003', '2004', '2005', '2006', '2007'],
        datasets: [{
            label: 'Belgium',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
});