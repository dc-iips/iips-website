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
                  url: "research_publication/trainingcoursefdp/trainingcoursefdp_select_db.php",
                  type: "post",
                  data: { },
                    success: function(msg)
                    {
                      $("#table_div").html(msg).show(500);    
                    }
                });//end of ajax
        });// end of ready

        $("#fdp_save").submit(function(event){
              /* stop form from submitting normally */
               event.preventDefault();
               var values = $(this).serialize();
               //alert(values);
               
              if($("#fdp_submit").val()=="Save"){
               
               $.ajax({
                    url: "research_publication/trainingcoursefdp/trainingcoursefdp_insert_db.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("Data Added Successfully.");

                    $("#FDP_Prog").val("");
                    $("#FDP_Month").val("");
                    $("#FDP_Days").val("");
                    $("#FDP_ORG").val("");
                    
                    //alert(values);
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "research_publication/trainingcoursefdp/trainingcoursefdp_select_db.php",
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
        else if($("#fdp_submit").val()=="Update")
        {
           var session_des = $(this).attr("id");
           $.ajax({
                    url: "research_publication/trainingcoursefdp/trainingcoursefdp_update.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("Data Updated Successfully.");  
                    
                    $("#session").val("");
                    $("#FDP_Prog").val("");
                    $("#FDP_Month").val("");
                    $("#FDP_Days").val("");
                    $("#FDP_ORG").val("");
                    
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "research_publication/trainingcoursefdp/trainingcoursefdp_select_db.php",
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
              <h3  id="papers" class="panel-title" align="center">Training Courses , Teaching-Learning-Evaluation Technology, Faculty Development Programmes
</h3>
            </div><!--end of panel heading-->
            <br>
            <form role="form" id="fdp_save" name="fdp_save" method="post">
              

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
                  <div id="ilc">

               

                       <label>Programme</label> 
                         <input type="text" class="form-control required" name="FDP_PROG" id="FDP_PROG" autofocus required="required"/>
               <label> Duration </label>
                   <br>
                  <!-- <input class="form-control" type="text" name="FDP_Duration" required="required"/> --> 
                  
   <select name="DOBMonth"  name="FDP_Month" id="FDP_Month">
  <option> - Month - </option>
  <option value="January">0 month</option>
  <option value="Febuary">1 month</option>
  <option value="March">2 months</option>
  <option value="April">3 months</option>
  <option value="May">4 months</option>
  <option value="June">5 months</option>
  <option value="July">6 months</option>
  <option value="August">7 months</option>
  <option value="September">8 months</option>
  <option value="October">9 months</option>
  <option value="November">10 months</option>
  <option value="December">11 months</option>
</select>
 &nbsp

 <select name="DOBdays"  name="FDP_Days" id="FDP_Days">
  <option> - Days - </option>
  <option value="one">1 day</option>
  <option value="two">2 days</option>
  <option value="three">3 days</option>
  <option value="four">4 days</option>
  <option value="five">5 days</option>
  <option value="six">6 days</option>
  <option value="seven">7 days</option>
  <option value="eight">8 days</option>
  <option value="nine">9 days</option>
  <option value="ten">10 days</option>
  <option value="eleven">11 days</option>
  <option value="twelve">12 days</option>
  <option value="Jan">13 days</option>
  <option value="Feb">14 days</option>
  <option value="Mar">15 days</option>
  <option value="Apr">16 days</option>
  <option value="Ma">17 days</option>
  <option value="Jun">18 days</option>
  <option value="Jul">19 days</option>
  <option value="Aug">20 days</option>
  <option value="Sept">21 days</option>
  <option value="Oct">22 days</option>
  <option value="Nov">23 days</option>
  <option value="Dec">24 days</option>
  <option value="t25">25 days</option>
  <option value="t26">26 days</option>
  <option value="t27">27 days</option>
  <option value="t28">28 days</option>
  <option value="t29">29 days</option>
  <option value="t30">30 days</option>

     </select>

                        <br>
                       <label>Organized </label>
                         <input type="text" class="form-control required" id="FDP_ORG" name="FDP_ORG" required="required"/>


                  </div> <br>            
                  <input class="btn btn-primary" type="submit" value="Save" id="fdp_submit" name="fdp_submit"/>           
                  <!--  <input type="submit" class="btn btn-primary"  value="Delete" name="ppij_delete" /> -->
                  <input type="reset" class="btn btn-primary" value="Reset" name="reset"  onClick="getDataTable('trainingcoursefdp_select_db.php','tab1')" />
                
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
