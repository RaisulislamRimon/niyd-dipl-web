document.getElementById("plantQuiz").addEventListener("submit", function (e) {
  e.preventDefault();

  const sunlight = document.getElementById("sunlight").value;
  const care = document.getElementById("care").value;
  const pets = document.getElementById("pets").value;
  //   console.log(sunlight, care, pets);

  const resultDiv = document.getElementById("result");
  //   console.log(resultDiv);
  let plantMatch = "";

  if (sunlight === "low" && care === "moderate" && pets === "yes") {
    plantMatch = "Mango Tree";
    console.log(plantMatch);
  } else if (sunlight === "low" && care === "moderate" && pets === "no") {
    plantMatch = "Banana Tree";
    console.log(plantMatch);
  } else if (sunlight === "high" && care === "moderate" && pets === "no") {
    plantMatch = "Money Plant";
    console.log(plantMatch);
  } else if (sunlight === "high" && care === "high" && pets === "no") {
    plantMatch = "New Plant";
    console.log(plantMatch);
  } else {
    plantMatch = "Not Match";
  }

  resultDiv.innerText = plantMatch;
  resultDiv.style.display = "block";
});
