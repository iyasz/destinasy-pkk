window.onscroll = function () {
  myFunction();
};

var navbar = document.getElementById("nav");

function myFunction() {
  navbar.classList.toggle("sticky", window.scrollY > 0);
}
