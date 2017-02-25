<?php
  session_start();
  ob_start();
  include('DBConnect.php');
  include('form_process/genInfoProcess.php');
  
  #Query for grabbing user's general informations in the varables.
  
  $sql="SELECT * FROM gen_info WHERE User_Id = '".$_SESSION['username']."'";
    $result = mysqli_query($conn,$sql) or die('Error'.mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    $uname = $row['Gen_Info_Name'];
    $fatherName = $row['Gen_Info_Fname'];
    $motherName = $row['Gen_Info_Mname'];
    $department = $row['Gen_Info_Department'];
    $designation = $row['Gen_Info_CD'];
    $gradePay = $row['Gen_Info_GP'];
    $promotionDate = $row['Gen_Info_DLP'];
    $correspAddress = $row['Gen_Info_AFC'];
    $permnantAddress = $row['Gen_Info_PA'];
    $telephone = $row['Gen_Info_TNO'];
    $email = $row['Gen_Info_Email'];
    $u_imgurl=$row['u_imgurl'];
    $u_ondate=$row['u_ondate'];
?>
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
    <?php 
    if(isset($_SESSION['username'])){
    include('header.php');
  ?>
    <div class="container" style="background-color:#FFFFFF;">
    
     <div class="col-md-3" id="sidebar"><br>
      <img src="images/faculty_pic/profilepic.png" style="width:100%;padding-top:10px;">
      
    
  <!-- php code for profile picture upload from pc and save in the database plus set in the profile -->
<div class="large-5 columns extra-padding">
  <div class="winbox-white ">
      <!-- <h3 class="text-right">Profile Picture</h3> -->
   <!--  <div class="row">
      <div class="large-3 columns">
      <img src="img/<?php //echo $info->u_imgurl; ?>" />
      </div> 
     -->
      <div class="large-9 columns">
           <!-- upload image part -->

        <form action="" method="post" enctype="multipart/form-data">
          <div class="large-12 columns">
               <span style="color:red;">Maximun Image Size 100KB</span><br/><br/>
               <input type="hidden" name="p"  value="1">
               <input type="file" name="image" />
          </div> 
      
          <div class="large-12 columns">
               <button type="submit" name="upload" class="tiny button radius success">Upload</button>
          </div> 
        </form> 
      </div>
    </div>
  </div>
</div>

    </div>
    
    <div class="col-md-9">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="tab1">
            <h3 class="text-center"><b> Personnal Information </b></h3>
            <p class="text-justify"> 
        </div>
        
             
      <?php
      if(isset($_SESSION['infoUpdated'])){
        echo $_SESSION['infoUpdated'];
      }

    ?>
  <br/>
    <div class="row"> 
      
      <div class="col-sm-12">
        <form id="genInfo" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="panel panel-primary" style="padding:3px 3px 3px 3px; "> 
          <div id="userInfo">
              <h4 align="center" class="text-primary"><b>Welcome <?php  echo $_SESSION['username']."";?></b></h4>
            <table border="0" class="table" cellpadding="3" cellspacing="3">
              <tr>
                <td>Name</td>
                <td><?php echo $uname;?></td>
              </tr>
              <tr>
                <td>Father's Name</td>
                <td><?php echo $fatherName;?></td>
              </tr>
              <tr>
                <td>Mother's Name</td>
                <td><?php echo $motherName;?></td>
              </tr>
              <tr>
                <td>Department</td>
                <td><?php echo $department;?></td>
              </tr>
              <tr>
                <td>Current Designation</td>
                <td><?php echo $designation;?></td>
              </tr>
              <tr>
                <td>Date Of Last Promotion</td>
                <td><?php echo $promotionDate;?></td>
              </tr>
              <tr>
                <td>Address For Correspondence</td>
                <td><?php echo $correspAddress;?></td>
              </tr>
              <tr>
                <td>Permanent Address</td>
                <td><?php echo $permnantAddress;?></td>
              </tr>
              <tr>
                <td>Telephone No.</td>
                <td><?php echo $telephone;?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><?php echo $email;?></td>
              </tr>
            </table>
<button type="button" class="btn btn-md btn-primary" name="infoEdit" onClick="showInfo(this.name)" value="show"/>Edit Profile</button>

           </div>
        </div>
      </div>
    </div>


  <script>
    $(document).ready(function() {
      $('#genInfo').validate();
    }); // end ready()
  </script>
  <!-- Knockout Script for  -->
  <script>
    var viewModel = {
      year: ko.observable(),
      reportEnabled : ko.observable(false),
      yearEnabled : ko.observable(true),
      isClicked : function(){
        self = this;
        self.yearEnabled(false);
        self.reportEnabled(true);
      },
      changeYear : function(){
        self = this;
        self.yearEnabled(true);
        self.reportEnabled(false);
      }
      
    }
    ko.applyBindings(viewModel);
  </script>
  <script><!--Ajax script for showing information on the basis of combobox value -->
    function showInfo(name)
    {
      if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.onreadystatechange=function()
        {
         if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {  
              document.getElementById("userInfo").innerHTML=xmlhttp.responseText; 
          }
        }
      xmlhttp.open("GET","form_process/genInfoShow.php?name="+name,true);
      xmlhttp.send();
    }
  </script>
    <?php
    }
    else{
    header('location: index.php');
    }
    ?>
