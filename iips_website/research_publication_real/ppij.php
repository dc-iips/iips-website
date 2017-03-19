<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
       echo "<script>window.open('index.php','_self')</script>";     
    }
    else
    {
      $username= $_SESSION['username'];
 ?>
     <script language="javascript">    

       $(document).ready(function()
       {
                $("#table_div").html("loading data");

                $.ajax({
                  url: "research_publication/ppij_select_db.php?user=<?php echo $username ;?>",
                  type: "post",
                  data: { },
                    success: function(msg)
                    {
                      $("#table_div").html(msg).show(500);    
                    }
                });//end of ajax
        });// end of ready

        $("#ppij_save").submit(function(event){
              /* stop form from submitting normally */
               event.preventDefault();
               var values = $(this).serialize();
              // alert(values);
              
              if($("#ppij_submit").val()=="Save"){
               
               $.ajax({
                    url: "research_publication/ppij_insert_db.php?user=<?php echo $username ;?>",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("data Added Successfully.");
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "research_publication/ppij_select_db.php?user=<?php echo $username ;?>",
                          type: "post",
                          data: {},
                          success: function(msg)
                          {
                              $("#table_div").html(msg).show(500);    
                          }
                    });//
                    }//end of function
                }); //End of .ajax
             }//end of if
        else
        {
           $.ajax({
                    url: "research_publication/fetch.php?user=<?php echo $username ;?>",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("data Added Successfully.");
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "research_publication/ppij_select_db.php?user=<?php echo $username ;?>",
                          type: "post",
                          data: {},
                          success: function(msg)
                          {
                              $("#table_div").html(msg).show(500);    
                          }
                    });//
                    }//end of function
                }); //End of .ajax
          
      
        }
        });

     </script>


    <center><h4><b>Research Publication And Academic Contribution</b></h4></center>

     <div class="row-fluid">       
        <div class="col-md-11">
        
        <!--Published Papers Panel started -->
        <div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
            <div class="panel-heading">
              <h3  id="papers" class="panel-title" align="center">Published Papers in Journals</h3>
            </div><!--end of panel heading-->
            <br>
            <form role="form" id="ppij_save" name="ppij_save" method="post">
              

              <label>Session</label>
              
                <select id="session" style="width: 220px">          
                  
                  <?php 
                    include('../DBConnect.php');
                    //$uname=$_SESSION['username'];
                    $query = mysqli_query($conn,"SELECT session_description from session_master");
                    while($row = mysqli_fetch_assoc($query)){

                  ?>
                  
                  <option name="session"><?php echo $row['session_description']; ?></option>
                  <?php } ?>
                </select>
                </br>

                <div class="form-group">
                  <div id="ppij">

                       <label>Title With Page Numbers</label> 
                         <input type="text" class="form-control required" name="PPIJ_TNO" id="twno" autofocus required="required"/>
               
                       <label>Journal</label>
                         <input type="text" class="form-control required" id="PPIJ_Journal" name="PPIJ_Journal" required="required"/>
                
                       <label>ISSN / ISBN No. </label>
                         <input type="text" class="form-control required" id="PPIJ_ISBN" name="PPIJ_ISBN" required="required"/>
                
                       <label> Whether peer reviewed? Impact factor, if any</label>
                         <input type="text" class="form-control required" name="PPIJ_PR" id="PPIJ_PR" required="required"/>
                
                        <label>No. of Co-authors</label>
                          <input type="text" class="form-control required" name="PPIJ_NCA" id="PPIJ_NCA" required="required"/>
                       <br/>

                       <label>Whether you are the main Author</label>
                         <input type="radio" value="Yes" name="PPIJ_YN" id="PPIJ_Y" required="required">Yes <input type="radio" value="No" id="ppij_N" name="PPIJ_YN">NO<br />
                  </div> <br>            
                  <input class="btn btn-primary" type="submit" value="Save" id="ppij_submit" name="ppij_submit"/>           
                  <!--  <input type="submit" class="btn btn-primary"  value="Delete" name="ppij_delete" /> -->
                  <input type="reset" class="btn btn-primary" value="Reset" name="reset"  onClick="getDataTable('ppij_select_db.php','tab1')" />
                
                </div>
            </form>

        </div><!--end of panel div-->   
    
    </div><!--End Of row-fluid Class --> 

<!-- Table -->

<div class="view">
  <div class="full col-sm-12" id="table_div">

  </div>
</div> 
<!-- Tabssle End -->
<div id="temp">
  shubham
</div>
<!--  -->

<?php 
   }  //else
?>
