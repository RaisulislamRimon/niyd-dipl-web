function changeHeadingBgReg() {
  var headingTag = document.getElementById("heading");
  headingTag.style.backgroundColor = "red";
}

function changeHeadingBgGreen() {
  var headingTag = document.getElementById("heading");
  headingTag.style.backgroundColor = "green";
}

function changeHeadingBgEmpty() {
  var headingTag = document.getElementById("heading");
  headingTag.style.backgroundColor = "white";
}

var greetButtonElement = document.getElementById("greetButton");

greetButtonElement.onmouseover = function () {
  changeHeadingBgReg();
};

greetButtonElement.onclick = function () {
  changeHeadingBgGreen();
};

greetButtonElement.onmouseleave = function () {
  changeHeadingBgEmpty();
};

var nameInputElement = document.getElementById("nameInput");

nameInputElement.onmouseover = function () {
  var headingTag = document.getElementById("heading");
  headingTag.innerText = "Sonia";
};

nameInputElement.onclick = function () {
  var headingTag = document.getElementById("heading");
  headingTag.innerText = "Sadia";
};

nameInputElement.onkeyup = function () {
  var headingTag = document.getElementById("heading");
  headingTag.innerText = "Nadia";
};

nameInputElement.onblur = function () {
  var headingTag = document.getElementById("heading");
  headingTag.innerText = "Tuktuki";
};

nameInputElement.onkeydown = function () {
  var headingTag = document.getElementById("heading");
  headingTag.innerText = "This is heading";
};

var data = [
  10,
  20,
  30,
  "NIYD",
  "Hi",
  "Hello",
  "Good",
  "Morning",
  "Noon",
  "Afternoon",
  "Evening",
  true,
  10.3,
];

document.write(data);
document.write("<br>");
document.write(data[6]);
document.write("<br>");
document.write(data[10]);
document.write("<br>");
document.write(data[14]);
document.write("<br>");

for (key in data) {
  document.write(data[key] + " ");
}

document.write("<br>");

for (key in data) {
  document.write(key + " ");
}

document.write("<br>");

var student = ["Patuari", "patuari@gmail.com", "123123123"];
document.write(student);

document.write("<br>");
document.write("<br>");

var studentObject = {
  name: "Patuari",
  email: "patuari@gmail.com",
  phone: "123123123",
};

document.write(studentObject);
document.write("<br>");
document.write(studentObject.name);
document.write("<br>");
document.write(studentObject.email);
document.write("<br>");
document.write(studentObject.phone);
document.write("<br>");

document.write("<br>");

var students = [
  { name: "Anwar", email: "anwar@gmail.com", phone: "456456456" },
  { name: "Patuari", email: "patuari@gmail.com", phone: "123123123" },
  { name: "Heater", email: "heater@gmail.com", phone: "789789789" },
];

document.write(students[0]);
document.write("<br>");
document.write(students[0].name);
document.write("<br>");
document.write(students[0].email);
document.write("<br>");
document.write(students[0].phone);
document.write("<br>");

document.write("<br>");

document.write(students[1]);
document.write("<br>");
document.write(students[1].name);
document.write("<br>");
document.write(students[1].email);
document.write("<br>");
document.write(students[1].phone);
document.write("<br>");

document.write("<br>");

document.write(
  students[0].name + " " + students[0].email + " " + students[0].phone,
);

document.write("<br>");

// car

var car = {
  name: "Toyota Axio",
  model: "2015",
  color: "White",
  price: 10000000000,
  start: function () {
    document.write("Car is starting");
  },
  break: function () {
    document.write("Car is breaking");
  },
};

document.write("<br>");
document.write(car.name);
document.write("<br>");
document.write(car.model);
document.write("<br>");
document.write(car.color);
document.write("<br>");
document.write(car.price);
document.write("<br>");
// document.write(car.start())
car.start();
document.write("<br>");
car.break();
document.write("<br>");

document.write("<br>");

// jQuery

// jQuery Syntax
// $(selector).Action()

$("#headingTwo").mouseover(function () {
  $("#headingTwo").text("Hello jQuery");
});

$("#headingTwo").mouseleave(function () {
  $("#headingTwo").text("Heading Two Content");
});
