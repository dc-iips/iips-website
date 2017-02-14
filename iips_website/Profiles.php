<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.jpg">
    <title>Faculty Profile| International Institute of Professional Studies, Devi Ahilya Vishwavidhalay</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/newfile.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="yamm/yamm.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

  </head>
  <body>
<?php include("header.php"); ?>
  <div class="container">
  <div class="row , minlength">
    <div class="col-md-3" id="sidebar">
      <ul class="nav nav-stacked" role="tablist">
        <li class="navbar-brand"> <b>Quick Links</b> </li>
        <li role="presentation" id="colm" class="active" ><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Academic Activity</a></li>
        <li role="presentation" id="colm"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Co-curricular, Extension ,Professional Development & related Activity</a></li>
        <li role="presentation" id="colm"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Research ,Publication & Academic </a></li>
        
      </ul>
    </div>

    
    <div class="col-md-9">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="tab1">
            <h3 class="text-center"><b> Personnal Information </b></h3>
            <p class="text-justify"> 
        </div>
        <div class="col-sm-12">
            <div class="well">
         <br>
            <div id="userTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="overview"><br>
                <form action="" method="post" enctype="multipart/form-data">
                 <div class="col-md-4 text-center">
                      <img src="profilepic.png" class="img-rounded" alt="Faculty images" style="width:150px;height:150px;">
                      <h6><b>Faculty</b></h6>
                 </div>

                </form>
                <div class="col-md-8">
                <br><br> 
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                        <h4 class="page-header"><strong>Personal Details:<strong></h4>
                    <div class="col-md-12">
                    <form role="form" name="myForm" action="" method="POST"> 
                    <!-- <div class="form-group"> -->
                    <br><label>Name<i style="color:red">*</i> </label>
                    <!-- </div> -->
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                           <input type="text" name="fname"  maxlength="15" required="required" class="form-control" placeholder="Father Name" onkeypress="return onlyChars(event)" onfocus="color(this)" onblur="color1(this)"> 
                        </div> 
                      </div>
                      <br><label>Father Name<i style="color:red">*</i> </label>
                    </div>
                    <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                             <input type="text" name="fname"  maxlength="15" required="required" class="form-control" placeholder="Father Name" onkeypress="return onlyChars(event)" onfocus="color(this)" onblur="color1(this)"> 
                          </div>
                        </div>
                        <br><label>Mother Name<i style="color:red">*</i> </label>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                              <input type="text" name="mname"  maxlength="20" required="required" class="form-control" placeholder="Mother Name" onkeypress="return onlyChars(event)" onfocus="color(this)" onblur="color1(this)"> 
                            </div>
                        </div>
                        <br> <label>Date of Birth</label>
                    </div>
                  <div class="row">
                      <div class="col-md-6">
                       <input type="date" name="dob" class="form-control">
                      </div>
                  </div>
                    <br><label>Adhar Card Number<i style="color:red">*</i> </label>
                  <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                              <input type="text" name="adhar"  maxlength="20" required="required" class="form-control" placeholder="AdharCard Number" onkeypress="return onlyChars(event)" onfocus="color(this)" onblur="color1(this)"> 
                          </div> 
                        </div>
                        <br><label>PAN <i style="color:red">*</i> </label>
                  </div>
                  <div class="form-group">
                      <div class="row">
                       <div class="col-md-6">
                         <input type="text" name="PAN "  maxlength="20" required="required" class="form-control" placeholder="PAN Card Number" onkeypress="return onlyChars(event)" onfocus="color(this)" onblur="color1(this)"> 
                       </div> 
                      </div>
                  </div> 
                  <h4 class="page-header"><strong>Professional Information:</strong></h4> 
                  <br><label>Highest Qualification<i style="color:red">*</i> </label>
                    <div class="form-group">
                      <div class="row">
                       <div class="col-md-8">
                         <input type="text" name="Qualification"  maxlength="20" required="required" class="form-control" placeholder="Highest Qualification" onkeypress="return onlyChars(event)" onfocus="color(this)" onblur="color1(this)"> 
                       </div> 
                      </div>
                     </div>
                  <h4 class="page-header"><strong>Contact Information:</strong></h4> 
                  <br><label>Permenant Address<i style="color:red">*</i> </label>
                     <div class="form-group">                        
                        <div class="row">
                          <div class="col-md-8">
                             <input type="text" name="Padd"  maxlength="20" required="required" class="form-control" placeholder="Address" onkeypress="return onlyChars(event)" onfocus="color(this)" onblur="color1(this)"> 
                          </div>
                        </div>
                     </div>                  
                  <br><label>Contact Number<i style="color:red">*</i> </label>
                     <div class="form-group">
                       <div class="row">
                         <div class="col-md-8">
                         <input type="text" name="Contact"  maxlength="20" required="required" class="form-control" placeholder="Contact Nunber" onkeypress="return onlyChars(event)" onfocus="color(this)" onblur="color1(this)"> 
                         </div> 
                       </div> 
                     </div>    
                  <br><label>Email<i style="color:red">*</i> </label>
                     <div class="form-group">
                        <div class="row">
                          <div class="col-md-8">
                          <input type="text" name="email"  maxlength="20" required="required" class="form-control" placeholder="Email" onkeypress="return onlyChars(event)" onfocus="color(this)" onblur="color1(this)"> 
                          </div>
                        </div>          
                </div>
                </div> 
                </div>
            </div>                  
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php include("footer.php");?>
