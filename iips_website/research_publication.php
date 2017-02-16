<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.jpg">
    <title>Research Publication and Academic Contribution | International Institute of Professional Studies, Devi Ahilya Vishwavidhalay</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/newfile.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="yamm/yamm.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
<?php include 'header.php'; ?>
<div class="container">
    <div class="row , minlength">
        <div class="col-md-3" id="sidebar">
                <ul class="nav nav-stacked" role="tablist">
                    <li class="navbar-brand"> <b></b> </li>
                    <li role="presentation" id="colm" class="active" ><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Published Papers in Journals</a></li>
                    <li role="presentation" id="colm"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Articles/Chapters published in Books</a></li>
                    <li role="presentation" id="colm"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Full papers in Conference Proceedings</a></li>
                    <li role="presentation" id="colm"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Books published as single author or as editor</a></li> 
                    <li role="presentation" id="colm"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Ongoing Projects/Consultancies</a></li>
                    <li role="presentation" id="colm"><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Completed Projects/Consultancies</a></li> 
                    <li role="presentation" id="colm"><a href="#tab7" aria-controls="tab7" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Research Guidance</a></li>
                    <li role="presentation" id="colm"><a href="#tab8" aria-controls="tab8" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Training Courses, Teaching-Learning-Evalution Technology, Faculty Development Programmes</a></li> 
                    <li role="presentation" id="colm"><a href="#tab9" aria-controls="tab9" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Papers presented in Conferences, Seminars, Workshops, Synopsis</a></li>
                    <li role="presentation" id="colm"><a href="#tab10" aria-controls="tab10" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp; Invalid Lectures and Chairmanship at National or International Conference Seminar</a></li>
                </ul>
        </div>

        <!-- sublinks -->
        <div class="col-md-9">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab1">

                <h3 class="text-center"><b>Published Papers in Journals</b></h3>
                  <?php include("research_publication/ppij.php") ?>
            </div>
            
            <div role="tabpanel" class="tab-pane" id="tab2">
                <h3 class="text-center"><b>Articles/ Chapters published in Books</b> </h3> 
                  <?php include("research_publication/apb.php") ?>    
            </div>

            <div role="tabpanel" class="tab-pane" id="tab3">
                <h3 class="text-center"><b>Full papers in Conference Proceedings</b> </h3> 
                <?php include("research_publication/fcp.php") ?>
            </div>

            <div role="tabpanel" class="tab-pane" id="tab4">
                <h3 class="text-center"><b>Books published as single author or as editor</b></h3>
                  <?php include("research_publication/bpe.php") ?>
            </div>
            
            <div role="tabpanel" class="tab-pane" id="tab5">
                <h3 class="text-center"><b>Ongoing Projects/ Consultancies</b> </h3> 
                  <?php include("research_publication/opc.php") ?>    
            </div>

            <div role="tabpanel" class="tab-pane" id="tab6">
                <h3 class="text-center"><b>Completed Projects/ Consultancies</b> </h3> 
                <?php include("research_publication/cccccpc.php") ?>
            </div>  

            <div role="tabpanel" class="tab-pane" id="tab7">
                <h3 class="text-center"><b>Research Guidance</b></h3>
                  <?php include("research_publication/rg.php") ?>
            </div>
            
            <div role="tabpanel" class="tab-pane" id="tab8">
                <h3 class="text-center"><b>Training Courses, Teaching-Learning-Evaluation Technology, Faculty Development Programmes</b> </h3> 
                  <?php include("research_publication/fdp.php") ?>    
            </div>

            <div role="tabpanel" class="tab-pane" id="tab9">
                <h3 class="text-center"><b>Papers presented in Conferences, Seminars, Workshops, Symposia</b> </h3> 
                <?php include("research_publication/ppc.php") ?>
            </div> 

            <div role="tabpanel" class="tab-pane" id="tab10">
                <h3 class="text-center"><b>Invited Lectures and Chairmanship at National or International Conference/ Seminar</h3> 
                <?php include("research_publication/ilc.php") ?>
            </div>    
        </div><br><br>
        </div><!--Col-md-9 End> --><!-- End sublinks -->
    </div>
</div>
<?php include 'footer.php'; ?>