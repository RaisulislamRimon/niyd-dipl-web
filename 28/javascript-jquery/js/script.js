document.write(" <br> ");
document.write("Hello World!!!");
document.write(" <br> <br> ");

function add() {
  var x = 10;
  var y = 10;
  var z = x + y;

  document.write(z);
}

add();

document.write(" <br> ");

function addition(x, y) {
  var z = x + y;
  document.write(z);
}

addition(10, 20);

document.write(" <br> ");

document.write(" <br> ");

function addition(x = 100, y = 200) {
  var z = x + y;
  document.write(z);
}

addition(10, 20);
document.write(" <br> ");

addition();

document.write(" <br> ");

function addDiv() {
  var divElement = document.createElement("div");
  divElement.style.width = "200px";
  divElement.style.height = "200px";
  divElement.style.float = "left";
  divElement.style.marginRight = "10px";
  divElement.style.backgroundColor = "tomato";

  document.getElementById("container").append(divElement);
}

addDiv();
addDiv();
addDiv();

document.write(" <br> ");
document.write(" <br> ");
