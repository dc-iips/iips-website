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
                  url: "cocurricular_activities/professional/professional_select_db.php",
                  type: "post",
                  data: { },
                    success: function(msg)
                    {
                      $("#table_div").html(msg).show(500);    
                    }
                });//end of ajax
                }); //end of ready
        $("#professional_save").submit(function(event){
              /* stop form from submitting normally */
               event.preventDefault();
               var values = $(this).serialize();
               //alert(values);
               
              if($("#professional_submit").val()=="Save"){
               
               $.ajax({
                    url: "cocurricular_activities/professional/professional_insert_db.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("Data Added Successfully.");

                    $("#PROFESSIONAL_TOA").val("");
                    $("#PROFESSIONAL_YSR").val("");
                   
                    //alert(values);
                    $("#table_div").html("Loading Data.......");
                    
                    $.ajax({
                          url: "cocurricular_activities/professional/professional_select_db.php",
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
        else if($("#professional_submit").val()=="Update")
        {
           var session_des = $(this).attr("id");
           $.ajax({
                    url: "cocurricular_activities/professional/professional_update.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("Data Updated Successfully.");  
                    
                    $("#session").val("");
                    $("#PROFESSIONAL_TOA").val("");
                    $("#PROFESSIONAL_YSR").val("");
                    
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "cocurricular_activities/professional/professional_select_db.php",
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


    <center id="slide_up"><h4><b>Co-Curricular Related Activities</b></h4></center>

     <div class="row-fluid">       
        <div class="col-md-11">
        
        <!--Published Papers Panel started -->
        <div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
            <div class="panel-heading">
              <h3  id="papers" class="panel-title" align="center">Professional Development Activites</h3>
            </div><!--end of panel heading-->
            <br>
            <form role="form" id="professional_save" name="professional_save" method="post">
              

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
                  <div id="cocurri">

                       <label>Type of Activity</label> 
                         <input type="text" class="form-control required" name="PROFESSIONAL_TOA" id="PROFESSIONAL_TOA" autofocus required="required"/>
               
                       <label>Year semester wise review</label>
                         <input type="text" class="form-control required" id="PROFESSIONAL_YSR" name="PROFESSIONAL_YSR" required="required"/>
                
                  </div> <br>            
                  <input class="btn btn-primary" type="submit" value="Save" id="professional_submit" name="professional_submit"/>           
                  
                  <input type="reset" class="btn btn-primary" value="Reset" name="reset"  onClick="getDataTable('professional_select_db.php','tab1')" />
                
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


<?php 
   }  //else
?>