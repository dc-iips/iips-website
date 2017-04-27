<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
       echo "<script>window.open('index.php','_self')</script>";     
    }
    else
    {
  $username = $_SESSION['username'];
  
  include('header.php');
  include('DBConnect.php');
  include('form_process/genInfoProcess.php');
  
  #Query for grabbing user's general informations in the varables.
  $sql="SELECT * FROM gen_info WHERE User_Id = '".$_SESSION['username']."'";

    $result = mysqli_query($conn,$sql) or die('Error'.mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    $uname = $row['Gen_Info_Name'];
    $fatherName = $row['Gen_Info_Fname'];
    $motherName = $row['Gen_Info_Mname'];
    $dob = $row['Gen_Info_DOB'];
    $adharcard = $row['Gen_Info_Adhar'];
    $pancard = $row['Gen_Info_PAN'];
    $qualification= $row['Gen_Info_Qualification'];
    $department = $row['Gen_Info_Department'];
    $address = $row['Gen_Info_Address'];
    $mobile = $row['Gen_Info_Mobile'];
    $email = $row['Gen_Info_Email'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.jpg">
    <title>Faculty Profile| International Institute of Professional Studies, Devi Ahilya Vishwavidhalaya</title>
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

  // $msg="";
  if(isset($_POST['upload']))
  {
      $filename=$_FILES["image"]["name"];
      $filetmp=$_FILES["image"]["tmp_name"];
                
      $db =mysqli_connect("localhost","root","","pbas_db");
     // echo "connected";
      $sql="INSERT INTO image (User_Id, image) VALUES ('$username','$filename')";
      mysqli_query($db,$sql);

      move_uploaded_file($filetmp,"images/faculty_pic/$filename");    
}

 ?>
<div class="container">
  <div class="row , minlength">
    <div class="col-md-3" id="sidebar"><br><br> 
      <!-- <ul class="nav nav-stacked" role="tablist">-->
      <?php  
                $db =mysqli_connect("localhost","root","","pbas_db");

                $query = "SELECT * FROM image WHERE User_Id='$username'";  
                $result = mysqli_query($db, $query);  
                $row = mysqli_fetch_array($result);

                echo '<div><img alt="" height="250px" width="250px" src="images/faculty_pic/'.$row["image"].'"></div>'    
                
      ?>  

       <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="upload" id="upload" value="Upload" class="btn btn-primary" />  
                </form>
      </body>  
 </html>
 <script>  
 $(document).ready(function(){  
      $('#upload').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
</script>  
    </div>
        <div class="col-md-9">
          <div class="tab-content"><br><br>
            <!-- start -->
            <div class="row"> 
              <div class="col-sm-10">
                <form id="genInfo" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="panel panel-primary" style="padding:3px 3px 3px 3px; "> 
                  <div id="userInfo">
                    <h4 align="left" class="text-primary"><b  style="color:#2e6da4">Welcome <?php  echo $_SESSION['username']."";?> to your profile.</b></h4>
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
                        <td>Date Of Birth</td>
                        <td><?php echo $dob;?></td>
                      </tr>

                      <tr>
                        <td>AdharCard Number</td>
                        <td><?php echo $adharcard;?></td>
                      </tr>
                      <tr>
                        <td>PAN Card</td>
                        <td><?php echo $pancard;?></td>
                      </tr>
                      <tr>
                        <td>Department</td>
                        <td><?php echo $department;?></td>
                      </tr>
                      <tr>
                        <td>Highest Qualification</td>
                        <td><?php echo $qualification;?></td>
                      </tr>
                      
                      <tr>
                        <td>Address</td>
                        <td><?php echo $address;?></td>
                      </tr>
                      <tr>
                        <td>Contact No.</td>
                        <td><?php echo $mobile;?></td>
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
            <!-- end form -->
          </div>
        </div>
  </div>
</div>

<?php include("footer.php");

}//else session end

?>

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

</div>
