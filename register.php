<?php 



include 'config.php';

$showalert = false;
$showerror = false;

if ( $_SERVER["REQUEST_METHOD"] == "POST" ){

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];


$existSql = "SELECT * from `users` where email = '$email'";
$result = mysqli_query($conn, $existSql);
$numExistRows = mysqli_num_rows($result);


if($numExistRows > 0){

    $exists = true;
    $showerror = "You already have an account";
}


else{
  $exists = false;
if (($confirmpassword == $password) && $exists == false){

  $sql = "INSERT INTO `users` (`name`, `email`, `password`, `dt`) VALUES ('$name', '$email', '$password', current_timestamp())";
  $result = mysqli_query($conn , $sql);

  if ($result){
    $showalert = true;
    header("location:index.php");
  }

}

else {

  $showerror = "Passwords do not match";
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
      padding-top: 20px;
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

    <title>Register</title>

  </head>

  <body>
<?php
    if ($showerror){
      echo'<div class="alert">
      '.$showerror.'.
    </div>';
      }
?>
    

    <div class="container login" >
    
    <h2 style="margin-bottom: 50px;">REGISTRATION FORM</h2>

<form action="register.php" method="post">

  <div class="container" >

  <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="confirmpassword"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="confirmpassword" required>
        
    <button type="submit">Register</button>

    
    <p> Already a member? <a href="index.php">Login</a></p>
  
  </div>
    
  
</form>
</div>
    

  </body>
</html>