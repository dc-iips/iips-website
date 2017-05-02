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
    <link rel="shortcut icon" href="images/favicon.jpg">
    <title>Research publication | International Institute of Professional Studies, Devi Ahilya Vishwavidhalay</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/newfile.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="yamm/yamm.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>


<!-- Include Required Prerequisites -->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
 
    <!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

    <script language="javascript">    
            function getData(fileName, contentPan){
                $("#"+contentPan).html("loading data......");

                $.ajax({
                  url: fileName,
                  type: "post",
                    success: function(msg){
                      $("#"+contentPan).html(msg).show(500);    
                    }
                }); //End of .ajax
              }
    </script>
  </head>
  <body>
<?php include 'header.php'; 

?>
<div class="container">
  <div class="row , minlength">
    <div class="col-md-3" id="sidebar">
      <ul class="nav nav-stacked" role="tablist">
        <li class="navbar-brand"> <b></b> </li>
        <li role="presentation" id="colm" onClick="getData('research_publication/ppij/ppij.php', 'tab1')"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Published Papers in Journals</a></li>
        <li role="presentation" id="colm" onClick="getData('research_publication/apb/apb.php', 'tab1')"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Articles / Chapters published in Books</a></li>
        <li role="presentation" id="colm" onClick="getData('research_publication/fcp/fcp.php', 'tab1')"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Full Papers in Conference Proceedings</a></li>
        <li role="presentation" id="colm" onClick="getData('research_publication/bpe/bpe.php', 'tab1')"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Books Published as Single Author or as a Editor</a></li>
        <li role="presentation" id="colm" onClick="getData('research_publication/opc/opc.php', 'tab1')"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Ongoing Projects / Consultancies</a></li>
        <li role="presentation" id="colm" onClick="getData('research_publication/cpc/cpc.php', 'tab1')"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Completed Projects / Consultancies</a></li>
        <li role="presentation" id="colm" onClick="getData('research_publication/researchguidance/researchguidance.php', 'tab1')"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Research Guidance</a></li>
        <li role="presentation" id="colm" onClick="getData('research_publication/trainingcoursefdp/trainingcoursefdp.php', 'tab1')"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Training Courses , Teaching-Learning-Evaluation Technology, Faculty Development Programmes</a></li>
        <li role="presentation" id="colm" onClick="getData('research_publication/paperpresented/paperpresented.php', 'tab1')"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Papers Presented in Conferences, Seminars, Workshops, Symposia</a></li>
        <li role="presentation" id="colm" onClick="getData('research_publication/invitedlecture/invitedlecture.php', 'tab1')"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Invited Lectures and Chairmanship at National or International Conference/ Seminar</a></li>
      </ul>
    </div>
    <div class="col-md-9">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab1">

            </div>
         </div>
        <br><br>
    </div><!--End Col-md-9> -->
  </div>
</div>
<br>
<?php include 'footer.php';

} //else
 ?>