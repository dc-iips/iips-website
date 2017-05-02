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
                  url: "research_publication/researchguidance/researchguidance_select_db.php",
                  type: "post",
                  data: { },
                    success: function(msg)
                    {
                      $("#table_div").html(msg).show(500);    
                    }
                });//end of ajax
        });// end of ready

        $("#rg_save").submit(function(event){
              /* stop form from submitting normally */
               event.preventDefault();
               var values = $(this).serialize();
               //alert(values);
               
              if($("#rg_submit").val()=="Save"){
               
               $.ajax({
                    url: "research_publication/researchguidance/researchguidance_insert_db.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("Data Added Successfully.");

                    $("#RG_NE").val("");
                    $("#RG_TS").val("");
                    $("#RG_DA").val("");
                    
                    
                    //alert(values);
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "research_publication/researchguidance/researchguidance_select_db.php",
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
        else if($("#rg_submit").val()=="Update")
        {
           var session_des = $(this).attr("id");
           $.ajax({
                    url: "research_publication/researchguidance/researchguidance_update.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("Data Updated Successfully.");  
                    
                    $("#session").val("");
                    $("#RG_NE").val("");
                    $("#RG_TS").val("");
                    $("#RG_DA").val("");
                    
                    
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "research_publication/researchguidance/researchguidance_select_db.php",
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
              <h3  id="papers" class="panel-title" align="center">Research Guidance</h3>
            </div><!--end of panel heading-->
            <br>
            <form role="form" id="rg_save" name="rg_save" method="post">
              

              <label>Session</label>
              
                <select id="select_box" name="select_box" style="width: 220px">          
                  
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
                  <div id="rg">

               

                       <label>Number Enrolled</label> 
                         <input type="text" class="form-control required" name="RG_NE" id="RG_NE" autofocus required="required"/>
               
                       <label>Thesis Submitted</label>
                         <input type="text" class="form-control required" id="RG_TS" name="RG_TS" required="required"/>
                
                       <label>Degree Awarded </label>
                         <input type="text" class="form-control required" id="RG_DA" name="RG_DA" required="required"/>
                
                      
                  </div> <br>            
                  <input class="btn btn-primary" type="submit" value="Save" id="rg_submit" name="rg_submit"/>           
                  <!--  <input type="submit" class="btn btn-primary"  value="Delete" name="ppij_delete" /> -->
                  <input type="reset" class="btn btn-primary" value="Reset" name="reset"  onClick="getDataTable('researchguidance_select_db.php','tab1')" />
                
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
