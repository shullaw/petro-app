<?php
// keep these here for testing
// mysqli_report(MYSQLI_REPORT_ALL);
// error_reporting(E_ALL); // report all PHP errors
// ini_set("display_errors", 1); // display them
session_start();
include "style_head.php";
?>
<title>Employees</title>
<h2 class="pull-left">Employee Details</h2>
                    </div>
<?php
// mysqli_report(MYSQLI_REPORT_ALL);
// error_reporting(E_ALL); // report all PHP errors
// ini_set("display_errors", 1); // display them
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "cppc";
$conn = new mysqli($servername, $username, $password, $dbname)or die("Connect failed: %s\n". $conn -> error);


$sql = "SELECT * FROM employees";

$result = $conn->query($sql);

if($result->num_rows > 0){
 echo '<table class="table table-bordered table-striped">';
 echo "<thead>";
 echo "<tr>";
 echo "<th>Employee_ID</th>";
 echo "<th>Employee_Name</th>";
 echo "<th>Phone</th>";
 echo "<th>Email</th>";
 echo "<th>Office_ID</th>";
 echo "</tr>";
}

while ($row = $result -> fetch_assoc()){
	echo '<tr>';
	echo "<td>" .$row['Employee_ID'].   "</td>";
	echo "<td>" .$row['Employee_Name']. "</td>";
	echo "<td>" .$row['Phone'].         "</td>";
	echo "<td>" .$row['Email'].         "</td>";
	echo "<td>" .$row['Office_ID'].     "</td>";
	echo "<td>";
  echo '<a href="Edit_employee.php?EmpID='. $row['Employee_ID'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
  echo "</td>";
  echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
?>
