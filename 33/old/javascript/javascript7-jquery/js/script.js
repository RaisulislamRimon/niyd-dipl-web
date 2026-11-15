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

// form

// name field validation

$("#name").keyup(function () {
  var nameValue = $("#name").val();
  // console.log(name);

  // name field validation using regex
  // const nameRegex = /^[A-Za-z ]{2,50}$/;
  const nameRegex = /^[A-Za-z][A-Za-z .'-]{1,30}$/;

  // if (nameValue.length > 2 && nameValue.length < 20) {
  if (nameRegex.test(nameValue)) {
    $("#nameError").text(" ");
  } else {
    $("#nameError").text("Name must be between 2 and 30 characters");
  }
});

// email field validation

$("#email").keyup(function () {
  var emailValue = $("#email").val();
  // console.log(email);

  // email field validation using regex
  const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

  // if (emailValue.length > 2 && emailValue.length < 20) {
  if (emailRegex.test(emailValue)) {
    $("#emailError").text(" ");
  } else {
    $("#emailError").text("email must be between 2 and 30 characters");
  }
});

// Mobile field validation
$("#mobile").keyup(function () {
  var mobileValue = $("#mobile").val().trim();

  // Bangladesh mobile number validation
  const mobileRegex = /^01[3-9]\d{8}$/;

  if (mobileRegex.test(mobileValue)) {
    $("#mobileError").text("");
  } else {
    $("#mobileError").text("Please enter a valid 11-digit mobile number.");
  }
});

// Password field validation
$("#password").keyup(function () {
  var passwordValue = $("#password").val();

  // Password validation using Regex
  const passwordRegex =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/;

  if (passwordRegex.test(passwordValue)) {
    $("#passwordError").text("");
  } else {
    $("#passwordError").text(
      "Password must be 8-20 characters with uppercase, lowercase, number and special character.",
    );
  }
});

// Confirm Password field validation
$("#confirmPassword").keyup(function () {
  var passwordValue = $("#password").val();
  var confirmPasswordValue = $("#confirmPassword").val();

  if (confirmPasswordValue === "") {
    $("#confirmPasswordError").text("Please confirm your password.");
  } else if (passwordValue === confirmPasswordValue) {
    $("#confirmPasswordError").text("");
  } else {
    $("#confirmPasswordError").text("Password does not match.");
  }
});

// Password and Confirm Password validation
function validateConfirmPassword() {
  var passwordValue = $("#password").val();
  var confirmPasswordValue = $("#confirmPassword").val();

  if (confirmPasswordValue === "") {
    $("#confirmPasswordError").text("");
  } else if (passwordValue === confirmPasswordValue) {
    $("#confirmPasswordError").text("");
  } else {
    $("#confirmPasswordError").text("Password does not match.");
  }
}

// Check when confirm password changes
$("#confirmPassword").keyup(validateConfirmPassword);

// Check again when original password changes
$("#password").keyup(validateConfirmPassword);
