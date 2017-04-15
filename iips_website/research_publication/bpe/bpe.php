<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:header.php/#FacultyModal");
    }
    else
    {
 ?>
	<center><h4><b>Research Publication And Academic Contribution</b></h4></center>
  <div class="row-fluid">        
    <div class="col-md-11">
		<!--"Books Published" Panel started -->		
			<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				  <div class="panel-heading">
				      <h4 id="books" class="panel-title" align="center">Books Published as Single Author or as a Editor</h4>
				  </div><br>
				
				  <form id="booksForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					 
					  <input class="btn btn-md btn-primary" type="submit" value="Save" name="bpe_save" />						
						<input type="reset" class="btn btn-primary" value="Reset" name="reset" /> <br/><br/>
					 
					  <label>Session Start</label>
					  <input type="date" name="start_date" placeholder="" value=""> 
					  <label>Session End</label>
					  <input type="date" name="end_date" placeholder="" value=""> 
					  

				  <div id="bookPublished">
						
						  <label>Title With Page Numbers</label>
						  <input class="form-control" type="text" name="BPE_TPN"> 
						  
						  <label>Type of Book And Authorship</label>
						  <input class="form-control" type="text" name="BPE_TBA"> 
						  
						  <label>Publisher And ISSN / ISBN No</label>
						  <input class="form-control" type="text" name="BPE_PISSN" /> 
						
						  <label> Whether Peer Reviewed</label>
						  <input class="form-control" type="text" name="BPE_WPR" /> 
						  
						  <label>No. of Co-authors</label>
						  <input class="form-control" type="text" name="BPE_NOC" /> <br/>
					   
					    <label>Whether you are the main Author</label>
						  <input type="radio" name="BPE_YN" />Yes <input type="radio" name="BPE_YN"/>No<br /> <br/>
					  
					  </div>
						<input class="btn btn-md btn-primary" type="submit" value="Save" name="bpe_save" />
						<input class="btn btn-md btn-primary" type="submit" value="Delete" name="bpe_delete" />
						<input type="reset" class="btn btn-primary" value="Reset" name="reset" />
				 
				  </form>
				</div><!--end of panel-->
    </div><!--End Of col-md-6 --> 
</div><!--End Of row-fluid Class --> 


<?php 

  $conn = mysql_connect('localhost','root','') && mysql_select_db('pbas_db');
  
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  if(isset($_POST['bpe_save'])) {
       
       $start_date = $_POST['start_date'];
       $end_date = $_POST['end_date'];
       
       $BPE_TPN = $_POST['BPE_TPN'];
       $BPE_TBA = $_POST['BPE_TBA'];
       $BPE_PISSN = $_POST['BPE_PISSN'];
       $BPE_WPR = $_POST['BPE_WPR'];
       $BPE_NOC = $_POST['BPE_NOC'];
       $BPE_YN = $_POST['BPE_YN'];
       
        // $user_id = mysql_query("SELECT user_id from `` where username= $_SESSION['username'] "); 
         $user_id = $_SESSION['username'];
         $var = mysql_query("INSERT INTO `teach_bpe` (user_id, s_date, end_date, Teach_BPE_TPN ,Teach_BPE_TBA ,Teach_BPE_PISSN ,Teach_BPE_WPR ,Teach_BPE_NOC ,Teach_BPE_YN ) 
         	   VALUES ('$user_id','$start_date', '$end_date', '$BPE_TPN ', '$BPE_TBA', '$BPE_PISSN', '$BPE_WPR', '$BPE_NOC', '$BPE_YN',)");
      
         if($var > 0){
            echo " <br/> Data Submitted";
         }else{
            echo mysql_error();
         }

  }  // if close
  else{
  	     echo "<script><aleart>Please fill valid values</alert></script>";
  }
  mysql_close();
?>

<?php  //end of else
  }
?>