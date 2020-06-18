<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="style/reset.css">
      <link rel="stylesheet" type="text/css" href="style/style1.css">
     
  
      
    </head>
    <body>
        <div id="title">
        <marquee loop="445"
scrollamount="9" width="100%">Nicholas Lacapria - User Interface II </marquee> 
    

</div>

    <div class="container container-1"> <!-- Sart container 1-->
     
      <div id='blank'>
        <h1 class='hr'>Nicholas Lacapria</h1>
      </div>
        <div class="item-1">
          <button class='btng'>
            <a href='index.html'>Home</a>
          </button>
        </div>
        <div class="item-1">
          <button class='btng'>
            <a href='about.html'>About</a>
          </button>
        </div>
        <div class="item-1">
          <button class='btng'>
            <a href='contact.html'>Contact</a>
          </button>
        </div>
        <div class="item-1">
          <button class='btng'>
            <a href='projects.html'>Projects</a>
          </button>
        </div>
      </div> <!-- End container 1-->
     

      <?php
// Defensive function from SQL Injection Attacks by stripping out Uneseccary Characters that do not belong in the database or page.
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


// define variables and set to empty values
$nameErr = $emailErr = $genderErr  = "";
$name = $email = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }


  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}


?>

<h2>Your Submission</h2>


<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
    

  
    <div id="cD">&copy
      <script type="text/javascript">
       var vv = new Date();
      document.write('&copy');
      document.getElementById("cD").innerHTML = vv;</script>
     
    </div>
  
    </body>
    </html>
    
    