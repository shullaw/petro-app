<?php
// keep these here for testing
// mysqli_report(MYSQLI_REPORT_ALL);
// error_reporting(E_ALL); // report all PHP errors
// ini_set("display_errors", 1); // display them
session_start();
include "style_head.php";
?>
<title>Well Production</title>


<h2 class="pull-left">Well Production Details</h2>
                    </div>
                </div>
<?php
include "config.php";

$sql = "SELECT * FROM production";

try{
$result = $conn->query($sql);
}
catch (Exception $e) {
    echo $e->getMessage();
}
catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

if($result->num_rows > 0){
  echo '<table class="table table-bordered table-striped">';
  echo "<thead>";
	echo "<tr>";
	echo "<th>Entry No.</th>";
	echo "<th>Report Date</th>";
	echo "<th>Well ID</th>";
	echo "<th>Oil (stb/day)</th>";
	echo "<th>Gas (Mscf/day)</th>";
	echo "<th>Water (bbls/day)</th>";
	echo "<th>Reporting Employee ID</th>";
  // echo "<th>Action</th>";
	echo "</tr>";
  echo "</thead>";
  echo "<tbody>";
}
while ($row = $result -> fetch_assoc()){
	echo '<tr>';
	echo "<td>" .$row['Entry_No'].              "</td>";
	echo "<td>" .$row['Report_Date'].           "</td>";
	echo "<td>" .$row['Well_ID'].               "</td>";
	echo "<td>" .$row['Oil_stbday'].            "</td>";
	echo "<td>" .$row['Gas_Mscfday'].           "</td>";
	echo "<td>" .$row['Water_bblsday'].         "</td>";
	echo "<td>" .$row['Reporting_Employee_ID']. "</td>";
	// echo "<td>";
  // echo '<a href="insert_into_production.php?id='. $row['Entry_No'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
  echo "</td>";
  echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>
</div>
</div>
</div>
</div>
</body>
</html>
