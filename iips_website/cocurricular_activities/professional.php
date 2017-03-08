<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Student Master</title>
        <script src="jquery-1.3.1.js"></script>
    </head>
    <body>
        <div id="mainContainer">
            <div>
                <div class="col-md-12">                      
                   <div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
                    <div class="panel-heading">               
                         <h4 align="center"><b>Professional Development Activities</b></h4>
                    </div><br>
                    <form role="form" name="development" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="developmentForm">
                        <input class="btn btn-primary" type="submit" value="Save" name="developmentSave" />
                        <select name="dev" onChange="showUser(this.value, this.name)">
                            <option>--Activity--</option>
                            <?php 
                                include('DBConnect.php');
                                $userId = $_SESSION['username'];
                                $year=$_SESSION['pbasYear'];
                                $query = mysqli_query($con,"SELECT * from Teach_PDA WHERE User_Id = '$userId' and year='$year'");
                                while($row = mysqli_fetch_assoc($query)){
                            ?>      <option><?php echo $row['Teach_PDA_TOA']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="submit" class="btn btn-primary"  value="Delete" name="developmentDelete" />
                        <input type="reset" class="btn btn-primary" value="Reset" name="reset" onClick="clear()" />
                        <div class="form-group">
                          <div id="dev"><br/>
                            <label>Type of Activity</label> 
                                <input type="text" class="form-control required" name="typeOfActivity" title="Please Enter Type of Activity" required="required"/>
                            <br><label>Yearly/Semester wise responsibility</label>
                                <select name="dev" onChange="showUser(this.value, this.name)"> 
                                    
                            <option>--Yearly--</option> 
                            <option>--semester--</option>
                        </select>

                            </div><!--End dev Id for Ajax -->
                        </div>
                        
                       <input class="btn btn-primary" type="submit" value="Save" name="developmentSave" />
                        <select name="dev" onChange="showUser(this.value, this.name)">
                            <option>--Activity--</option>
                            <?php 
                                include('DBConnect.php');
                                $userId = $_SESSION['username'];
                                $year=$_SESSION['pbasYear'];
                                $query = mysqli_query($con,"SELECT * from Teach_PDA WHERE User_Id = '$userId' and year='$year'");
                                while($row = mysqli_fetch_assoc($query)){
                            ?>      <option><?php echo $row['Teach_PDA_TOA']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="submit" class="btn btn-primary"  value="Delete" name="developmentDelete" />
                        <input type="reset" class="btn btn-primary" value="Reset" name="reset"/>
                    </form>
                   </div><!--end of panel-->                   
                </div>
            </div>
        </div>
    </body>
</html>
