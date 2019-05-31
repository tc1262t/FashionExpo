<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="master.css">
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="table.css"> 
    <link rel="stylesheet" href="button.css"> 
  <style>
    
      .g-recaptcha {
          margin-bottom:10px;
          
      }
    
    </style>  
    
</head>
<body>

    <!-- Navbar -->
<?php    require "navigation/header.php";   ?>
  
    
    
<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);


?>
    
    
    
    
<!--  LOGIN page  -->  
    <br><br><br>
<center> <h2>Login</h2>  </center>

<form action="/login.php">
 

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text">

    <label for="psw"><b>Password</b></label>
    <input type="password" >
        
    <button type="submit">Login</button>
    
  </div>

  
</form>
<br><br><br>
    
    
 <center> <h2>Register</h2> </center>

<form action="/action_page.php">
 

  <div class="container">
      
    <label for="uname"><b>First name</b></label>
    <input type="text">

    <label for="psw"><b>Surname</b></label>
    <input type="text" >
      
    <label for="psw"><b>Age</b></label>
    <input type="text">
      
      
    <label for="psw"><b>Gender</b></label>
    <input type="text">
      
    <label for="psw"><b>Email-Address</b></label>
    <input type="text"  name="txtEmail" id="txtEmail"> 
      
      
    <label for="psw"><b>Address line</b></label>
    <input type="text">
      
      
      
    <label for="psw"><b>City</b></label>
    <input type="text" >
      
    <label for="psw"><b>Postcode</b></label>
    <input type="text">
      
      <div class="g-recaptcha" data-sitekey="6LfksG8UAAAAAEBxCNHOAIilDzBfu3t2Yi2oBqYB"></div>
      
      
    
        
    <button type="submit" name="btnRegister">Register</button>
    
      <?php
      
      $email = $_POST['txtEmail'];
      
      if (isset($_POST["btnRegister"])) {
          
          // send email
mail($email,"My subject",$msg);
          
    echo "Yes, mail is set";    
}else if (!isset($_POST["btnRegister"])){  
    echo "N0, mail is not set";
}
      
      
      ?>
      
      
  </div>
</form>
  
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>
