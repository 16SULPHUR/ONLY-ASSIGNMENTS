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

function getsem()  {
    var semSelect = document.getElementById("semSelect")
    
    if (semSelect.value == "semester1") {
        for (let i = 0; i < 8; i++) {
            if (i == 0) {
                continue
            }
            document.getElementById(dropdownsForSems[i]).innerHTML = " ";
        }
        console.log("sem1") 
        document.getElementById(
          "dropdowns-for-sem1"
        ).innerHTML = `<select class="dropdowns" name="subject" id="subject">
          <option value="Basic Electrical and Electronics Engineering">
            Basic Electrical and Electronics Engineering
          </option>
          <option value="Prigraming with C">Prigraming with C</option>
          <option value="Physics">Physics</option>
          <option value="Linear Algebra">Linear Algebra</option>
          <option value="Professional Communication">
            Professional Communication
          </option>
        </select>

        <select class="dropdowns" name="material" id="material">
          <option value="Notes">Notes</option>
          <option value="Practicals">Practicals</option>
          <option value="Assignments">Assignment</option>
        </select>

        <select class="dropdowns" name="unit" id="unit">
          <option value="Unit1">Unit 1</option>
          <option value="Unit2">Unit 2</option>
          <option value="Unit3">Unit 3</option>
          <option value="Unit4">Unit 4</option>
          <option value="Unit5">Unit 5</option>
          <option value="Unit6">Unit 6</option>
        </select>`;
    }
    if (semSelect.value == "semester2") {
        for (let i = 0; i < 8; i++) {
          if (i == 1) {
            continue;
          }
          document.getElementById(dropdownsForSems[i]).innerHTML = " ";
        }
        document.getElementById(
          "dropdowns-for-sem2"
        ).innerHTML = `<select class="dropdowns" name="subject" id="subject">
          <option value="Basic Electrical and Electronics Engineering">
            Digital logic and computer Design (EC3002)
          </option>
          <option value="Prigraming with C">Programming with Python (IT3008)</option>
          <option value="Physics">Web Designing (IT3007)</option>
          <option value="Linear Algebra">Engineering Drafting and Computer Graphics (ME3004)</option>
          <option value="Professional Communication">
            Environmental Studies (CV3003)
          </option>
        </select>

        <select class="dropdowns" name="material" id="material">
          <option value="Notes">Notes</option>
          <option value="Practicals">Practicals</option>
          <option value="Assignments">Assignments</option>
        </select>

        <select class="dropdowns" name="unit" id="unit">
          <option value="Unit1">Unit 1</option>
          <option value="Unit2">Unit 2</option>
          <option value="Unit3">Unit 3</option>
          <option value="Unit4">Unit 4</option>
          <option value="Unit5">Unit 5</option>
          <option value="Unit6">Unit 6</option>
        </select>`;
        console.log("sem2")
    }
    if (semSelect.value == "semester3") {
        for (let i = 0; i < 8; i++) {
          if (i == 2) {
            continue;
          }
          document.getElementById(dropdownsForSems[i]).innerHTML = " ";
        }
        document.getElementById(
          "dropdowns-for-sem3"
        ).innerHTML = `<select class="dropdowns" name="subject" id="subject">
          <option value="Basic Electrical and Electronics Engineering">
            Database Management System (CE4012)
          </option>
          <option value="Prigraming with C">Software Engineering (CE4013)</option>
          <option value="Physics">Programming with JAVA (IT4016)</option>
          <option value="Linear Algebra">Web Development (IT4017)</option>
          <option value="Professional Communication">
            Mobile Application Development (IT4018)
          </option>
        </select>

        <select class="dropdowns" name="material" id="material">
          <option value="Notes">Notes</option>
          <option value="Practicals">Practicals</option>
          <option value="Assignments">Assignment</option>
        </select>

        <select class="dropdowns" name="unit" id="unit">
          <option value="Unit1">Unit 1</option>
          <option value="Unit2">Unit 2</option>
          <option value="Unit3">Unit 3</option>
          <option value="Unit4">Unit 4</option>
          <option value="Unit5">Unit 5</option>
          <option value="Unit6">Unit 6</option>
        </select>`;
        console.log("sem3")
    }
    if (semSelect.value == "semester4") {
        for (let i = 0; i < 8; i++) {
          if (i == 3) {
            continue;
          }
          document.getElementById(dropdownsForSems[i]).innerHTML = " ";
        }
        document.getElementById(
          "dropdowns-for-sem4"
        ).innerHTML = `<select class="dropdowns" name="subject" id="subject">
          <option value="Basic Electrical and Electronics Engineering">
            Basic Electrical and Electronics Engineering
          </option>
          <option value="Prigraming with C">Prigraming with C</option>
          <option value="Physics">Physics</option>
          <option value="Linear Algebra">Linear Algebra</option>
          <option value="Professional Communication">
            Professional Communication
          </option>
        </select>

        <select class="dropdowns" name="material" id="material">
          <option value="Notes">Notes</option>
          <option value="Practicals">Practicals</option>
          <option value="Assignments">Assignment</option>
        </select>

        <select class="dropdowns" name="unit" id="unit">
          <option value="Unit1">Unit 1</option>
          <option value="Unit2">Unit 2</option>
          <option value="Unit3">Unit 3</option>
          <option value="Unit4">Unit 4</option>
          <option value="Unit5">Unit 5</option>
          <option value="Unit6">Unit 6</option>
        </select>`;
        console.log("sem4")
    }
    if (semSelect.value == "semester5") {
        for (let i = 0; i < 8; i++) {
          if (i == 4) {
            continue;
          }
          document.getElementById(dropdownsForSems[i]).innerHTML = " ";
        }
        document.getElementById(
          "dropdowns-for-sem5"
        ).innerHTML = `<select class="dropdowns" name="subject" id="subject">
          <option value="Basic Electrical and Electronics Engineering">
            Basic Electrical and Electronics Engineering
          </option>
          <option value="Prigraming with C">Prigraming with C</option>
          <option value="Physics">Physics</option>
          <option value="Linear Algebra">Linear Algebra</option>
          <option value="Professional Communication">
            Professional Communication
          </option>
        </select>

        <select class="dropdowns" name="material" id="material">
          <option value="Notes">Notes</option>
          <option value="Practicals">Practicals</option>
          <option value="Assignments">Assignment</option>
        </select>

        <select class="dropdowns" name="unit" id="unit">
          <option value="Unit1">Unit 1</option>
          <option value="Unit2">Unit 2</option>
          <option value="Unit3">Unit 3</option>
          <option value="Unit4">Unit 4</option>
          <option value="Unit5">Unit 5</option>
          <option value="Unit6">Unit 6</option>
        </select>`;
        console.log("sem5")
    }
    if (semSelect.value == "semester6") {
        for (let i = 0; i < 8; i++) {
          if (i == 5) {
            continue;
          }
          document.getElementById(dropdownsForSems[i]).innerHTML = " ";
        }
        document.getElementById(
          "dropdowns-for-sem6"
        ).innerHTML = `<select class="dropdowns" name="subject" id="subject">
          <option value="Basic Electrical and Electronics Engineering">
            Basic Electrical and Electronics Engineering
          </option>
          <option value="Prigraming with C">Prigraming with C</option>
          <option value="Physics">Physics</option>
          <option value="Linear Algebra">Linear Algebra</option>
          <option value="Professional Communication">
            Professional Communication
          </option>
        </select>

        <select class="dropdowns" name="material" id="material">
          <option value="Notes">Notes</option>
          <option value="Practicals">Practicals</option>
          <option value="Assignments">Assignment</option>
        </select>

        <select class="dropdowns" name="unit" id="unit">
          <option value="Unit1">Unit 1</option>
          <option value="Unit2">Unit 2</option>
          <option value="Unit3">Unit 3</option>
          <option value="Unit4">Unit 4</option>
          <option value="Unit5">Unit 5</option>
          <option value="Unit6">Unit 6</option>
        </select>`;
        console.log("sem6")
    }
    if (semSelect.value == "semester7") {
        for (let i = 0; i < 8; i++) {
          if (i == 6) {
            continue;
          }
          document.getElementById(dropdownsForSems[i]).innerHTML = " ";
        }
        document.getElementById(
          "dropdowns-for-sem7"
        ).innerHTML = ` <select class="dropdowns" name="subject" id="subject">
          <option value="Basic Electrical and Electronics Engineering">
            Basic Electrical and Electronics Engineering
          </option>
          <option value="Prigraming with C">Prigraming with C</option>
          <option value="Physics">Physics</option>
          <option value="Linear Algebra">Linear Algebra</option>
          <option value="Professional Communication">
            Professional Communication
          </option>
        </select>

        <select class="dropdowns" name="material" id="material">
          <option value="Notes">Notes</option>
          <option value="Practicals">Practicals</option>
          <option value="Assignments">Assignment</option>
        </select>

        <select class="dropdowns" name="unit" id="unit">
          <option value="Unit1">Unit 1</option>
          <option value="Unit2">Unit 2</option>
          <option value="Unit3">Unit 3</option>
          <option value="Unit4">Unit 4</option>
          <option value="Unit5">Unit 5</option>
          <option value="Unit6">Unit 6</option>
        </select>`;
        console.log("sem7")
    }
    if (semSelect.value == "semester8") {
        for (let i = 0; i < 8; i++) {
          if (i == 7) {
            continue;
          }
          document.getElementById(dropdownsForSems[i]).innerHTML = " ";
        }
        document.getElementById(
          "dropdowns-for-sem8"
        ).innerHTML = `<select class="dropdowns" name="subject" id="subject">
          <option value="Basic Electrical and Electronics Engineering">
            Basic Electrical and Electronics Engineering
          </option>
          <option value="Prigraming with C">Prigraming with C</option>
          <option value="Physics">Physics</option>
          <option value="Linear Algebra">Linear Algebra</option>
          <option value="Professional Communication">
            Professional Communication
          </option>
        </select>

        <select class="dropdowns" name="material" id="material">
          <option value="Notes">Notes</option>
          <option value="Practicals">Practicals</option>
          <option value="Assignments">Assignment</option>
        </select>

        <select class="dropdowns" name="unit" id="unit">
          <option value="Unit1">Unit 1</option>
          <option value="Unit2">Unit 2</option>
          <option value="Unit3">Unit 3</option>
          <option value="Unit4">Unit 4</option>
          <option value="Unit5">Unit 5</option>
          <option value="Unit6">Unit 6</option>
        </select>`;
        console.log("sem8")
    }
}

window.onload = getsem()