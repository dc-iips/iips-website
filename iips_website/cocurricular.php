<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.jpg">
    <title>Co-curricular Extension, Professional Development | International Institute of Professional Studies, Devi Ahilya Vishwavidhalay</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/newfile.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="yamm/yamm.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquary.js"></script>
  </head>
  <body>
<?php include 'header.php'; ?>
<div class="container">
  <div class="row , minlength">
    <div class="col-md-3" id="sidebar">
      <ul class="nav nav-stacked" role="tablist">
        <li class="navbar-brand"> <b></b> </li>
        <li role="presentation" id="colm" onClick="getData('cocurricular_activities/corporate.php', 'tab1')"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Co-Curricular, Extension,Professional Development Related Activity</a></li>
        <li role="presentation" id="colm"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Contribution to Corporate Life and Management of the Institution</a></li>
        <li role="presentation" id="colm"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Professional Development Activities</a></li>
      </ul>
    </div>
    <div class="col-md-9">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab1">
            </div>
            
            <div role="tabpanel" class="tab-pane" id="tab2">
                <h3 class="text-center"><b>Contribution to Corporate Life and Management of the Institution</b> </h3> 
                iiii
                  <?php include("cocurricular_activities/corporate.php") ?>    
            </div>

            <div role="tabpanel" class="tab-pane" id="tab3">
                <h3 class="text-center"><b>Professional Development Activities</b> </h3> 
                <?php include("cocurricular_activities/professional.php") ?>
            </div>  
        </div>
        <br><br>
    </div><!--Col-md-9 End> -->
  </div>
</div>
<script language="javascript">    
            function getData(fileName, contentPan){
                $("#"+contentPan).html("loading data......");
                $.ajax({
                  url: fileName,
                  type: "post",
                    success: function(msg){
                    // alert("Student Added Successfully.");
                      $("#"+contentPan).html(msg);    
                    }
                }); //End of .ajax
              });
</script>
<?php include 'footer.php'; ?>