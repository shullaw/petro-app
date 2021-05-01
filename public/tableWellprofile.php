<?php
// keep these here for testing
// mysqli_report(MYSQLI_REPORT_ALL);
// error_reporting(E_ALL); // report all PHP errors
// ini_set("display_errors", 1); // display them
session_start();
include "style_head.php";
?>
<title>Well Profile</title>

<h2 class="pull-left">Well Profile Details</h2>
                     </div>
<?php
include "config.php";

$sql = "SELECT * FROM well_profile";

$result = $conn->query($sql);

if($result->num_rows > 0){
 echo '<table class="table table-bordered table-striped">';
 echo "<thead>";
 echo "<tr>";
 echo "<th>Well_ID</th>";
 echo "<th>Well_Name</th>";
 echo "<th>Well_Start_Date</th>";
 echo "<th>TVD_ft</th>";
 echo "<th>MD_ft</th>";
 echo "<th>Field_ID</th>";
 echo "</tr>";
}

while ($row = $result -> fetch_assoc()){
	echo '<tr>
		<td> '.$row['Well_ID'].' </td>
		<td> '.$row['Well_Name'].' </td>
		<td> '.$row['Well_Start_Date'].' </td>
		<td> '.$row['TVD_ft'].' </td>
		<td> '.$row['MD_ft'].' </td>
		<td> '.$row['Field_ID'].' </td>';

		'</tr>';
}

echo "</table>";

?>
