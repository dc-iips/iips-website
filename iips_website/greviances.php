<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.jpg">
    <title>Greviance | International Institute of Professional Studies, Devi Ahilya Vishwavidhalay</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/newfile.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="yamm/yamm.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
  <?php include'header.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-md-3" id="sidebar">
      <ul class="nav nav-stacked" role="tablist">
        <li class="navbar-brand"><b>IQAC</b></li>
        <li role="presentation" id="colm" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Ragging Complaint</a></li>
        <li role="presentation" id="colm"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Sexual Harrasment</a></li>
        <li role="presentation" id="colm"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Student Complaint</a></li>
      </ul>
    </div>

    <div class="col-md-9">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="tab1">
            <h3 class="text-center">Ragging Complaint</h3>
        </div>

        <div role="tabpanel" class="tab-pane" id="tab2">
            <h3 class="text-center">Sexual Harrasment</h3>     
        </div>

        <div role="tabpanel" class="tab-pane" id="tab3">
            <h3 class="text-center">Student Complaint</h3>
        </div>
      </div>
  <br><br>
    </div>
    </div><br>
  </div>
</div>
<?php include'footer.php'; ?>