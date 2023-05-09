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



    

    <form action="upload.php" method="post">
      <div class="dropdown-flex">
        <select onchange="getsem()" class="dropdowns" name="semSelect" id="semSelect">
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
            
          </div>
          
          
          <div id="dropdowns-for-sem2" class="relative-dropdowns dropdown-flex">
            
          </div>


          <div id="dropdowns-for-sem3" class="relative-dropdowns dropdown-flex">
            
          </div>

          <div id="dropdowns-for-sem4" class="relative-dropdowns dropdown-flex">
            
          </div>

          <div id="dropdowns-for-sem5" class="relative-dropdowns dropdown-flex">
            
          </div>

          <div id="dropdowns-for-sem6" class="relative-dropdowns dropdown-flex">
            
          </div>

          <div id="dropdowns-for-sem7" class="relative-dropdowns dropdown-flex">
           
          </div>

          <div id="dropdowns-for-sem8" class="relative-dropdowns dropdown-flex">
            
          </div>
        </div>
      </div>

      <label for="url">URL:</label>
      <input name="url" type="text" class="form-control" id="url" />
      <button name = "submit" type="submit" class="btn btn-primary submit">Submit</button>
    </form>
    
    
    <script src="upload.js"></script>
      <!-- PHP Script -->
    <?php
    if (isset($_POST['submit'])){
      // connecting to server
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "only-assignments";
      
      $sem = $_POST['semSelect'];
      $sub = $_POST['subject'];
      $material = $_POST['material'];
      $unit = $_POST['unit'];
      $url = $_POST['url'];

      $conn = mysqli_connect($servername , $username , $password , $database);

// pushing query
$sql_str = "INSERT INTO `$sem` (`Sr. No.`, `Subject`, `Material`, `Unit`, `URL`) VALUES (NULL, '$sub', '$material', '$unit', '$url')";

$newdb = mysqli_query($conn , $sql_str);

    }
    ?>
  </body>
</html>
