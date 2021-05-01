<?php
// keep these here for testing
// mysqli_report(MYSQLI_REPORT_ALL);
// error_reporting(E_ALL); // report all PHP errors
// ini_set("display_errors", 1); // display them
session_start();
include "style_head.php";
?>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
  <a href="dashboard.php" class="btn btn-primary ml-3">Dashboard</a>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="col-md-auto">
                <div class="col-md-auto">
                    <div class="mt-5 mb-3 col-md-auto">
                        <h2 class="pull-left">Well Test Details</h2>
                        <a href="insert_into_production.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Production</a>
                    </div>
<?php

$servername = "localhost";// sql server name
$username = "root";// sql username
$password = "";// sql password
$dbname  = "cppc";// database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM employees";// embed a select statement in php
$result = $conn->query($sql);// get result

if($result->num_rows > 0){// check for number of rows. If there are records, build a table to show them
  echo '<table class="table table-bordered table-striped">';
echo "<tr style='border: solid 1px black;'>";
echo "<th style='border: solid 1px black;'>Employee_ID</th>";
echo "<th style='border: solid 1px black;'>Employee_Name</th>";
echo "<th style='border: solid 1px black;'>Phone</th>";
echo "<th style='border: solid 1px black;'>Email</th>";
echo "<th style='border: solid 1px black;'>Office_ID</th>";
echo "<th style='border: solid 1px black;'>Edit</th>";
echo "</tr>";
}

while ($row = $result -> fetch_assoc()){// Fetch the query result and store them in an array
	echo '<tr style="border: solid 1px black;">
		<td style="border: solid 1px black;">'.$row['Employee_ID'].'</td>
		<td style="border: solid 1px black;">'.$row['Employee_Name'].'</td>
		<td style="border: solid 1px black;">'.$row['Phone'].'</td>
		<td style="border: solid 1px black;">'.$row['Email'].'</td>
		<td style="border: solid 1px black;">'.$row['Office_ID'].'</td>

    <td> <a href="Edit_employee.php?EmpID='.$row['Employee_ID'].'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>

		</tr>';
}

echo "</table>";
?>
<div class="footer">
<a href="logout.php" id="b1" class="btn btn-outline-success btn-sm ml-3">Sign Out</a>
</div>
