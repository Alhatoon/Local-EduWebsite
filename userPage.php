<?php

include 'config.php';



session_start();
//usual error style way :)
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  echo'<div class="container" style="margin:auto ; margin-top:150px; text-align:center; width:40%; border: 2px solid #ddd; padding:30px 30px 30px 30px; font-family: Arial, Helvetica, sans-serif;">
  <h1 style="color:red;">Homepage cannot be accessed without logging in</h1>
  <h3 style="color:black;">Please <a href="index.php"> Login </a>if you already have registered</h3>
  <h3 style="color:black;">Not a member? <a href="register.php">Register</a></h3>
  </div>';
}
else{

$email = $_SESSION['email'];

$sql_score = "Select * from users where email='$email'";
  $result_score = mysqli_query($conn , $sql_score);
  while($row=mysqli_fetch_assoc($result_score)){

    $score1 = $row['quiz1'];
    $score2 = $row['quiz2'];
    $score3 = $row['quiz3'];

    $date = $row['dt'];

    $final_score = $score1 + $score2 + $score3;

  }
$scores = array ( "1" , $score1 , $score2 , $score3);

echo'

<!doctype html>
<html lang="en">
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

    #lessons {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
  margin: auto;
}

#lessons td, #lessons th {
  border: 1px solid #ddd;
  padding: 8px;
}

#lessons tr:hover {background-color: #ddd;}

#lessons th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: black;
  color: white;
}

    </style>

    <title>Home</title>
  
  </head>

  <body>
<div class="container" id="logout">
  <a class="logout" href="logout.php">Logout</a>
  </div>
      <p style="margin-top: 30px; text-align: left; color:grey;" >Last successful login was on: '.$date.' </p>   

      <p style="margin-top: 35px;" >Welcome <b>'.$_SESSION['name'].' !</b></p>';

if(isset($score3))
{
    echo '<div style="margin-top:30px">
        <p>Congratulations! You finished all quizzes. Your final score is : <b style="font-size:20px">'.$final_score.'/12</b></p>
    </div>';}
else{
     echo'<p> Enjoy learning about topic by taking our lessons and quizzes.<p>';   
    }



echo'
<div class="container" style="margin-top: 50px; text-align: center;">
    
  <table id="lessons">
  <tr>
    <th>S.NO</th>
    <th>LESSON TITLE</th>
    <th>QUIZ SCORE</th>
  </tr>';

  $sql = "Select * from lessons";
  $result = mysqli_query($conn , $sql);

  while($row=mysqli_fetch_assoc($result)){

    $title = $row['title'];
    $sid = $row['sno'];
    $sno = $row['sno'];
    $scr = $scores[$sno];
    $scr1 = $scores[--$sno];

  if(isset($scr1)){

    echo'<tr>
    <td>'.$sid.'</td>
    <td><a href="lesson.php?id='.$sid.'">'.$title.'</a></td>';

    if(isset($scr)){
      echo'<td>'.$scr.'</td>';
  }
  else{
        
    echo' <td>Quiz not taken</td>';
  }

  }
      
    echo '</tr>';
  }


echo'
</table>


</div>
  
  </body>

  

  </html>';}
  ?>

