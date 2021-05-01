<?php
// keep these here for testing
// mysqli_report(MYSQLI_REPORT_ALL);
// error_reporting(E_ALL); // report all PHP errors
// ini_set("display_errors", 1); // display them
session_start();
include "style_head.php";
?>
<title>Delete Well Profile</title>

                        <h2 class="pull-left">Well Profile Delete Page</h2>
                      </div>
                     <div class="footer">
                   <a href="logout.php" id="b1" class="btn btn-outline-success btn-sm ml-3">Sign Out</a>
                 </div>
<?php
include "config.php";

if (!empty($_GET['Well_ID'])){
$wid = $_GET['Well_ID'];// get the id value from url parameters
}

if(isset($_GET['mode']) == 'delete'){

$sqldelete = "DELETE FROM well_profile WHERE Well_ID='$wid'";//delete statement
$delete = $conn->query($sqldelete);//execute the query
if($delete)
 {
  echo "Record deleted successfully!";
 }
}

//Below is the code to show the list of records
$sql = "SELECT * FROM well_profile";// embed a select statement
$result = $conn->query($sql);// get result

if($result->num_rows > 0){// check for number of rows; if there are records, build html table
  echo '<table class="table table-bordered table-striped">';
	echo "<tr>";
	echo "<th>Well_ID</th>";
	echo "<th>Well_Name</th>";
	echo "<th>Well_Start_Date</th>";
	echo "<th>TVD_ft</th>";
	echo "<th>MD_ft</th>";
	echo "<th>Field_ID</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
}

while ($row = $result -> fetch_assoc()){// store the result in an array; then put them in html table one by one
  echo '<tr>
		<td>'.$row['Well_ID'].'</td>
		<td>'.$row['Well_Name'].'</td>
		<td>'.$row['Well_Start_Date'].'</td>
		<td>'.$row['TVD_ft'].'</td>
		<td>'.$row['MD_ft'].'</td>
		<td>'.$row['Field_ID'].'</td>

		<td> <a href="Delete_wellprofile.php?Well_ID='.$row['Well_ID'].'&mode=delete" class="mr-3" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></td>
	      </tr>';
}
 echo "</table>";

?>
