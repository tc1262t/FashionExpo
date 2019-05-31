<!DOCTYPE html>
<html>
    <title>STRADOS</title>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="master.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>
<body>

    <!-- Navbar -->
<div class="w3-right">
  <div class="w3-bar w3-orange w3-card">
   
      <!-- Home-->
      
      <a href="index.php" class="w3-bar-item w3-button w3-padding-small">
          <img src="navigation/aboutus.png" 
         title ="ABOUT US"
         class="w3-bar-item w3-button"   width="70" height="60">
     </a>
   
     

      
      <!-- Register -->
      
    <a href="member.php" class="w3-bar-item w3-button w3-padding-small w3-hide-small">
        <img src="navigation/Register.png" 
         title ="REGISTER"
         class="w3-bar-item w3-button"   width="70" height="60">
      
      </a>
      
      <!-- My Profile -->
      
      <a href="#MyProfile" class="w3-bar-item w3-button w3-padding-small w3-hide-small">
      <img src="navigation/myprofile.png" 
         title ="MY PROFILE"
         class="w3-bar-item w3-button"   width="70" height="60">
      
      </a>
      
       <a href="index.php" class="w3-left w3-bar-item w3-button w3-padding-small w3-hide-small">
      
        <img src="images/LogoStrados.jpg" 
         title ="CONTACT US"
         class="w3-bar-item w3-button"   width="90" height="80">
      
      </a>
   
  </div>
</div>
    
    
    
    
<div class="container"><br><br><br><br>
    
   <!-- Members Login Section --> 
    <h1>Members Login </h1>
  
    
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Username" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">LOGIN</button>
  </form>
</div>
    
    <div class="container"><br><br><br><br>
        
         <h1>Register as a Member</h1>
  
    
        
  <form action="/action_page.php">
      
      <div class="form-group">
      <label for="title">Title:</label>
      <input  class="form-control" placeholder=" Mr, Mrs, Miss.">
    </div>
      
    <div class="form-group">
      <label for="firstname">Firstname:</label>
      <input  class="form-control" placeholder=" Alexandra">
    </div>
      
     <div class="form-group">
      <label for="surnametname">Surname:</label>
      <input class="form-control" placeholder=" O'Conners">
    </div>
    
       <div class="form-group">
      <label for="Age">Age:</label>
      <input class="form-control" placeholder=" 22">
    </div>
      
       <div class="form-group">
      <label for="contracttype">Contract Type:</label>
      <input class="form-control"  placeholder="Part-time">
    </div>
      
      <div class="form-group">
      <label for="contracttype">Type of Employment:</label>
      <input class="form-control" placeholder="Sales Assisstance">
    </div>nav
      
      <div class="form-group">
      <label for="cv">CV:</label>
      
          <input type="file" name="pic" accept="image/*">
          
    </div>
      
    <button type="submit" class="btn btn-default">Register</button>
  </form>
</div>
        
        
        
    
    

</body>
</html>
