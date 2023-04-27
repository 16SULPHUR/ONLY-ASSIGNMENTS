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
