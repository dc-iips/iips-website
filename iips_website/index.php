<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>Home | International Institute of Professional Studies, Devi Ahilya Vishwavidhalay</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/newfile.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="yamm/yamm.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  </head>
<body>
    <?php
     session_start();
    if (isset($_SESSION['username'])) {
     include('header_with_faculty.php');
    }
    else{
        include('header_without_faculty.php');
    }
?>
    <br>
    <!--Slider Start -->
    <div class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  	<!-- Indicators -->
  	<ol class="carousel-indicators">
    	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  	</ol>

  	<!-- Wrapper for slides -->
  	<div class="carousel-inner" role="listbox" >
    	<div class="item active">
      		<img src="images/slider/slider1.jpg" alt="Image" class="slider_size">
      		<div class="carousel-caption">
      		</div>
    	</div>   

    	<div class="item">
      		<img src="images/slider/slider2.jpg" alt="Image" class="slider_size">
      		<div class="carousel-caption">
      		</div>
    	</div>

      <div class="item">
          <img src="images/slider/slider3.jpg" alt="Image" class="slider_size">
          <div class="carousel-caption">
          </div>
      </div>

      <div class="item">
          <img src="images/slider/slider4.jpg" alt="Image" class="slider_size">
          <div class="carousel-caption">
          </div>
      </div>   


      <div class="item">
          <img src="images/slider/slider5.jpg" alt="Image" class="slider_size">
          <div class="carousel-caption">
          </div>
      </div>      
    </div>

  	<!-- Controls -->
  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
  	</a>
  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
  	</a>
	   </div>
	  </div>
	  <!--Slider End-->

    <div class="container-fluid">
      <div class="container">
  		  <div class="row">
  		  		<div class="col-md-5 col-sm-6">
	     		      <h4 class="heading-color"><br>At IIPS</h4>
	      			      <div id="image-effect">
	          			      <img src="images/atiips.jpg" class="img-responsive" alt="At IIPS" id="img">
	     			        </div>    
    		  	</div>
    		  	
  		  		<div class="col-md-3 col-sm-6">
            		<h4 class="heading-color"><br>Vision and Mission</h4>
            		<div class="container-fluid">
              			<div class="text-justify"> 
                      Become a globally recognized institute in management, computer science and commerce through creating an environment of excellence<hr>
                			To craft best computer science and IT professionals who can Design, Develop and Manage computer applications<hr>
                			To develop human intellectual capability to its fullest potential.
              			</div>
            		</div>
          	</div>
    
	    	  	<div class="col-md-4"><br>
      				<h4 class="heading-color">News and Announcements</h4>
            		<div class="row">
      			    	<div class="col-md-3 col-xs-3">
        			     	<li id="list">JAN<br><span id="i10">21</span></li>
        		    	</div>
                		<div class="col-md-9 col-xs-9">
        			     	<li id="i11"><span id="span">Classes commence, fees submission and registration, dhrohar fest</span></li>
      			     	</div>
            		</div>
            		<br>
            		
            		<div class="row">
                		<div class="col-md-3 col-xs-3">
                    		<li id="list">FEB<br><span id="i10">22</span></li>
                		</div>
                		<div class="col-md-9 col-xs-9">
                    		<li id="i11"><span>Soft skill workshop for M.B.A&nbsp;(APR) students </span></li>
                		</div>
            		</div>
            		<br>

            		<div class="row">
                		<div class="col-md-3 col-xs-3">
                    		<li id="list">MAR<br><span id="i10">03</span></li>
                		</div>
                		<div class="col-md-9 col-xs-9">
                    		<li id="i11"><span>Woman's day, world's consumer day, design phase of project for M.C.A/M.Tech</span></li>
                		</div>
            		</div>
            		<br>

            		<div class="row">
                		<div class="col-md-3 col-xs-3">
                    		<li id="list">MAY<br><span id="i10">24</span></li>
                		</div>
                		<div class="col-md-9 col-xs-9">
                    		<li id="i11"><span>Internal test-3 and final semester exams</span></li>
                		</div>
            		</div>
        
            		<br>
            		<div class="text-center"><a href="news_and_announcements.php">MORE NEWS</a></div><br>
    		  	</div>
    		  	
  		  </div><!--row-->
      </div><!--Container-->
    </div><!--Cotainer Fluid-->

    <!--Event Section-->
    <div class="container-fluid event">
      <div class="container">
        <div class="row">
          <span><h1>Events</h1></span>
          <span class="visible-lg visible-sm"><a class="special-btn" href="event.php">SEE MORE EVENTS</a></span>
          <br>
        </div>

        <div class="row">
          <div class="col-sm-4 col-md-3 col-lg-3 inner-event">
              <img src="images/events/xpression.jpg" class="img-responsive"/>
              <h3>Xpression</h3>
              <hr/>
              <p>It is the second biggest cultural event of Indore. It include more than 70 events and sponsored by many famous brands.</p>
          </div>
      
          <div class="col-sm-4 col-md-3 col-lg-3 inner-event">
                <img src="images/events/synergypic.jpg" class="img-responsive"/>
                <h3>Synergy</h3>
                <hr/>
                <p>Intra College sports event of Institute. It includes all major sports like Crickets, Football, Chess, Volleyball etc.</p>
          </div>
          <div class="col-sm-4 col-md-3 col-lg-3 inner-event">
              <img src="images/events/touristapic.jpg" class="img-responsive"/>
              <h3>Tourista</h3>
              <hr/>
              <p>Cultural event initiated by MBA-Tourism for world tourism day. It includes various events like dance, treasure hunt, best of waste etc.</p>
          </div>
          <div class="col-sm-4 col-md-3 col-lg-3 inner-event">
              <img src="images/events/touristapic.jpg" class="img-responsive"/>
              <h3>Technophilia</h3>
              <hr/>
              <p>Cultural event initiated by MBA-Tourism for world tourism day. It includes various events like dance, treasure hunt, best of waste etc.</p>
          </div>
        </div><!--row-->
      </div><!--Container-->
    </div><!--Event Section End-->
<?php include 'footer.php'; ?>