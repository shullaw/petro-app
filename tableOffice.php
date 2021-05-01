<?php
// keep these here for testing
// mysqli_report(MYSQLI_REPORT_ALL);
// error_reporting(E_ALL); // report all PHP errors
// ini_set("display_errors", 1); // display them
session_start();
include "style_head.php";
?>
                            <title>Office</title>
                        <h2 class="pull-left">Office Details</h2>
                      </div>
                     <div class="footer">
                   <a href="logout.php" id="b1" class="btn btn-outline-success btn-sm ml-3">Sign Out</a>
                 </div>
<?php
include "config.php";

$sql = "SELECT * FROM office";

$result = $conn->query($sql);

if($result->num_rows > 0){
  echo '<table class="table table-bordered table-striped">';
  echo "<tr>";
  echo "<th>Office_ID</th>";
  echo "<th>Address</th>";
  echo "<th>Office_Phone</th>";
  echo "</tr>";
}

while ($row = $result -> fetch_assoc()){
	echo '<tr>
		<td> '.$row['Office_ID'].' </td>
		<td> '.$row['Address'].' </td>
		<td> '.$row['Office_Phone'].' </td>
		</tr>';
}

echo "</table>";

?>
