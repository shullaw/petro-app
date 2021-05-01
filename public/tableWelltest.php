<?php
// keep these here for testing
// mysqli_report(MYSQLI_REPORT_ALL);
// error_reporting(E_ALL); // report all PHP errors
// ini_set("display_errors", 1); // display them
session_start();
include "style_head.php";
?>
<title>Well Test</title>

<h2 class="pull-left">Well Test Details</h2>
                     </div>
<?php
include "config.php";

$sql = "SELECT * FROM well_test";

$result = $conn->query($sql);

if($result->num_rows > 0){
  echo '<table class="table table-bordered table-striped">';
 echo "<tr>";
 echo "<th>Test_number</th>";
 echo "<th>Test_Date</th>";
 echo "<th>Well_ID</th>";
 echo "<th>Flow_Pressure_psi</th>";
 echo "<th>MD_ft</th>";
 echo "<th>Shutin_pressure_psi</th>";
 echo "</tr>";
}

while ($row = $result -> fetch_assoc()){
	echo '<tr>
		<td> '.$row['Test_number'].' </td>
		<td> '.$row['Test_Date'].' </td>
		<td> '.$row['Well_ID'].' </td>
		<td> '.$row['Flow_Pressure_psi'].' </td>
		<td> '.$row['Water_bbls'].' </td>
		<td> '.$row['Shutin_pressure_psi'].' </td>

		</tr>';
}

echo "</table>";

?>
