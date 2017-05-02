<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.jpg">
    <title>History | International Institute of Professional Studies, Devi Ahilya Vishwavidhalay</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/newfile.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="yamm/yamm.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
<?php session_start();
    if(!isset($_SESSION['username']))
    {
       include 'header_without_faculty' ; 
    }
    else
    {
      
    include 'header_with_faculty.php';
    ?>
<div class="container">
  <div class="row , minlength">
    <div class="col-md-3" id="sidebar">
      <ul class="nav nav-stacked" role="tablist">
        <li class="navbar-brand"> <b>History</b> </li>
        <li role="presentation" id="colm" class="active" ><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Overview</a></li>
        <li role="presentation" id="colm"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Previous Directors</a></li>
      </ul>
    </div>
    <div class="col-md-9">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab1">
                <h3 class="text-center"><b>IIPS History</b></h3>
                <p class="text-justify">  
                    The International Institute of Professional Studies, a department of Devi Ahilya Vishwavidyalaya established 
                    in the year 1992 is an academic mentor of its kind and an eminently practical graduate and postgraduate 
                    institute, recognized by AICTE. With the quality in the content, scope and professionalism of its cross-
                    disciplinary programs, IIPS has emerged as one of the best centers of technical education in central India in 
                    just ten years. It has been placed in the 'A' category and ranked 24th overall in the Business Standard Survey 
                    of best B Schools of India. 
                </p>
                <p class="text-justify">
                    The institute provides ample opportunities to students with a rigorous, intellectually challenging curriculum 
                    with flexibility to allow students to tailor their education to meet their professional and personal interests
                    and goals. It provides a collaborative learning environment that weaves technology and management into everyday 
                    life. This martinet institute offers integrated post-graduate courses in the fields of computer and management 
                    which students join directly after schooling. Addition to that institute serves specialized courses in 
                    advertisement,tourism and public relations management as well. Students of this institute are placed in the best 
                    companies of the world.
                </p>
            </div>
            
            <div role="tabpanel" class="tab-pane" id="tab2">
                <h3 class="text-center"><b> Previous Directors</b> </h3> 
                <table class="table table-responsive">
                    <tr> 
                      <th>Directors</th> 
                      <th>Working Period</th>  
                    </tr>
                    <tr> 
                      <td>Dr. M.S Sodha</td> 
                      <td>29/11/1991 to 05/08/1992</td>  
                    </tr>
                    <tr> 
                      <td>Mr. R.D Agrawal </td> 
                      <td>06/08/1992 to 14/05/1993</td>  
                    </tr>
                    <tr> 
                      <td> Dr. P.N Mishra</td> 
                      <td>15/05/1993 to 08/11/1993</td>
                    </tr>
                    <tr> 
                      <td>Dr. A.K Ramani</td> 
                      <td>09/11/1993 to 29/05/1995</td>  
                    </tr>
                    <tr> 
                      <td>Dr. P.N Mishra</td> 
                      <td>30/05/1995 to 23/07/1996</td>
                    </tr>
                    <tr> 
                      <td>Dr. I.C Gupta</td> 
                      <td>24/07/1996 to 07/09/1999</td>  
                    </tr>
                    <tr> 
                      <td>Dr. S Bharti </td> 
                      <td>08/09/1999 to 03/03/2004</td>  
                    </tr>
                    <tr> 
                      <td>Dr. Anil Kumar </td> 
                      <td>04/03/2004 to 25/11/2004</td>  
                    </tr>
                    <tr> 
                      <td>Dr. I.C. Gupta </td> 
                      <td>25/11/2004 to 26/02/2005</td>  
                    </tr>
                    <tr> 
                      <td>Dr. P. N. Mishra</td> 
                      <td>26/02/2005 to 16/10/2006</td>  
                    </tr>
                    <tr> 
                      <td>Dr. A. K. Dutta</td> 
                      <td>16/10/2006 to 09/06/2008</td>  
                    </tr>
                    <tr> 
                      <td>Dr. B.K. Tripathi</td> 
                      <td>09/06/2008 to 10/05/2012</td>  
                    </tr>
                    <tr> 
                      <td>Dr. R.K. Vyas</td> 
                      <td>10/05/2012 to 23/02/2013</td>  
                    </tr>
                    <tr> 
                      <td>Dr. Anand K. Sapre</td> 
                      <td>23/02/2013 to 14/10/2015</td>  
                    </tr>
                </table>    
            </div>
        </div>
        <br><br>
    </div><!--Col-md-9 End> -->
  </div>
</div>
<?php include 'footer.php'; ?>
<?php 
}
 ?>