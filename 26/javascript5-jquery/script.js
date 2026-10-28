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
