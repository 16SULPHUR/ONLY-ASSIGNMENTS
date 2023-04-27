notesdropdown = document.getElementById("notes-dropdown");
notesdropdown.style.display = "none";

function notesdropdown1() {
    console.log("hi")
  if (notesdropdown.style.display == "none") {
    notesdropdown.style.display = "block";
  } else {
    notesdropdown.style.display = "none";
  }
}
