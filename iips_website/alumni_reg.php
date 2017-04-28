<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.jpg">
    <title>Alumni | International Institute of Professional Studies, Devi Ahilya Vishwavidhalay</title>
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
<div class="container">
  <div class="row">
    <div class="col-md-3" id="sidebar">
      <ul class="nav nav-stacked" role="tablist">
        <li class="navbar-brand"> <b>Reach Us</b> </li>
        <li role="presentation" id="colm" class="active" ><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp; Alumni Registration</a></li>
        <li role="presentation" id="colm" class="active" ><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp; IIPS Map</a></li>
      </ul>
    </div>
    <div class="col-md-9">
        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="tab1">
                <h3 class="text-center"><b>Alumni Registration</b> </h3>  
                    <address>
                        <i class="fa fa-university"></i>&nbsp;&nbsp;Devi Ahilya University, Takshashila Campus Khandwa Road , Indore - 452001, INDIA<hr>
                         <br>
                    </address>
                  <div class="row">
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-8">
                      <form method="POST" id="alumni_save">
                          <div class="form-group has-feedback">
                              <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                              <span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
                          </div>
                          <div class="form-group has-feedback">
                              <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                              <span class="glyphicon glyphicon-envelope form-control-feedback" aria-hidden="true"></span>
                          </div>
                          <div class="form-group has-feedback">
                              <input type="text" class="form-control" maxlength="13" size="13" id="phone" placeholder="Phone" name="phone">
                              <span class="glyphicon glyphicon-phone form-control-feedback" aria-hidden="true"></span>
                          </div>
                          <div class="form-group has-feedback">
                              <input type="text" class="form-control" id="current" placeholder="Current Designation" name="current">
                              <span class="glyphicon glyphicon-phone form-control-feedback" aria-hidden="true"></span>
                          </div>
                          <div class="form-group has-feedback">
                              <input type="text" class="form-control" id="company" placeholder="Company Name" name="company">
                              <span class="glyphicon glyphicon-phone form-control-feedback" aria-hidden="true"></span>
                          </div>
                          
                          <div class="text-center">
                              <button type="Submit" class="btn btn-primary btn-lg text-center">Submit Now</button>
                          </div>
                      </form>
                  </div>
                  <div class="col-md-2">
                  </div>
                  </div>   
            </div>

            <div role="tabpanel" class="tab-pane" id="tab2">
                <h3 class="text-center"><b>Map</b></h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1684.529012788025!2d75.87563940172096!3d22.688639624682146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcc29e3c82ef%3A0x39f47fbb92c83277!2sInternational+Institute+of+Professional+Studies!5e0!3m2!1sen!2sin!4v1459927961611" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            
        </div>
    </div>
    <br><br>
  </div>
  <br>
</div>

<?php include 'footer.php'; ?>
<script type="text/javascript">
  
  $("#alumni_save").submit(function(event){
              /* stop form from submitting normally */
               event.preventDefault();
               var values = $(this).serialize();
               $.ajax({
                    url: "insert_alumni_info.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                      
                    alert("Data Added Successfully.");

                    $("#name").val("");
                    $("#email").val("");
                    $("#phone").val("");
                    $("#current").val("");
                    $("#company").val("");
                    
                    }//end of succes function
                }); //End of .ajax
            });

</script>