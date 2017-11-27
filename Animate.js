function openLandingPage() {
document.location = "./tiles.php";
}
var size = {
  width: window.innerWidth || document.body.clientWidth,
  height: window.innerHeight || document.body.clientHeight
}

window.onload = function() {
  //resizeWrappers();
};

window.onresize = function(event) {
  //resizeWrappers();
};

function resizeWrappers() {
  var slideWrapper1 = document.getElementById("slideWrapper1");
  var slideWrapper2 = document.getElementById("slideWrapper2");

  var diagonalLength = Math.sqrt(Math.pow(size.width, 2) + Math.pow(size.height, 2));
  slideWrapper1.style.width = diagonalLength;
  slideWrapper2.style.width = diagonalLength;
}