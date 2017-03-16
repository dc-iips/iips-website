 $("#row_delete").submit(function(event){
              /* stop form from submitting normally */
               // event.preventDefault();
               // var values = $(this).serialize();
              // alert(values);
               $.ajax({
                    url: "research_publication/delete.php?de="+<?php echo $ppij_id; ?>,
                    type: "post",
                    data: {},
                    success: function()
                    {
                    alert("data deletd Successfully.");
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "research_publication/ppij_select_db.php?user="+<?php echo $username ;?>,
                          type: "post",
                          data: {},
                          success: function(msg)
                          {
                              $("#table_div").html(msg).show(500);    
                          }
                    });//
                    }//end of function
                }); //End of .ajax
        });

 function delete_row()
   //  {
   //    $("table_div").row_delete(function(event){
   //            /* stop form from submitting normally */
   //             event.preventDefault();
   //             var values = $(this).serialize();
   //            // alert(values);
   //             $.ajax({
   //                  url: "research_publication/delete.php?de=<?php echo $ppij_id; ?>",
   //                  type: "post",
   //                  data: values,
   //                  success: function()
   //                  {
   //                  alert("data deleted Successfully.");
   //                  $("#table_div").html("Loading Data.......");
   //                  $.ajax({
   //                        url: "research_publication/ppij_select_db.php?user=<?php echo $username ;?>",
   //                        type: "post",
   //                        data: {},
   //                        success: function(msg)
   //                        {
   //                            $("#table_div").html(msg).show(500);    
   //                        }
   //                  });//
   //                  }//end of function
   //              }); //End of .ajax
    //     });