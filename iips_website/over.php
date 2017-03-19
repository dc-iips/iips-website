<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
       echo "<script>window.open('index.php','_self')</script>";     
    }
    else
    {
      $username= $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.jpg">
    <title>About | International Institute of Professional Studies, Devi Ahilya Vishwavidhalay</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/newfile.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="yamm/yamm.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body>

<?php include 'header.php';?>
    <div>
        <img src="images/academics/academics.jpg" class="img-responsive" style="width:100%;height:320px;"/>
    </div>

    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-justify" style="line-height:1.2;">The International Institute of Professional Studies, a department of Devi Ahilya Vishwavidyalaya established in the year 1992 is an academic mentor of its kind and an eminently practical institute, recognized by AICTE. With the quality in the content, scope and professionalism of its programs. </h3>
          </div>
        </div>
        
        <br>

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/about/infra.jpg" class="img-responsive">
                </div>
                <div class="col-md-8 overview-text">
                    <h3><a href="Profiles.php">Profile</a></h3>
                    <p>IIPS is famous in DAVV for its various cocurricular activities. The IIPS has Globe, CV and 24*7 wifi campus.</p>
                </div>
            </div>
            <br/>

            <div class="row">
                <div class="col-md-4">
                    <img src="images/about/history.jpg" class="img-responsive">
                </div>
                <div class="col-md-8 overview-text">
                    <h3><a href="cocurricular.php">Cocurricular extension,professional development</a></h3>
                    <p>A great institute involves contribution of many persons, and the history of IIPS is amazing.</p>
                </div>
            </div>
            <br/>

            <!-- <div class="row">
                <div class="col-md-4">
                  <img src="images/about/map.jpg" class="img-responsive">
                </div>
                <div class="col-md-8 overview-text">
                  <h3><a href="reach_us.php">Research Publication and Academic Contribution7-</a></h3>
                  <p>Click on a location on the map to view its details. Or, choose a building, road or point of interest by name from the menus below.</p>
                </div>
            </div> -->
        </div> 

        <div class="col-md-6"> 
            <div class="row">    
                <div class="col-md-4">
                    <img src="images/about/university.jpg" class="img-responsive">
                </div>
                <div class="col-md-8 overview-text">
                    <h3><a href="about_university.php">PDF report</a></h3>
                    <p>Established in 1964, DAVV is among the prominent Universities of the central India located in Indore.</p>
                </div>
            </div>  
            <br/>
            <br>
 
            <div class="row">
                <div class="col-md-4">
                  <img src="images/about/image1.jpg" class="img-responsive">
                </div>
                <div class="col-md-8 overview-text">
                  <h3><a href="research_pub.php">Reasearch Publication and Academic Contribution</a></h3>
                  <p>The IIPS established in the year 1992 is an academic mentor of its kind and an eminently practical graduate and postgraduate institute, recognized by AICTE.</p>,
                </div>
            </div>
            <br/>
        </div>
    </div>
    <br/>
<?php include 'footer.php';

} //else session
?>