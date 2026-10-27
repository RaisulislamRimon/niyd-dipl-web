$("#demo").click(function () {
  //   alert("hi");
  console.log("hi");
});

$("#demo2").click(function () {
  var demo2 = $(this).text();
  //   alert(demo2);
  console.log("demo2");
});

$("#demo3").click(function () {
  var demo = $(this).text("Demo33");
  alert("demo34");
});

$("#demo4").click(function () {
  //   var demo = $(this).text("Demo33");
  //   alert("demo34");
  $(this).text("Demo44");
});

$(document).ready(function () {
  $("#sum").click(function () {
    var firstNumber = $("#firstNumber").val();
    var secondNumber = $("#secondNumber").val();

    // alert(firstNumber);
    // alert(secondNumber);

    var result = Number(firstNumber) + Number(secondNumber);

    $("#result").val(result);
  });

  $("#sub").click(function () {
    var firstNumber = $("#firstNumber").val();
    var secondNumber = $("#secondNumber").val();

    var result = Number(firstNumber) - Number(secondNumber);

    $("#result").val(result);
  });

  $("#multi").click(function () {
    var firstNumber = $("#firstNumber").val();
    var secondNumber = $("#secondNumber").val();

    var result = Number(firstNumber) * Number(secondNumber);

    $("#result").val(result);
  });

  $("#dev").click(function () {
    var firstNumber = $("#firstNumber").val();
    var secondNumber = $("#secondNumber").val();

    var result = Number(firstNumber) / Number(secondNumber);

    $("#result").val(result);
  });
});
