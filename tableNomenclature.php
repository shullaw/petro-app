<?php
// keep these here for testing
// mysqli_report(MYSQLI_REPORT_ALL);
// error_reporting(E_ALL); // report all PHP errors
// ini_set("display_errors", 1); // display them
session_start();
include "style_head.php";
?>
<style>
.wrapper{
width: 1000px;
margin: 0 auto;
background-color:rgba(0, 0, 0, 0);
}
table tr td:first-child{
width: 60px;
}
table tr td:last-child{
width: 350px;
}
</style>
                          <title>Nomenclature</title>
                        <h2 class="pull-left">Nomenclature Details</h2>
                      </div>
                     <div class="footer">
                   <a href="logout.php" id="b1" class="btn btn-outline-success btn-sm ml-3">Sign Out</a>
                 </div>
<?php
include "config.php";

$sql = "SELECT * FROM nomenclature";

$result = $conn->query($sql);

if($result->num_rows > 0){
  echo '<table class="table table-bordered table-striped">';
  echo "<tr>";
  echo "<th>Abbreviation </th>";
  echo "<th>Meaning </th>";
  echo "<th>Description</th>";
  echo "</tr>";
}

while ($row = $result -> fetch_assoc()){
	echo '<tr>
		<td> '.$row['Abbreviation'].' </td>
		<td> '.$row['Meaning'].' </td>
		<td> '.$row['Description'].' </td>
		</tr>';
}

echo "</table>";

?>
