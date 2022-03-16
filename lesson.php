<?php

include 'config.php';

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  // header("location: index.php ");
  // exit;
  //The error do here same for quiz too dont forget 
  echo'<div class="container" style="margin:auto ; margin-top:150px; text-align:center; width:40%; border: 2px solid #ddd; padding:30px 30px 30px 30px; font-family: Arial, Helvetica, sans-serif;">
  <h1 style="color:red;">Lessons cannot be accessed without logging in</h1>
  <h3 style="color:black;">Please <a href="index.php"> Login </a>if you already have registered</h3>
  <h3 style="color:black;">Not a member? <a href="register.php">Register Here</a></h3>
  </div>';

}

else{

  $id = $_GET['id'];

$sql = "Select * from lessons where sno='$id'";
$result = mysqli_query($conn , $sql);

  $row=mysqli_fetch_assoc($result);
 
  $title = $row['title'];
  $content = $row['content'];




//I had to style this way or it will be too messy 
echo'

<!doctype html>
<html>
  <head>
  <style>
        
        body {font-family: Arial, Helvetica, sans-serif;}
       
        .logout{
  background-color: black;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: auto;
  
}

#logout{
  text-align: right;
}

  </style>

    <title>Lesson - <?php echo $title ?></title>
  
  </head>
  
  <body>

  <div class="container" id="logout">
  <a class="logout" href="logout.php">Logout</a>
  </div>

 <!-- Displaying the lesson title and content -->

<div class="container" style="text-align:center; margin:auto; margin-top:70px; background-color:black; color:white; padding:0.25px; width:30%">

<h3>'.$title.'</h3>

</div>

<div class="container" style="text-align:center; margin:auto; margin-top:50px; width:70%">

<p> '.$content.' ?> </p>

</div>

<div class="container" style="text-align:center; margin-top:50px">

<!-- <a href="quiz.php?qid='.$id.'"> Take Quiz </a> -->

<a class="link" href="quiz.php?qid='.$id.'">Take Quiz</a>

<p style="font-size: small;"> Go Back to <a href="userPage.php">HOMEPAGE</a></p>

</div>

    
  </body>
</html>';
}
?>