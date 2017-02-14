<?php
	session_start();
	include('DBConnect.php');
	include('form_process/rpacProcess.php');
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
	include('cssLinks.php');
	include('jsLinks.php');
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
	if(isset($_SESSION['username']) and isset($_SESSION['pbasYear'])){
		include('header.php');
		$user=$_SESSION['username'];
		$year=$_SESSION['pbasYear'];

   ?>
<div class="container">
	<div style="box-shadow:5px 5px 5px 5px #888888; padding:3px 3px 3px 3px;" class="text-primary">
	<center><h4><b>Research Publication And Academic Contribution</b></h4></center>
	</div><!--end of box-shadow-->
    <div class="row-fluid">
        <div class="col-md-4" id="myNav">
        <br><br>
        <div class="panel panel-primary" >
            <ul class="nav nav-tabs nav-stacked"  data-offset-top="190" style="width:100%;">
                <li><a href="ppij.php">Published Papers in Journals<div class="pull-right"><i class="icon-chevron-right" ></i></div> </a> </li>
                
                <li><a href="apb.php">Articles/ Chapters published in Books<div class="pull-right"><i class="icon-chevron-right" ></i></div> </a></li>
                <li><a href="fcp.php">Full papers in Conference Proceedings <div class="pull-right"><i class="icon-chevron-right" ></i></div></a></li>
                <li><a href="bpe.php">Books published as single author or as editor<div class="pull-right"><i class="icon-chevron-right" ></i></div> </a></li>
                <li><a href="opc.php">Ongoing Projects/ Consultancies<div class="pull-right"><i class="icon-chevron-right" ></i></div></a></li>
				<li><a href="cpc.php">Completed Projects/ Consultancies<div class="pull-right"><i class="icon-chevron-right" ></i></div></a></li>
				<li><a href="rg.php">Research Guidance<div class="pull-right"><i class="icon-chevron-right" ></i></div> </a></li>
				<li><a href="fdp.php">Training Courses, Teaching-Learning-Evaluation Technology, Faculty Development Programmes<div class="pull-right"><i class="icon-chevron-right" ></i></div></a></li>
				<li class="active"><a href="ppc.php">Papers presented in Conferences, Seminars, Workshops, Symposia<div class="pull-right"><i class="icon-chevron-right" ></i></div></a></li></li>
				<li><a href="ilc.php"> Invited Lectures and Chairmanship at National or International Conference/ Seminar<div class="pull-right"><i class="icon-chevron-right" ></i></div></a></li>
            </ul>
            </div><!--end of panel-->
        </div>
        
        <div class="col-md-8">
            		<br/>	 
			 <!--"Papers Presented in Conferences" Panel started --><br>			 
				<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				<div class="panel-heading">
				  <h4 id="papersPresented" class="panel-title" align="center">Papers Presented in Conferences, Seminars, Workshops, Symposia</h4>
				</div><br>
				  <form id="presentedForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					   
					   <input class="btn btn-md btn-primary" type="submit" value="Save" name="ppc_save" />
							<select name="pc" onchange="showUser(this.value,this.name)">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_ppc where user_id='$user' and year='$year'");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_PPC_TPP']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="ppc_delete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="reset" /> <br/><br/>
					   <div id="presentedFields">
						   <label>Title of the Paper Presented</label>
							<input class="form-control"t type="text" name="PPC_TPP" required="required"/>  
						   <label>Title Conference / Seminar etc.</label> 
							 <input class="form-control" type="text" name="PPC_TCS" required="required"/>  
						   <label>Date (s) of the Event </label>
							 <input class="form-control" type="text" name="PPC_DOE" required="required"/>  
						   <label>Organized By</label>
							 <input class="form-control" type="text" name="PPC_Organized" required="required"/>  
						   <label>Whether International / National / State</label>
							<input class="form-control" type="text" name="PPC_WINS" required="required"/>   
						   <label>API Score</label>
							 <input class="form-control" type="text" name="PPC_API" required="required"/> 
						</div><br />
							<input class="btn btn-md btn-primary" type="submit" value="Save" name="ppc_save" />
							<select name="pc" onchange="showUser(this.value,this.name)">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_ppc where user_id='$user' and year='$year'");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_PPC_TPP']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="ppc_delete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="reset" /> 
					</form>
				
        </div><!--End Of col-md-6 --> 
		
		
			
    </div><!--End Of row-fluid Class --> 
</div>
<!--End Of container --> 
<?php
	      include('jsLinks.php');
		  }
		  else{
		     header('location:index.php');
	      }
     ?>

	 
	 <!--JavaScript code for dynamically showing records using AJAX-->
	 <script>
		function showUser(value, name)
		{
		if (value=="")
		  {
		  document.getElementById("apb").innerHTML="";
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
				
				if(name == 'pc'){
					document.getElementById("presentedFields").innerHTML=xmlhttp.responseText;
				}	
			}
		  }
		xmlhttp.open("GET","form_process/rpac_show.php?val="+value+"&name="+name,true);
		xmlhttp.send();
		}
	</script>
</body>
</html>                                		