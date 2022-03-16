<?php 

include 'config.php';


$login = false;
$showerror = false;

if ( $_SERVER["REQUEST_METHOD"] == "POST" ){

$email = $_POST["email"];
$password = $_POST["password"];

  $sql = "Select * from users where email='$email' AND password='$password'";
  $result = mysqli_query($conn , $sql);




  $num = mysqli_num_rows($result);
  
  if ($num == 1){
    $login = true; 
    $row=mysqli_fetch_assoc($result);
    $name = $row['name'];
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    $_SESSION['sno'] = $sno;



    $sql_date="UPDATE users SET dt= now() WHERE email = '".$email."' ";
    $date_result = mysqli_query($conn , $sql_date);


    header("location: userPage.php");
  
  }
else {

$existSql = "SELECT * from `users` where email = '$email'";
$result = mysqli_query($conn, $existSql);
$numExistRows = mysqli_num_rows($result);
 if($numExistRows > 0){
    $exists = true;
    $showerror = "Incorrect password";
} else {
  $showerror=true;
  $showerror = "Account does not exists, please register";
}
}

}

?>

<!doctype html>
<html>
  <head>

    
<style>


body {font-family: Arial, Helvetica, sans-serif;}



form {border: 3px solid lightgray;}



input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 30px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}



.container {
  padding: 50px;
}

span.password {
  float: right;
  padding-top: 16px;
}

.login{
  width: 60%;
  margin: auto;
  text-align: center;
}


  span.password {
     display: block;
     float: none;
  }

.alert {
      border: solid;
      border-width: 1px;
      border-color: black;
      padding: 20px;
      background-color: #ba0000;
      margin-bottom: 5px;
      color: white;
    }


</style>
  
<title>Login</title>
  </head>
  <body>

<?php
    if ($showerror){
      echo'
      <div class="alert">
  '.$showerror.'.
</div>';
      }
?>
    
    <div class="container login" >
    
    <h2 style="margin-bottom: 50px;">LOGIN FORM</h2>

<form action="index.php" method="post">

  <div class="container" >

  
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

        
    <button type="submit">Login</button>

    <p> Not a member? <a href="register.php">Register Here</a></p>
    
  </div>
    
</form>
</div>
</body>
</html>
   
