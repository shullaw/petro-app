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
                    <div class="footer">
                  <a href="logout.php" id="b1" class="btn btn-outline-success btn-sm ml-3">Sign Out</a>
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

    echo'<td> <a href="confirm.php" class="mr-3" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';

		'</tr>';
}

echo "</table>";

?>
