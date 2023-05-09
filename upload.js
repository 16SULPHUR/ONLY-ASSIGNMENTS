let dropdownsForSems = [
  "dropdowns-for-sem1",
  "dropdowns-for-sem2",
  "dropdowns-for-sem3",
  "dropdowns-for-sem4",
  "dropdowns-for-sem5",
  "dropdowns-for-sem6",
  "dropdowns-for-sem7",
  "dropdowns-for-sem8"
];

function getsem() {
    var semSelect = document.getElementById("semSelect")

    if (semSelect.value == "semester1") {
        for (let i = 0; i < 8; i++) {
            if (i == 0) {
                continue
            }
          document.getElementById(dropdownsForSems[i]).style.display = "none";
        }
        document.getElementById("dropdowns-for-sem1").style.display = "block";
        console.log("sem1")
    }
    if (semSelect.value == "semester2") {
        for (let i = 0; i < 8; i++) {
          if (i == 1) {
            continue;
          }
          document.getElementById(dropdownsForSems[i]).style.display = "none";
        }
        document.getElementById("dropdowns-for-sem2").style.display = "block";
        console.log("sem2")
    }
    if (semSelect.value == "semester3") {
        for (let i = 0; i < 8; i++) {
          if (i == 2) {
            continue;
          }
          document.getElementById(dropdownsForSems[i]).style.display = "none";
        }
        document.getElementById("dropdowns-for-sem3").style.display = "block";
        console.log("sem3")
    }
    if (semSelect.value == "semester4") {
        for (let i = 0; i < 8; i++) {
          if (i == 3) {
            continue;
          }
          document.getElementById(dropdownsForSems[i]).style.display = "none";
        }
        document.getElementById("dropdowns-for-sem4").style.display = "block";
        console.log("sem4")
    }
    if (semSelect.value == "semester5") {
        for (let i = 0; i < 8; i++) {
          if (i == 4) {
            continue;
          }
          document.getElementById(dropdownsForSems[i]).style.display = "none";
        }
        document.getElementById("dropdowns-for-sem5").style.display = "block";
        console.log("sem5")
    }
    if (semSelect.value == "semester6") {
        for (let i = 0; i < 8; i++) {
          if (i == 5) {
            continue;
          }
          document.getElementById(dropdownsForSems[i]).style.display = "none";
        }
        document.getElementById("dropdowns-for-sem6").style.display = "block";
        console.log("sem6")
    }
    if (semSelect.value == "semester7") {
        for (let i = 0; i < 8; i++) {
          if (i == 6) {
            continue;
          }
          document.getElementById(dropdownsForSems[i]).style.display = "none";
        }
        document.getElementById("dropdowns-for-sem7").style.display = "block";
        console.log("sem7")
    }
    if (semSelect.value == "semester8") {
        for (let i = 0; i < 8; i++) {
          if (i == 7) {
            continue;
          }
          document.getElementById(dropdownsForSems[i]).style.display = "none";
        }
        document.getElementById("dropdowns-for-sem8").style.display = "block";
        console.log("sem8")
    }
}

window.onload = getsem()