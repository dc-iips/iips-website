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
                  url: "research_publication/bpe/bpe_select_db.php",
                  type: "post",
                  data: { },
                    success: function(msg)
                    {
                      $("#table_div").html(msg).show(500);    
                    }
                });//end of ajax
                }); //end of ready
        $("#bpe_save").submit(function(event){
              /* stop form from submitting normally */
               event.preventDefault();
               var values = $(this).serialize();
               //alert(values);
               
              if($("#bpe_submit").val()=="Save"){
               
               $.ajax({
                    url: "research_publication/bpe/bpe_insert_db.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("Data Added Successfully.");

                    $("#BPE_TPN").val("");
                    $("#BPE_TBA").val("");
                    $("#BPE_PISSN").val("");
                    $("#BPE_PRY").val("");
                    $("#BPE_PRN").val("");
                    $("#BPE_IF").val("");
                    $("#BPE_NOC").val("");
                    $("#BPE_Y").val("");
                    $("#BPE_N").val("")
                    //alert(values);
                    $("#table_div").html("Loading Data.......");
                    
                    $.ajax({
                          url: "research_publication/bpe/bpe_select_db.php",
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
        else if($("#bpe_submit").val()=="Update")
        {
           var session_des = $(this).attr("id");
           $.ajax({
                    url: "research_publication/bpe/bpe_update.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("Data Updated Successfully.");  
                    
                   // $("#session").val("");
                    $("#BPE_TPN").val("");
                    $("#BPE_TBA").val("");
                    $("#BPE_PISSN").val("");
                    $("#BPE_PRY").val("");
                    $("#BPE_PRN").val("");
                    $("#BPE_IF").val("");
                    $("#BPE_NOC").val("");
                    $("#BPE_Y").val("");
                    $("#BPE_N").val("")
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "research_publication/bpe/bpe_select_db.php",
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
    <!--"Books Published" Panel started -->   
      <div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
          <div class="panel-heading">
              <h4 id="books" class="panel-title" align="center">Books Published as Single Author or as a Editor</h4>
          </div><br>
        
          <form id="booksForm" name="bpe_save" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
           
           
           <label>Session</label>
                <select id="selectbox" name="selectbox" style="width: 220px">          
                  
                  <?php 
                    include('../../DBConnect.php');
                    //$uname=$_SESSION['username'];
                    $query = mysqli_query($conn,"SELECT session_description from session_master");
                    while($row = mysqli_fetch_assoc($query))
                    {

                  ?>                  
                  <option name="session" id="<?php echo $row["session_description"]; ?>" ><?php echo $row['session_description']; ?></option>
                  <?php
                     } 
                  ?>
                </select>

          <div id="bookPublished">
            
              <label>Title With Page Numbers</label>
              <input class="form-control" type="text" name="BPE_TPN" id="BPE_TPN"> 
              
              <label>Type of Book And Authorship</label>
              <input class="form-control" type="text" name="BPE_TBA" id="BPE_TBA"> 
              
              <label>Publisher And ISSN / ISBN No</label>
              <input class="form-control" type="text" name="BPE_PISSN" id="BPE_PISSN" /> 
            
              <div class="row">
                        <div class="col-md-4">
                          <label> Whether peer reviewed?</label><br>
                          <input type="radio" value="Yes" name="BPE_PR" id="BPE_PRY" required="required">Yes <input type="radio" value="No" id="BPE_PRN" name="PPIJ_PR" required="required"/>NO
                          <br><br>
                        </div>

                        <div class="col-md-8">
                          <label>If peer reviewed Write the Impact factor, Else Write NIL</label>  
                            <input type="text" class="form-control required" name="BPE_IF" id="BPE_IF" required="required"/>
                        </div>
                      </div>
              
              <label>No. of Co-authors</label>
              <input class="form-control" type="text" name="BPE_NOC" id="BPE_NOC"/> <br/>
             
              <label>Whether you are the main Author</label>
              <input type="radio" name="BPE_YN" id="BPE_Y" />Yes <input type="radio" name="BPE_YN" id="BPE_N"/>No<br /> <br/>
            
            </div>
            <input class="btn btn-md btn-primary" type="submit" value="Save" name="bpe_submit" id="bpe_submit" />
            <input class="btn btn-md btn-primary" type="submit" value="Delete" name="bpe_delete" id="bpe_delete" />
            
         
          </form>
        </div><!--end of panel-->
    </div><!--End Of col-md-6 --> 
</div><!--End Of row-fluid Class --> 


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