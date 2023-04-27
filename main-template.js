dropdownlist = document.getElementById("dropdown-list");
dropdownlist.style.display = "none";

function showdropdown() {
  if (dropdownlist.style.display == "none") {
    dropdownlist.style.display = "flex";
  } else {
    dropdownlist.style.display = "none";
  }
}

function disnone() {
  dropdownlist.style.display = "none";
}

// --------------------scroll - top--------------------
// Get the button
let mybutton = document.getElementById("scroll-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}