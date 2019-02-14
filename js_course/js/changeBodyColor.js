var list = document.getElementById("color");

var count = list.childElementCount;

var i = 0;
while( i < count) {
  list.children[i].addEventListener("mouseover", function() {
    document.body.className = this.className;
  });
  i++;
}
