
<?php
    //session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:header.php/#FacultyModal");
    }
    else
    {
 ?>
 
<div class="padding">
  <div class="full col-sm-11" id="tab1">

      <center><h1>Your Inserted Data</h1></center>
      <table class ="table table-striped"   style="border-color:#337ab7;" align="center" border="1px" >
      <tr>
        <th>Serial No.</th>
        <th>Title</th>
        <th>Journal</th>
        <th>ISSN</th>
        <th>Peer Reviews</th>
        <th>Co-authors</th>
        <th>Main author</th>
        <th>Option</th>
      </tr> 

     <?php
     mysql_connect('localhost','root','');
     mysql_select_db('pbas_db');

      $username = $_SESSION['username'];
      $query= "SELECT * FROM teach_ppij WHERE User_Id = '".$_SESSION['username']."' and data_set='valid' ";

      $run= mysql_query($query);
      if (!$run) { // add this check.
        die('Invalid query: ' . mysql_error());
      }

      while($row=mysql_fetch_array($run)) {
        
        $user_id= $row['User_Id'];
        $ppij_id= $row['PPIJ_ID'];
        $TNO= $row['Teach_PPIJ_TNO'];
        $Journal= $row['Teach_PPIJ_Journal'];
        $ISBN= $row['Teach_PPIJ_ISBN'];
        $PR= $row['Teach_PPIJ_PR'];
        $NCA= $row['Teach_PPIJ_NCA'];
        $MA= $row['Teach_PPIJ_MA'];
      
    ?>

    <font size="5" color="red">
       <?php echo @$_GET['deleted']; ?> 
    </font>
    <tr align="center">
    <td><?php echo $user_id; ?></td>
    <td><?php echo $TNO; ?></td>
    <td><?php echo $Journal; ?></td>
    <td><?php echo $ISBN; ?></td>
    <td><?php echo $PR; ?></td>
    <td><?php echo $NCA; ?></td>
    <td><?php echo $MA; ?></td>
    <td><a href='research_publication\delete.php?del_ppij_id=<?php echo $ppij_id; ?> '>Delete</a></td> 
    </tr>
    <?php 
    }  //while end
    ?>
  </table>

  </div>
 </div>
<?php
}//else
?>