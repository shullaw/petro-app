<?php
// keep these here for testing
mysqli_report(MYSQLI_REPORT_ALL);
error_reporting(E_ALL); // report all PHP errors
ini_set("display_errors", 1); // display them
session_start();
include "style_head.php";
?>
<?php
// Check if the user is not logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: dashboard.php");
    exit;
}


if(isset($_POST['inserttb'])){ //things to do, once the "submit" key is hit

	$en=$_POST['Entry_No'];//get form value ID attribute
	$rd = $_POST['Report_Date'];//get form value Last Name attribute
	$wid = $_POST['Well_ID'];//get form values First Name attribute
	$ostb = $_POST['Oil_stbday'];//get form value City attribute
	$gmsf = $_POST['Gas_Mscfday'];
	$wbbl = $_POST['Water_bblsday'];
	$reid = $_POST['Reporting_Employee_ID'];

	// Create connection
	require_once "config.php";
	$sql = "INSERT INTO production VALUES ('$en', '$rd', '$wid', '$ostb', '$gmsf','$wbbl','$reid')";//embed insert statement in PHP
	$result = $conn->query($sql);

	if($result) //if the insert into database was successful
	{
	echo "Records inserted successfully ";
	echo htmlspecialchars($_SESSION["username"]);
	header("insert_into_production.php");
	}
	else {
		echo "Failed, check your records and try again.";
		header("insert_into_production.php");
	}
}

?>
<h2 class="pull-left">Well Production</h2>
<br/> <br/>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <br/> <br/>
<!-- Below, we define components exist in the page (textboxes and submit button) -->
Entry number: <input type="text" value="EN###" minlength="5" maxlength="5" name="Entry_No"/>
<br/> <br/>
Report date : <input type="text" value="yyyy-mm-dd" minlength="10" maxlength="10" name="Report_Date"/>
<br/> <br/>
Well Id : <input type="text" value="W###" minlength="4" maxlength="4" name ="Well_ID"/>
<br/> <br/>
Oil : <input type="text" value="Max 11 INTs" maxlength="11" name ="Oil_stbday"/>
<br/> <br/>
Gas : <input type="text" value="Max. 11 INTs" maxlength="11" name ="Gas_Mscfday"/>
<br/> <br/>
Water : <input type="text" value="Max. 11 INTs" maxlength="11" name ="Water_bblsday"/>
<br/> <br/>
Reporting employee : <input type="text" value="E###"  minlength="4" maxlength="4" name ="Reporting_Employee_ID"/>
<br/> <br/>
<input type="submit" class="btn btn-outline-primary btn-sm ml-3" value="Insert" name="inserttb"/>
</form>
<div class="footer">
<a href="logout.php" id="b1" class="btn btn-outline-success btn-sm ml-3">Sign Out</a>
</div>
</body>
</html>
