<?php
	session_start();
	include('DBConnect.php');
	//include('form_process/rpacProcess.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Research Publication </title>
<?php
	include('../cssLinks.php');
	include('../jsLinks.php');
?>
<style type="text/css">
    /* Custom Styles */
    ul.nav-tabs{
        width: 230px;
        margin-top: 20px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
    }
    ul.nav-tabs li a{
        padding: 8px 16px;
    }
    ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover{
        color: #fff;
        background: #0088cc;
        border: 1px solid #0088cc;
    }
    .nav-tabs.affix{
        top: 30px; /* Set the top position of pinned element */
    }
</style>
</head>
<body data-spy="scroll" data-target="#myNav">
<?php
	if(isset($_SESSION['username']) and $_SESSION['pbasYear']){
	echo '<div id="wrap">';
	include('../header.php');
?>
     <div class="container">
	<div style="box-shadow:5px 5px 5px 5px #888888; padding:3px 3px 3px 3px;" class="text-primary">
	</div><!--end of box-shadow-->
    <div class="row-fluid">
        <div class="col-md-8">
            <!--Published Papers Panel started --><br>
				<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				<div class="panel-heading">
				  <h3  id="papers" class="panel-title" align="center">Published Papers in Journals</h3>
				</div><!--end of panel heading-->
				
					  <form role="form" name="ppij"  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
						<br>
						<input class="btn btn-primary" type="submit" value="Save" name="ppij_save" />
						<select name="pp" onChange="showUser(this.value, this.name)">
							<option>--Title--</option>
							<?php 
								include('DBConnect.php');
								$uname=$_SESSION['username'];
								$year=$_SESSION['pbasYear'];
								$query = mysqli_query($con,"SELECT * from teach_ppij where User_Id='$uname' and year='$year'");
								while($row = mysqli_fetch_assoc($query)){
							?><option><?php echo $row['Teach_PPIJ_TNO']; ?></option>
							<?php } ?>
						</select>
						<input type="submit" class="btn btn-primary"  value="Delete" name="ppij_delete" />
						<input type="reset" class="btn btn-primary" value="Reset" name="reset" /> <br/><br/>
						<div class="form-group">
							<div id="ppij">
								<label>Title With Page Numbers</label> 
								  <input type="text" class="form-control required" name="PPIJ_TNO" autofocus required="required"/>
								<label>Journal</label>
								  <input type="text" class="form-control required" name="PPIJ_Journal" required="required"/>
								<label>ISSN / ISBN No. </label>
								  <input type="text" class="form-control required" name="PPIJ_ISBN" required="required"/>
								<label> Whether peer reviewed? Impact factor, if any</label>
								  <input type="text" class="form-control required" name="PPIJ_PR" required="required"/>
								<label>No. of Co-authors</label>
								  <input type="text" class="form-control required" name="PPIJ_NCA" required="required"/>
								<br/><label>Whether you are the main Author</label>
								  <input type="radio" value="Yes" name="PPIJ_YN" required="required">Yes <input type="radio" value="No" name="PPIJ_YN">NO<br />
								<br/><label>API Score</label>
								  <input type="text" class="form-control required" name="PPIJ_API" required="required"/><br/>
							</div>
						
						<input class="btn btn-primary" type="submit" value="Save" name="ppij_save" />
						<select name="pp" onChange="showUser(this.value, this.name)">
							<option>--Title--</option>
							<?php 
								include('DBConnect.php');
								$uname=$_SESSION['username'];
								$year=$_SESSION['pbasYear'];
								$query = mysqli_query($con,"SELECT * from teach_ppij where user_id='$uname' and year='$year'");
								while($row = mysqli_fetch_assoc($query)){
							?><option><?php echo $row['Teach_PPIJ_TNO']; ?></option>
							<?php } ?>
						</select>
						<input type="submit" class="btn btn-primary"  value="Delete" name="ppij_delete" />
						<input type="reset" class="btn btn-primary" value="Reset" name="reset" />
					   </div>
					</form>
				</div><!--end of panel div-->		
		
    </div><!--End Of row-fluid Class --> 
</div>
</div>
<!--End Of container --> 
<?php
	      include('../jsLinks.php');
		  }
		  else{
		     header('location:../index.php');
	      }
     ?>

	 <!--JavaScript code for dynamically showing records using AJAX-->
	 <script>
		function showUser(value, name)
		{
		if (value=="")
		  {
		  document.getElementById("ppij").innerHTML="";
		  return;
		  }
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
				if(name == 'apb'){
					document.getElementById("apb").innerHTML=xmlhttp.responseText;
				}
				if(name == 'pp'){
					document.getElementById("ppij").innerHTML=xmlhttp.responseText;
				}	
			}
		  }
		xmlhttp.open("GET","form_process/rpac_show.php?val="+value+"&name="+name,true);
		xmlhttp.send();
		}
	</script>
</body>
</html>                                		