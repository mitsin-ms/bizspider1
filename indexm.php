<?php
session_start();
//if (isset($_SESSION["emailid"]))
  //  echo "<script> window.location = 'index.php' </script>";
?>



<!Doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel = "stylesheet" href="css/stylem.css" type="text/css">

        
    
	</head>
    //body onload = "funcookie();"
	<body>
	
	<!-- <div class="container">
	  <div class="jumbotron">
	    <h1>Bootstrap Tutorial</h1> 
	    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
	    responsive, mobile-first projects on the web.</p> 
	  </div>
	  <p>This is some text.</p> 
	  <p>This is another text.</p> 
	</div>
 -->
 	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/logo1.png"  alt=""> <!--width="250" height="60"-->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto"  id="morespaceinnavbar">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav1" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav1" href="#">Our Works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav1" href="#">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav1" href="#">Our Products</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link nav1" href="#">Clients</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link nav1" href="#">Services</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link nav1" data-toggle="modal"  href="#ModalLoginForm">Contact</a>
            </li>    
            <li class="nav-item">
              <a class="nav-link nav1" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav1" href="signup.html">Sign Up</a>
            </li>  
            <!--<a data-toggle="modal" href="#myModal" class="button">Launch myModal Window</a>-->  
              
              
          </ul>
        </div>
      </div>
    </nav>
    <hr>
    <div class="fullwidthimage">
          <p></p>
          <h1></h1>
          <h1>.</h1>
          <h1></h1>
          <h1></h1>
          <h1></h1>
          <h1>.</h1>
          <h1>.</h1>  

          <h1 class="lettersh1"> WE ARE <span id= "demo1" >WEB DEVELOPERS</span></h1>
          <span class="main-element themecolor" data-elements="Web Developers,Creative,Ambitious">Web Developers</span>    
          <h4 class="lettersh11">By using strategic approach we design, build & market a creative solution which will give strongest impact.</h4>
          <h4 class="lettersh11">lets work together on so meeting spectacular for your business because</h4>
          <h3 class="lettersh11">We never give up</h3> 
          
          <div class="space1">
          </div>       
          
          <!--<div class="buttons1 text-center">
            <button type="button" class="btn btn-info buttonsspace" data-toggle="modal" data-target="#ModalLoginForm">Contact Us</button>
            <button type="button" class="btn btn-info buttonsspace">Login</button>
            <button type="button" class="btn btn-info buttonsspace">Sign Up</button>  
          </div> -->
    
    </div>
    
    <div class="modal fade" id="ModalLoginForm">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Please Fill Your Information</h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="https://formspree.io/mitsin.ms@gmail.com" target="_blank"
                          method="POST">
                        <label>Enter Your Name</label>
                        <input type="Your Name" name="name"> <br/>
                        <label>Enter Your Email</label>
                        <input type="Email" name="_replyto"> <br/>
                        <label>Description of your query</label>
                        <textarea rows="4" cols="40" name="desc"></textarea> <br/>
                        <input type="submit" value="Send">
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">

                </div>

            </div>
        </div>
    </div>
        
    <div class="topmargin">
    <p>.</p>    
        
    </div>

    
</body>
</html>
