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
<?php include 'header.php'; ?>

<div class="container">
  <div class="row , minlength">
    <div class="col-md-3" id="sidebar">
      <ul class="nav nav-stacked" role="tablist">
        <li class="navbar-brand"> <b></b> </li>
        <li role="presentation" id="colm" onClick="getData('cocurricular_activities/cocrurri.php', 'tab1')"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Co-Curricular, Extension,Professional Development Related Activity</a></li>
        <li role="presentation" id="colm" onClick="getData('cocurricular_activities/corporate.php', 'tab1')"><a href="#tab1" aria-controls="tab2" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Contribution to Corporate Life and Management of the Institution</a></li>
        <li role="presentation" id="colm" onClick="getData('cocurricular_activities/professional.php', 'tab1')"><a href="#tab1" aria-controls="tab3" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Professional Development Activities</a></li>
      </ul>
    </div>
    <div class="col-md-9">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane" id="tab1"></div>
        </div><br><br>
    </div><!--Col-md-9 End> -->
  </div>
</div>

<?php include 'footer.php'; ?>