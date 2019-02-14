var element = document.getElementById("fruits");

var getText = element.textContent;
var start = getText.indexOf(":");
console.log(start);

var end = getText.indexOf(".");
console.log(end);

var fruits = getText.substring(start + 1, end);
console.log(fruits);

var div = document.createElement("div");
var newElement = element.appendChild(div);
newElement.setAttribute("id", "fruits-list");
newElement.textContent = "Fruits List: " + fruits;

var arr = fruits.split(",");
console.log(arr);
