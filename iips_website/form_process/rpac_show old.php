<?php
	
//Query for clicking on 'SAVE' button in 'Article' form.
    include('DBConnect.php');
	$q=$_GET["q"];
	$result = mysqli_query($con,"Select * from teach_apb where Teach_APB_TNO='".$q."'") or die('error');
	
	echo "<table border='1'>
	<tr>
	<th>Title</th>
	<th>Journal</th>
	<th>ISBN</th>
	<th>PR</th>
	<th>NCA</th>
	<th>YN</th>
	<th>API</th>
	</tr>";
if($result){
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>hgg";
  echo "<td>" . $row['Teach_APB_TNO'] . "</td>";
  echo "<td>" . $row['Teach_APB_Journal'] . "</td>";
  echo "<td>" . $row['Teach_APB_ISBN'] . "</td>";
  echo "<td>" . $row['Teach_APB_PR'] . "</td>";
  echo "<td>" . $row['Teach_APB_NCA'] . "</td>";
  echo "<td>" . $row['Teach_APB_MA'] . "</td>";
  echo "<td>" . $row['Teach_APB_API'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

