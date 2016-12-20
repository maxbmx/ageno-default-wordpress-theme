$(function () {

  $('[data-toggle="tooltip"]').tooltip()

})


var hamburger = document.querySelector(".sidebar .hamburger");
var sidebar = document.querySelector(".sidebar");

hamburger.addEventListener("click", function() {
  sidebar.classList.toggle("is-active");
  hamburger.classList.toggle("is-active");
});
