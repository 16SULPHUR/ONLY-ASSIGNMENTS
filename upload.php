<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="main-template.css" />
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
      $(function () {
        $("#includeHtml").load("main-template.html");
      });
    </script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload Documents</title>

    <!-- Bootsrtap CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="upload.css" />
  </head>
  <body>
    <div id="includeHtml"></div>



    

    <form>
      <div class="dropdown-flex">
        <select onchange="getsem()" class="dropdowns" name="semester" id="semSelect">
          <option value="semester1">Semester 1</option>
          <option value="semester2">Semester 2</option>
          <option value="semester3">Semester 3</option>
          <option value="semester4">Semester 4</option>
          <option value="semester5">Semester 5</option>
          <option value="semester6">Semester 6</option>
          <option value="semester7">Semester 7</option>
          <option value="semester8">Semester 8</option>
        </select>



        <div>

          <div id="dropdowns-for-sem1" class="relative-dropdowns dropdown-flex">
            <select class="dropdowns" name="subject" id="subject">
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

        <select class="dropdowns" name="semester" id="semester">
          <option value="Unit1">Unit 1</option>
          <option value="Unit2">Unit 2</option>
          <option value="Unit3">Unit 3</option>
          <option value="Unit4">Unit 4</option>
          <option value="Unit5">Unit 5</option>
          <option value="Unit6">Unit 6</option>
        </select>
          </div>
          
          
          <div id="dropdowns-for-sem2" class="relative-dropdowns dropdown-flex">
            <select class="dropdowns" name="subject" id="subject">
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

        <select class="dropdowns" name="semester" id="semester">
          <option value="Unit1">Unit 1</option>
          <option value="Unit2">Unit 2</option>
          <option value="Unit3">Unit 3</option>
          <option value="Unit4">Unit 4</option>
          <option value="Unit5">Unit 5</option>
          <option value="Unit6">Unit 6</option>
        </select>
          </div>


          <div id="dropdowns-for-sem3" class="relative-dropdowns dropdown-flex">
            <select class="dropdowns" name="subject" id="subject">
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

        <select class="dropdowns" name="semester" id="semester">
          <option value="Unit1">Unit 1</option>
          <option value="Unit2">Unit 2</option>
          <option value="Unit3">Unit 3</option>
          <option value="Unit4">Unit 4</option>
          <option value="Unit5">Unit 5</option>
          <option value="Unit6">Unit 6</option>
        </select>
          </div>

          <div id="dropdowns-for-sem4" class="relative-dropdowns dropdown-flex">
            <select class="dropdowns" name="subject" id="subject">
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

        <select class="dropdowns" name="semester" id="semester">
          <option value="Unit1">Unit 1</option>
          <option value="Unit2">Unit 2</option>
          <option value="Unit3">Unit 3</option>
          <option value="Unit4">Unit 4</option>
          <option value="Unit5">Unit 5</option>
          <option value="Unit6">Unit 6</option>
        </select>
          </div>

          <div id="dropdowns-for-sem5" class="relative-dropdowns dropdown-flex">
            <select class="dropdowns" name="subject" id="subject">
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

        <select class="dropdowns" name="semester" id="semester">
          <option value="Unit1">Unit 1</option>
          <option value="Unit2">Unit 2</option>
          <option value="Unit3">Unit 3</option>
          <option value="Unit4">Unit 4</option>
          <option value="Unit5">Unit 5</option>
          <option value="Unit6">Unit 6</option>
        </select>
          </div>

          <div id="dropdowns-for-sem6" class="relative-dropdowns dropdown-flex">
            <select class="dropdowns" name="subject" id="subject">
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

        <select class="dropdowns" name="semester" id="semester">
          <option value="Unit1">Unit 1</option>
          <option value="Unit2">Unit 2</option>
          <option value="Unit3">Unit 3</option>
          <option value="Unit4">Unit 4</option>
          <option value="Unit5">Unit 5</option>
          <option value="Unit6">Unit 6</option>
        </select>
          </div>

          <div id="dropdowns-for-sem7" class="relative-dropdowns dropdown-flex">
            <select class="dropdowns" name="subject" id="subject">
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

        <select class="dropdowns" name="semester" id="semester">
          <option value="Unit1">Unit 1</option>
          <option value="Unit2">Unit 2</option>
          <option value="Unit3">Unit 3</option>
          <option value="Unit4">Unit 4</option>
          <option value="Unit5">Unit 5</option>
          <option value="Unit6">Unit 6</option>
        </select>
          </div>

          <div id="dropdowns-for-sem8" class="relative-dropdowns dropdown-flex">
            <select class="dropdowns" name="subject" id="subject">
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

        <select class="dropdowns" name="semester" id="semester">
          <option value="Unit1">Unit 1</option>
          <option value="Unit2">Unit 2</option>
          <option value="Unit3">Unit 3</option>
          <option value="Unit4">Unit 4</option>
          <option value="Unit5">Unit 5</option>
          <option value="Unit6">Unit 6</option>
        </select>
          </div>
        </div>
      </div>

      <label for="url">URL:</label>
      <input type="text" class="form-control" id="url" />
      <button type="submit" class="btn btn-primary submit">Submit</button>
    </form>


      <!-- PHP Script -->
    <?php
    if (isset($_POST["submit"])){
      // connecting to server
    $servername = "localhost";
$username = "root";
$password = "";
$database = "only-assignments";

$conn = mysqli_connect($servername , $username , $password , $database);

// pushing query
$sem = $_POST["semSelect"];
$sub = $_POST["subject"];
$material = $_POST["material"];
$unit = $_POST["unit"];
$url = $_POST["url"];
$sql_str = "INSERT INTO `$sem` (`Sr. No.`, `Subject`, `Material`, `Unit`, `URL`) VALUES (NULL, '$sub', '$material', '$unit', '$url')";

$newdb = mysqli_query($conn , $sql_str);

    }
    ?>
    <script src="upload.js"></script>
  </body>
</html>
