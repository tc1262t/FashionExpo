<!DOCTYPE html>
<html>
    
    
    
<title>FashionExpo</title>
    <head>
<meta charset="UTF-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        
        
        
<link rel="stylesheet" href="master.css">
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="table.css">
<link rel="stylesheet" href="imageRollover.css">
<link rel="stylesheet" href="slideshow.css">    
<link rel="stylesheet" href="slideshow.js"> 
        
<link rel="stylesheet" href="column.css">
 

    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel ="stylesheet" href="imgback.css">

</head>

    <!-- Side Navigation -->
    
<body>
    
<?php    require "navigation/navigationside.php"; ?>
        <br><br> <br>
  
    
<!--        Top Navigation          -->
    <div id="container">
<?php    require "navigation/header.php"; ?>
        <br><br> <br>
  </div>
    
    
  
    

  <!--       Slide Show             -->

    <div style="height: auto; width:auto;">
   
        <div id="slider">
   <figure>
     <img src="product/slide1.jpg">
     <img src="product/slide2.jpg">
     <img src="product/slide3.jpg">
       </figure>

</div>
</div>
        
    <!--  New table-->
    
<!-- 1x3 column LEFT -->

<div class="w3-row-padding w3-padding-32" style="margin:1 -16px ">
        <div class="w3-third w3-margin-bottom">
         
          <div class="w3-container w3-white">
            <p><b> <a href="#Link"><img 
                src="images/top3.jpg" style="width:auto;height:500px;">
                  </a></b></p>
            <p>COLLECTION</p>
           
           
          </div>
        </div>
          
    <!--  1X3 column MIDDLE        -->
        <div class="w3-third w3-margin-bottom">
         
          <div class="w3-container w3-white">
            <p><b> <a href="#Link"><img 
                src="images/tops.jpg" style="width:auto;height:500px;">
                  </a></b></p>
            <p>PRODUCTS</p>
            
           
          </div>
        </div>
    
    <!-- 1x3 column RIGHT     -->
        <div class="w3-third w3-margin-bottom">
         
          <div class="w3-container w3-white">
            
              
              <p><b><a href="#Link"><img 
                src="product/a5.jpg" style="width:auto;height:500px;">
                  </a> </b></p>
            <p >CUSTOMER CARE </p>
            
          </div>
        </div>
      </div>
    </body>

  <!-- Swarve -->
    
 
   
    
    
    
    
      <!-- Clothing Range page 2-->
    
    
    
    
    
    

  <!-- New designs -->
   
    
    
    
    
    
    
  <!-- On Click HTML Anchor -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->

   
  
<!-- End Page Content -->



<!-- Footer -->
<? php require 'navigation/footer.php'; ?>



</html>
