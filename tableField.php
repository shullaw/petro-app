<?php
// keep these here for testing
// mysqli_report(MYSQLI_REPORT_ALL);
// error_reporting(E_ALL); // report all PHP errors
// ini_set("display_errors", 1); // display them
session_start();
include "style_head.php";
?>
                        <title>Field</title>
                        <h2 class="pull-left">Field Details</h2>
                      </div>
                     <div class="footer">
                   <a href="logout.php" id="b1" class="btn btn-outline-success btn-sm ml-3">Sign Out</a>
                 </div>
<?php
include "config.php";

$sql = "SELECT * FROM field";

$result = $conn->query($sql);

if($result->num_rows > 0){
  echo '<table class="table table-bordered table-striped">';
  echo "<tr>";
  echo "<th>Field_ID</th>";
  echo "<th>Field_Name</th>";
  echo "<th>No_of_Wells</th>";
  echo "<th>Parish_ID</th>";
  echo "</tr>";
}

while ($row = $result -> fetch_assoc()){
	echo '<tr>
		<td> '.$row['Field_ID'].' </td>
		<td> '.$row['Field_Name'].' </td>
		<td> '.$row['No_of_Wells'].' </td>
		<td> '.$row['Parish_ID'].' </td>
		</tr>';
}

echo "</table>";

?>
