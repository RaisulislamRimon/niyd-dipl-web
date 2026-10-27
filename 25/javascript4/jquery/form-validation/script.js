// checkFirstName

function checkFirstName() {
  var firstName = $("#firstName").val();

  var regex = /^[a-zA-Z._ -]{2,20}$/;

  if (regex.test(firstName)) {
    $("#firstNameError").text("");
    return true;
  } else {
    $("#firstNameError").text(
      "Error: Invalid First Name. You can use alphabetic character and . - _ ",
    );
    return false;
  }
}

// checkFirstName validate

$("#firstName").keyup(function () {
  var res = checkFirstName();
  if (res == true) {
    $("#firstNameError").text("");
    $("#regBtn").prop("disable", false);
  } else {
    $("#firstNameError").text(
      "Error: Invalid First Name. You can use alphabetic character and . - _ ",
    );
    $("#regBtn").prop("disable", true);
  }
});

// checkLastName

function checkLastName() {
  var lastName = $("#lastName").val();

  var regex = /^[a-zA-Z._ -]{2,20}$/;

  if (regex.test(lastName)) {
    $("#lastNameError").text("");
    return true;
  } else {
    $("#lastNameError").text(
      "Error: Invalid Last Name. You can use alphabetic character and . - _ ",
    );
    return false;
  }
}

// checkLastName validate

$("#lastName").keyup(function () {
  var res = checkLastName();

  if (res == true) {
    $("#LastNameError").text("");
    $("#regBtn").prop("disable", false);
  } else {
    $("#lastNameError").text(
      "Error: Invalid Last Name. You can use alphabetic character and . - _ ",
    );
    $("#regBtn").prop("disable", true);
  }
});

// checkUserName

function checkUserName() {
  var userName = $("#userName").val();

  var regex = /^[a-zA-Z0-9._ -]{2,10}$/;

  if (regex.test(userName)) {
    $("#userNameError").text("");
    return true;
  } else {
    $("#userNameError").text(
      "Error: Invalid User Name. You can use alphabetic character and . - _ ",
    );
    return false;
  }
}

// checkUserName validate

$("#userName").keyup(function () {
  var res = checkUserName();

  if (res == true) {
    $("#userNameError").text("");
    $("#regBtn").prop("disable", false);
  } else {
    $("#userNameError").text(
      "Error: Invalid User Name. You can use alphabetic character and . - _ ",
    );
    $("#regBtn").prop("disable", true);
  }
});

// checkEmail

function checkEmail() {
  var email = $("#email").val();

  var regex =
    /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

  if (regex.test(email)) {
    $("#emailError").text("");
    return true;
  } else {
    $("#emailError").text(
      "Error: Invalid Email. You can use alphabetic character and . - _ ",
    );
    return false;
  }
}

// checkEmail validate

$("#email").keyup(function () {
  var res = checkEmail();

  if (res == true) {
    $("#emailError").text("");
    $("#regBtn").prop("disable", false);
  } else {
    $("#emailError").text(
      "Error: Invalid Email. You can use alphabetic character and . - _ ",
    );
    $("#regBtn").prop("disable", true);
  }
});

// registration form submit

$("#regForm").submit(function () {
  if (
    checkFirstName() == true &&
    checkLastName() == true &&
    checkUserName() == true &&
    checkEmail() == true
  ) {
    $("#regBtn").prop("disabled", false);
    return true;
  } else {
    $("#regBtn").prop("disabled", true);
    return false;
  }
});
