<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
       echo "<script>window.open('../../index.php','_self')</script>";     
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
                  url: "research_publication/paperpresented/paperpresented_select_db.php",
                  type: "post",
                  data: { },
                    success: function(msg)
                    {
                      $("#table_div").html(msg).show(500);    
                    }
                });//end of ajax
        });// end of ready

        $("#ppc_save").submit(function(event){
              /* stop form from submitting normally */
               event.preventDefault();
               var values = $(this).serialize();
               //alert(values);
               
              if($("#ppc_submit").val()=="Save"){
               
               $.ajax({
                    url: "research_publication/paperpresented/paperpresented_insert_db.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("Data Added Successfully.");

                    $("#PPC_TPP").val("");
                    $("#PPC_TCS").val("");
                    $("#PPC_DOE").val("");
                    $("#PPC_ORG").val("");
                    $("#PPC_WINS").val("");
                    
                    //alert(values);
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "research_publication/paperpresented/paperpresented_select_db.php",
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
        else if($("#ppc_submit").val()=="Update")
        {
           var session_des = $(this).attr("id");
           $.ajax({
                    url: "research_publication/paperpresented/paperpresented_update.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("Data Updated Successfully.");  
                    
                    $("#session").val("");
                    $("#PPC_TPP").val("");
                    $("#PPC_TCS").val("");
                    $("#PPC_DOE").val("");
                    $("#PPC_ORG").val("");
                    $("#PPC_WINS").val("");
                    
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "research_publication/paperpresented/paperpresented_select_db.php",
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


    <center id="slide_up"><h4><b>Research Publication And Academic Contribution</b></h4></center>

     <div class="row-fluid">       
        <div class="col-md-11">
        
        <!--Published Papers Panel started -->
        <div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
            <div class="panel-heading">
              <h3  id="papers" class="panel-title" align="center">Paper Presented </h3>
            </div><!--end of panel heading-->
            <br>
            <form role="form" id="ppc_save" name="ppc_save" method="post">
              

              <label>Session</label>
              
                <select id="" style="width: 220px">          
                  
                  <?php 
                    include('../../DBConnect.php');
                    //$uname=$_SESSION['username'];
                    $query = mysqli_query($conn,"SELECT session_description from session_master");
                    while($row = mysqli_fetch_assoc($query)){

                  ?>
                  
                  <option name="session" id="<?php echo $row["session_description"]; ?>" ><?php echo $row['session_description']; ?></option>
                  <?php } ?>
                </select>
                </br>

                <div class="form-group">
                  <div id="ppc">

               
                        
                       <label>Title OF Paper Presented</label> 
                         <input type="text" class="form-control required" name="PPC_TPP" id="PPC_TPP" autofocus required="required"/>
               
                       <label>Title Of Conference</label>
                         <input type="text" class="form-control required" id="PPC_TCS" name="PPC_TCS" required="required"/>
                
                       <label>Date of Event </label>
                         <input type="text" class="form-control required" id="PPC_DOE" name="PPC_DOE" required="required"/>
                
                       <label> Organized At</label>
                         <input type="text" class="form-control required" name="PPC_ORG" id="PPC_ORG" required="required"/>
                
                       <label>Whether International/National/State</label>
                          <input type="text"  class="form-control required" name="PPC_WINS" id="PPC_WINS" required="required"/>
                       <br/>

                  </div> <br>            
                  <input class="btn btn-primary" type="submit" value="Save" id="ppc_submit" name="ppc_submit"/>           
                  <!--  <input type="submit" class="btn btn-primary"  value="Delete" name="ppij_delete" /> -->
                  <input type="reset" class="btn btn-primary" value="Reset" name="reset"  onClick="getDataTable('paperpresented_select_db.php','tab1')" />
                
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

</div>
<!--  -->

<?php 
   }  //else
?>
