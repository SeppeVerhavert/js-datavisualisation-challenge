# js-datavisualisation-challenge
Javascript Challenge : "Data Visualisation"

## Objectives

This consolidation challenge will help you assess your ability to solve a problem inspired from real-life situations using your new javascript muscles involving the following know-hows :

-   **DOM** manipulation
-   **AJAX** request
-   Using **Third-party libraries**
-   **problem-solving** : design a logical solution to implement the expected result
-   Debugging using the console
-   Understand the notion of **"separation of concerns"**

## Constraints

-   You can't edit the html file.
-   You have the choice of the type of graphics. Considers the most relevant based on the data and what story they can "tell".
-   The choice of the javascript library is limited to the 2 libraries offered (there are many others, but these are references and are very popular)

## My solutions

### Apply canvas to html
```javascript
let  header1  =  document.getElementsByTagName('h3')[0];
let  canvas  =  document.createElement('canvas');
canvas.id  =  "myCanvas";
header1.appendChild(canvas);
```

### Add checkboxes
```javascript
for (l  =  1;  l  <  list.length;  l++) {
	let  node  =  document.createElement('td');
	node.innerHTML  =  '<input class="checkBox" type="checkbox"/>'
	list[l].appendChild(node);
	let  checkBox  =  document.getElementsByClassName("checkBox")[l  -  1];
	checkBox.addEventListener('click',  displayData);
}
```

### Function  displayData()
```javascript
function  displayData()  {
	let  checkedBox  =  this;
	if (checkedBox.attributes.class.value  ==  "checkBox") {
		addData(checkedBox);
		checkedBox.classList.add("checkedIsOn");
	}  else  {
		removeFromDataSets(checkedBox);;
		checkedBox.classList.remove("checkedIsOn");
	}
}
```

### Chart.js
```javascript
var  ctx  =  document.getElementById('myCanvas').getContext('2d');
var  myChart  =  new  Chart(ctx,  {
type:  'horizontalBar',
data:  {
	labels:  yearList,
	datasets:  dataSets,
	},
});
```

## Evaluation

The evaluation method chosen is a self-evaluation based on the following indicators:

### 1. handling of the DOM:

  - [x] I was able to find the right selector to do it.
  - [x] I was able to inject the graph in the right place on the page via javascript.
  - [x] I was able to retrieve the html data in a format adapted to my javascript code.

### 2. Request ajax:

  - [ ] I was able to receive the answer from the remote server in json.
  - [ ] Then, I was able to build a callback function to process this data.


### 3. Use of third party libraries:

  - [x] I was able to integrate the third-party library into my application.
  - [x] I used the documentation provided by the library.
  - [ ] I was able to generate the 2 inline data graphs.
  - [ ] I was able to generate the "remote data" graph.


### 4. Problem-solving:

 - [x] Syntactic rigor: I was able to translate the processes I imagined into javascript syntax.
 - [x] Logical thinking: Through iterations and trial and error, I was able to find a logical path that works to address the issues raised by the client's request. Specifically:
 - [ ] I was able to generate the 2 inline data graphs.
 - [ ] I was able to generate the "remote data" graph.
 - [ ] I was able to build a callback function to process remote data (received via ajax).
 - [x] I was able to make the realtime graph refresh in real time.
 - [x] I was able to display the detailed data when I hover the mouse.


### 5. Debugging:

 - [x]  I use the console to understand what is happening and compare what I am trying to program with what the machine is doing.


### 6. Separation of concerns:

 - [x]  If I disable javascript, the user experience is satisfactory, the user has access to data and content
 - [x]  If I enable javascript, the tables are enhanced with an interactive graph.

## Live Version
Check out my fancy chart [here](https://seppeverhavert.github.io/js-datavisualisation-challenge/).
