var imageData = ["img/1.jpg", "img/2.jpg", "img/3.jpg", "img/4.jpg"];

var mainImage = document.getElementById("mainImage");

// mainImage.setAttribute("src", imageData[1]);
// mainImage.setAttribute("src", imageData[3]);
// mainImage.setAttribute("src", "img/4.jpg");

var imageDataLength = imageData.length;

var index = 0;

function changeImage() {
  mainImage.setAttribute("src", imageData[index]);
  index++;
  if (index == imageDataLength) {
    index = 0;
  }
}

// setInterval(changeImage, 1000);

// var subImage2 = document.getElementById("subImage2");
// subImage2.onclick = function () {
//   // var subImage2src = document.getElementById("subImage2").getAttribute("src");
//   // console.log(subImage2src);
//   // mainImage.setAttribute("src", subImage2src);
//   mainImage.setAttribute("src", this.getAttribute("src"));
// };

// var subImage1 = document.getElementById("subImage1");
// subImage1.onclick = function () {
//   mainImage.setAttribute("src", this.getAttribute("src"));
// };

// var subImage3 = document.getElementById("subImage3");
// subImage3.onclick = function () {
//   mainImage.setAttribute("src", this.getAttribute("src"));
// };

// var subImage4 = document.getElementById("subImage4");
// subImage4.onclick = function () {
//   mainImage.setAttribute("src", this.getAttribute("src"));
// };

// $("#subImage1").click(function () {
//   $("#mainImage").attr("src", $(this).attr("src"));
//   // var a = $("#mainImage").attr("src", $(this).attr("src"));
//   // console.log(a);
// });

// $("#subImage2").click(function () {
//   $("#mainImage").attr("src", $(this).attr("src"));
// });

// $("#subImage3").click(function () {
//   $("#mainImage").attr("src", $(this).attr("src"));
// });

// $("#subImage4").click(function () {
//   $("#mainImage").attr("src", $(this).attr("src"));
// });
