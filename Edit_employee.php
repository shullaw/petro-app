<?php
// keep these here for testing
// mysqli_report(MYSQLI_REPORT_ALL);
// error_reporting(E_ALL); // report all PHP errors
// ini_set("display_errors", 1); // display them
session_start();
include "style_head.php";
?>
<?php
if (!empty($_GET['EmpID'])){
$EID = $_GET['EmpID']; //the value of pid is received from the Edit_emply_record page
}

include("config.php");

//Things to do, after the "updatebtn" button is clicked.
if(isset($_POST['updatebtn']))
{
	$sql_update= "UPDATE employees SET Employee_Name='$_POST[EmNtb]', Phone='$_POST[phonetb]', Email='$_POST[emailtb]', Office_ID='$_POST[offtb]' WHERE Employee_ID ='$EID'";

	$resultupdate = $conn->query($sql_update);

	if($resultupdate) //if the update is done successfully
		{
		echo "Records updated successfully";
		}
}

//when the page is loaded (also after the update is effective), the information of the selected (updated) record is loaded
$sql = "SELECT * FROM employees WHERE Employee_ID ='$EID'";
$result = $conn->query($sql);
?>

<form action="" method="post">
<?php
if($result->num_rows > 0){//if the record is found (which is expected!), then display it in a table
 echo "<table style='border: solid 1px black;'>
	<tr>
	    <th>Employee_ID</th>
	    <th>Employee_Name</th>
	    <th>Phone</th>
	    <th>Email</th>
	    <th>Office_ID</th>

	</tr>";
}

while ($row = $result -> fetch_assoc()){//fetch the attributes to put in the designated textboxes
	echo '<tr>
		<!-- just for simplicity, we assume the PK value cannot be updated, as such, it is "readonly" -->
		<td><input type="text" name="EIDtb" value="'.$row['Employee_ID'].'" readonly/></td>
		<td><input type="text" name="EmNtb" value="'.$row['Employee_Name'].'"/></td>
		<td><input type="text" name="phonetb" value="'.$row['Phone'].'"/></td>
		<td><input type="text" name="emailtb" value="'.$row['Email'].'"/></td>
		<td><input type="text" name="offtb" value="'.$row['Office_ID'].'"/></td>
	      <tr>';
}
 echo "</table>";

?>
<input type="submit" value="Update" name="updatebtn"/>
<div class="footer">
<a href="logout.php" id="b1" class="btn btn-outline-success btn-sm ml-3">Sign Out</a>
</div>
