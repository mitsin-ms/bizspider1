<?php
session_start();
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
        
        <link rel = "stylesheet" href="css/style1.css" type="text/css">
        
    <script>
        
        function funexit1() {
        
        alert ("Bye Bye..");
        window.location="login.php";
    
    }    
    
    window.addEventListener("hashchange", myFunction);
    //window.onbeforeunload("funexit()");
    
    function myFunction(){
        //alert("in myfunction");
        window.scrollTo(window.scrollX,window.scrollY - 80);
        
    }    
        
    </script>
        
    
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
              <a class="nav-link nav1" href="#nav1">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav1" href="#nav2">Our Works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav1" href="#nav3">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav1" href="#nav4">Our Products</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link nav1" href="#nav5">Clients</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link nav1" href="#nav6">Services</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link nav1" href="#contact1">Contact</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link nav1" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav1" href="signup.html">Sign Up</a>
            </li>               
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
    
    </div>
    
    <div class="para3">
    <h3 class="lettersh12" id="nav1">About <span class="lettersh13">Us</span></h3>    
    <div class="para31">
    <p class="lettersh14">We are Spider, Able to build creative, innovation and simple solution.</p>
    </div>    
    </div>  
        
    <div class="para3"></div>    
    <div class="row rcent">
      <div class="col">
      <i class="fa fa-eye"></i>
      <p class="bold">Vision</p>
      <p class="rcent1">To become India's No one software solution provider by 2020.</p>
      
      </div>
      <div class="col">
      <i class="fa fa-rocket"></i>
         
      <p class="bold">Mission</p>
      <p class="rcent1">Delivering Quality and Easy solutions withing Time in Costeffective way.</p>      
      </div>
      <div class="col">
      <i class="fa fa-users"></i>      
      <p class="bold">Core Value</p>
      <p class="rcent1">We believes in Happy Clients, Satisfied Employees, Return to investor through our Growth</p>            
      </div>
      
    </div>
    
    <div class="para4" id="nav2">
    <h3 class="lettersh121">RECENT <span class="lettersh131">WORKS</span></h3>    
    <p class="rcent1">Take a moment to view some of our latest work. While most of the sites below were built by us from the ground up, we experience a wide range of involvement with our client's websites. We do everything from web design, web development, consulting, maintenance, graphics, marketing and everything in between!</p>
    <div class="imglmargin">
            <div class="row imgmargin">
            <div class="col-sm-4">
            <div class="card">
              <img class="card-img-top imghover" src="images/work-1.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title text-center">IIA Maharashtra Chapter</h4>
                <p class="card-text text-center">Website Design</p>
              </div>
            </div>        
            </div>        

            <div class="col-sm-4">
            <div class="card">
              <img class="card-img-top imghover" src="images/work-2.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title text-center">IIA Maharashtra Chapter</h4>
                <p class="card-text text-center">Mobile App</p>
              </div>
            </div>        
            </div>        

            <div class="col-sm-4">
            <div class="card">
              <img class="card-img-top imghover" src="images/work-3.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title text-center">IIA Kolhapur Center</h4>
                <p class="card-text text-center">Website</p>
              </div>
            </div>        
            </div>        


            <div class="row imgmargin">
            <div class="col-sm-4">
            <div class="card">
              <img class="card-img-top" src="images/work-4.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title text-center">ConstrOOnline</h4>
                <p class="card-text text-center">Mobile App</p>
              </div>
            </div>        
            </div>        

            <div class="col-sm-4">
            <div class="card">
              <img class="card-img-top" src="images/work-5.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title text-center">MAHACON'17 Satara</h4>
                <p class="card-text text-center">Mobile App</p>
              </div>
            </div>        
            </div>        

            <div class="col-sm-4">
            <div class="card">
              <img class="card-img-top" src="images/work-3.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title text-center">Sans Architech</h4>
                <p class="card-text text-center">Website</p>
              </div>
            </div>        
            </div>        
    </div>
    
        
</div>
        
    
    
<!--
    <div class="row">
        <div class="col-md-3">
        <img src="images/work-1.jpg" width="150" height="150">
        </div>
        <div class="col-md-3">
        <img src="images/work-2.jpg" width="150" height="150">
        </div>
        <div class="col-md-3" width="150" height="150">
        <img src="images/work-3.jpg">
    </div>
           
    <div class="row">
        <div class="col-md-3" >
        <img src="images/work-4.jpg" width="150" height="150">
        </div>
        <div class="col-md-3">
        <img src="images/work-5.jpg" width="150" height="150">
        </div>
        <div class="col-md-3">
        <img src="images/work-6.jpg" width="150" height="150">
    </div>
    
-->
        
    <div class="para5" id="nav3">
    
    <h3 class="lettersh121">CREATIVE <span class="lettersh131">TEAM</span></h3>   
    <p class="text-center pfont1">We are believing on putting genuine efforts to accomplish dream</p>
        
        <div class="row imgmargin">
            <div class="col-sm-2">
            <div class="card">
              <img class="card-img-top imghover" src="images/team-1.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title text-center">Mahadev Patil</h4>
                <h5 class="card-title text-center font-weight-bold">Founder, CEO</h5>  
                <p class="card-text text-center">Now,It's not about ideas.It's about making ideas happen through action oriented work.</p>
              </div>
            </div>        
            </div>        

            <div class="col-sm-2">
            <div class="card">
              <img class="card-img-top imghover" src="images/team-2.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title text-center">Smit @ Patil</h4>
                <h5 class="card-title text-center font-weight-bold">CO-Founder, COO</h5>  
                <p class="card-text text-center">Believe in yourself and negotiate for yourself.Own your own success.</p>
              </div>
            </div>
            </div>

            <div class="col-sm-2">
            <div class="card">
              <img class="card-img-top imghover" src="images/team-8.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title text-center">Sumit Bagade</h4>
                <h5 class="card-title text-center font-weight-bold">CO-Founder, CFO</h5>  
                <p class="card-text text-center">There is always way</p>
              </div>
            </div>
            </div>
            
            
            <div class="col-sm-2">
            <div class="card">
              <img class="card-img-top imghover" src="images/team-3.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title text-center">Prashant Shinde</h4>
                <h5 class="card-title text-center font-weight-bold">Technical Head</h5>  
                <p class="card-text text-center">I never dreamed about success. I worked for it.</p>
              </div>
            </div>
            </div>
    
            <div class="col-sm-2">
            <div class="card">
              <img class="card-img-top imghover" src="images/team-4.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title text-center">Sangram Patil</h4>
                <h5 class="card-title text-center font-weight-bold">Developer</h5>  
                <p class="card-text text-center">When there is less. I am ready to face.</p>
              </div>
            </div>
            </div>
        
            <div class="col-sm-2">
            <div class="card">
              <img class="card-img-top imghover" src="images/team-5.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title text-center">Datta Bhosale</h4>
                <h5 class="card-title text-center font-weight-bold">Technical Advisor</h5>  
                <p class="card-text text-center">The true sign of intelligence is not knowledge but imagination.</p>
              </div>
            </div>
            </div>
            
    </div>            
    
        <div class="row imgmargin">
            <div class="col-sm-2">
            </div>        
           
            
    
            <div class="col-sm-2">
            <div class="card">
              <img class="card-img-top imghover" src="images/team-6.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title text-center">Eknath Jagadale</h4>
                <h5 class="card-title text-center font-weight-bold">Advisor</h5>  
                <p class="card-text text-center">There is no substitute for hard work.</p>
              </div>
            </div>
            </div>

            
            <div class="col-sm-2">
            <div class="card">
              <img class="card-img-top imghover" src="images/team-7.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title text-center">Dadaso Patil</h4>
                <h5 class="card-title text-center font-weight-bold">Advisor</h5>  
                <p class="card-text text-center">Vision is the art of seeing what invisible to others.</p>
              </div>
            </div>
            </div>
        
            
            <div class="col-sm-2">
            <div class="card">
              <img class="card-img-top imghover" src="images/team-9.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title text-center">Gaurav Lonkar</h4>
                <h5 class="card-title text-center font-weight-bold">Android Developer</h5>  
                <p class="card-text text-center">The people who are crazy enough to think they can change the world are the one who do.</p>
              </div>
            </div>
            </div>
        </div>
        
    <div class="para7">
    <div class="text-center">
    <button type = "Button" class ="btn btn-primary" data-toggle="modal" data-target="#exampleModal">We are Hiring</button>    
    </div>
    </div>
    
        
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              "Yes we are hiring interested, Please mail your resume to Smita@bizspider.in"
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>  
        
    <div class="para6" id="nav4">
        <div class="text-center">
        <h3 class="lettersh121">OUR <span class="lettersh131">PRODUCTS</span></h3>   
        </div>
        <div class="topmargin"></div>
        <div class="row">
            <div class="col">    
            <div class="card">
                  <img class="card-img-top imghover" src="images/product-1.jpg" alt="Card image">
                  <div class="card-body">

                    <h5 class="card-title text-center font-weight-bold">ConstrOOnline</h5>  
                  </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                  <img class="card-img-top imghover" src="images/product-2.jpg" alt="Card image">
                  <div class="card-body">
                    <h5 class="card-title text-center font-weight-bold">King Maker</h5>
                  </div>
                </div>
            </div>

              <div class="col">
              <div class="col">
                <div class="card">
                  <img class="card-img-top imghover" src="images/product-3.jpg" alt="Card image">
                  <div class="card-body">
                    <h5 class="card-title text-center font-weight-bold">ICAN</h5>
                  </div>
                </div>
             </div>
            </div>
        </div>
        
        
        
<div class="para8" id="nav5">
    
<div class="text-center">
    <h3 class="lettersh121 display-4" style="color:white">CLIENT <span class="lettersh131 display-4">TESTIMONIALS</span></h3>   
    </div>    
    
<div class="carouselmit">
<div topmargin></div>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <p class="item-center" style="color:white">" BizSpider " is a good initiative to provide best digital solution.It will definitely make things more simpler." constrOOnline " is definitely unique platform to share the information amongst designers, executives & consultants.I wish them all the best !!!  </p>
     <p><strong style="color:white">Ar. Sunil Patil & Associate</strong></p>
     <p><strong style="color:white">Founder: Sunil Patil & Associate</strong></p>    
    </div>
    <div class="carousel-item">
      <p class="item-center" style="color:white">I feel its a bit advance thinking from team BizSpider. I wish them best luck.
																	also surely BizSpider helps in saving time & produce better result. Results surely have positive effect on business.</p>
     <p><strong style="color:white">Abhijeet Magdum</strong></p>
     <p><strong style="color:white">MD Bhima Builders.</strong></p>    
    </div>
    <div class="carousel-item" >
      <p class="item-center" style="color:white">“BizSpider Tech” helps us to run “Digital IIA Maharashtra Chapter “ program in The Indian Institute Of Architects . It was marvelous experience to work with such a energetic team and unique concept. Now team is coming up with new product “constrOOnline” : Construction Project Management System. In the long run, I think it will make us more profitable and every construction project team member can manage their work happily and efficiently. Best wishes!!!</p>
     <p><strong style="color:white">Ar. Satish Mane</strong></p>
     <p><strong style="color:white">Chairman IIA Maharashtra Chapter.</strong></p>
    </div>
  </div>
        
  <div class="topmargin"></div>
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</div>   
</div>


<div class="para9" id="nav6">
    <div class="text-center">
    <h3 class="lettersh121">WE ARE <span class="lettersh131">GOOD IN</span></h3>
    <div class="topmargin"></div>
    <p> We do everything from web design & development, consulting, maintenance, <br>graphic designing and marketing and everything in between</p>    
    </div>
    
    <div class="margin8">
    <div class="row">
        
        <div class="col">
            <div class="roundedfa text-center align-middle" >
            
                <i  class=" fa fa-code" ></i>
            </div>
            
                <p><strong>Web Development</strong></p>
                <p>Our team is expertise in PHP,JAVA, Laravel, My SQL, HTML,CSS, Backbone js, Backbone marionett, Node js etc. Our professionals begin with assessment of client’s business needs. The key to effective web development is client’s interaction. We are provide simple solution and user friendly design</p>
        
        </div>           
   
        
        <div class="col">
            <div class="roundedfa text-center align-middle" >
                <i  class=" fa fa-android" ></i>
                
            </div>
            <p><strong>Android App Development</strong></p>
                <p>The best guidance and technical support result into the most engaging Android business applications. Android App UX / UI Design ,Native and Hybrid App Development , Android App Programming , App Testing for flawless Performance ,App Redesigning, App support and maintainance.</p>
        </div>           
   
        <div class="col">
            <div class="roundedfa text-center align-middle" >
                <i  class=" fa fa-apple" ></i>
            </div>
                <p><strong>iPhone App Development</strong></p>
                <p>Leveraging power of C, Objective C and Swift native development technologies and APIs, our iPad and iPhone app developers deliver apps with scalable performance, robust architecture and clean code that ensures one-shot approval on App Store.</p>
            
        </div>           
        
        
    </div>    
        
    <div class="row">
        <div class="col">
            <div class="roundedfa text-center align-middle" >
            
                <i  class=" fa fa-rss" ></i>
            </div>
            
                <p><strong>Digital Marketing</strong></p>
                <p>Our team is expertise in Search Engine Optimisation, Social Media Marketing , Email Marketing , Website Analytics and much more.We promote your business to creat value</p>
        
        </div>           
   
        
        <div class="col">
            <div class="roundedfa text-center align-middle" >
                <i  class=" fa fa-css3" ></i>
                
            </div>
            <p><strong>UI/UX Designing</strong></p>
                <p>Our User interface and User experience designers consistently produce intuitive web and mobile apps. We are passionate about designing and making purpose-driven websites and apps with focus on user experience</p>
        </div>           
   
        <div class="col">
            <div class="roundedfa text-center align-middle" >
                <i  class=" fa fa-cogs" ></i>
            </div>
                <p><strong>Product Engineering</strong></p>
                <p>We offer the following Product engineering services Product Ideation, Product Architecture, Testing and QA , maintenance and support. we support you in every phase of product development</p>
            
        </div>           
        
        
        
    </div>    
        
    <div class="row">
        <div class="col">
            <div class="roundedfa text-center align-middle" >
            
                <i  class=" fa fa-bar-chart" ></i>
            </div>
            
                <p><strong>Business Plan Preparation</strong></p>
                <p>We plan your business strategy by discover, research analysis of market, coordination with your management team. Then finalise business plan and prepare deck.</p>
        
        </div>           
   
        
        <div class="col">
            <div class="roundedfa text-center align-middle" >
                <i  class=" fa fa-pencil-square" ></i>
                
            </div>
            <p><strong>Graphic Designing</strong></p>
                <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.</p>
        </div>           
   
        <div class="col">
            <div class="roundedfa text-center align-middle" >
                <i  class=" fa fa-briefcase" ></i>
            </div>
                <p><strong>Startup Consultation</strong></p>
                <p>BizSpider Tech always ready to help all budding startup to share our experience and network</p>
            
        </div>           
        
        
        
    </div>
        
    
<hr>
<hr>        
<div class="topmargin">
</div>
<div class="address">        
<div class="row">
<div class="col-md-4">    
<div class="leftm">
    <h4 class="text-center">BizSpider Tech LLP</h4>
    <p class="text-center">Palladion Square, E-Building</p>
    <p class="text-center">Office No.203, Baner,Pune.</p>
    <p class="text-center">+91-9158714141</p>
    <p class="text-center">+91-9011704141</p>
    <p class="text-center">Email: contact@bizspider.in</p>
</div>
</div>    
<div class="col-md-8">
<div class="leftm1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.049854367456!2d73.7789743144589!3d18.571790987379124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b932f1486987%3A0x6766a1b974953ec4!2sBizSpider+Tecch+LLP!5e0!3m2!1sen!2sin!4v1520448490564" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>    
    
</div>
</div>    
</div>
</div>

    <div class="topmargin"></div>
    <div id="contact1">
        <h3 class="text-center">PLEASE TAKE TIME TO FILL IN YOUR CONTACT DETAILS</h3>
        <h3 class="text-center">WE WILL GET BACK TO YOU SOON</h3>
        <h3><hr></h3>
        <div class="text-center">
            <button type="button" class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#ModalLoginForm">
                Contact Form
            </button>
        </div>
    </div>
    <hr>

    <!-- The Modal -->
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
    <!-- java script -->

    
    
</body>
</html>

        
<!--<script>
    function funcookie() {
        alert("in funcookie");
        <?php
          $username = $_SESSION[username];
        ?>
    }
        
    

    

    window.addEventListener("hashchange", myFunction);
    //window.onbeforeunload("funexit()");
    
    function myFunction(){
        //alert("in myfunction");
        window.scrollTo(window.scrollX,window.scrollY - 80);
    }
    
           
</script>
-->
        