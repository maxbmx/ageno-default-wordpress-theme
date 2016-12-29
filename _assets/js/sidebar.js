var hamburger = document.querySelector(".sidebar .hamburger");
var sidebar   = document.querySelector(".sidebar");
var notSidebar   = document.querySelector(".sidebar");
//var content   = document.querySelector("#content");

hamburger.addEventListener("click", function() {
  sidebar.classList.toggle("is-active");
  hamburger.classList.toggle("is-active");
});

document.addEventListener("keydown", function(event) {
  console.log(event.which);
  if (event.which == 27) {
    sidebar.classList.remove("is-active");
    hamburger.classList.remove("is-active");
  }
});

