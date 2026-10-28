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
var subImage2 = document.getElementById("subImage2");
subImage2.onclick = function () {
  var subImage2src = document.getElementById("subImage2").getAttribute("src");
  // console.log(subImage2src);
  mainImage.setAttribute("src", subImage2src);
};
