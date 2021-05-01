<?php

// mysqli_report(MYSQLI_REPORT_ALL);
// error_reporting(E_ALL); // report all PHP errors
// ini_set("display_errors", 1); // display them
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

	$id=$_POST['Employee_ID'];//get form value ID attribute
	$ln = $_POST['Employee_Name'];//get form value Last Name attribute
	$fn = $_POST['Phone'];//get form values First Name attribute
	$city = $_POST['Email'];//get form value City attribute
	$oid = $_POST['Office_ID'];

	// Create connection
	require_once "config.php";
	$sql = "INSERT INTO employees VALUES ('$id', '$ln', '$fn', '$city', '$oid')";//embed insert statement in PHP
	$result = $conn->query($sql);

	if($result) //if the insert into database was successful
	{
	echo "Records inserted successfully ";
	echo htmlspecialchars($_SESSION["username"]);
	header("insert_into_employee.php");
	}
	else {
		echo "Failed, check your records and try again.";
		header("insert_into_employee.php");
	}
}

?>
<!--
This php file is used to insert data in Persons table
Here we are submitting the form to the same page.
-->

<html>
<body>

	<!-- The following piece of code is run when the page is loaded (before submit button is hit) -->
	<!-- "form" is an HTML tag that enable us to have components such as textbox and buttons in the html page.
	"action" part determines the page where the information of the current form (page) should be sent.
	"method" part determines if the data in the current form is sent/received to/from another page.
	The value of "method" is generally "post". -->
	<!--
	Here we use $_SERVER['PHP_SELF'] which returns the current page. Here it return insert.php
	-->
  <h2 class="pull-left">Enter Employee Record</h2>
  <br/> <br/>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

	<br/>	<!-- The <br> tag inserts a single line break.-->

	<!-- Below, we define components exist in the page (textboxes and submit button) -->
	Employee ID : <input type="text" value="E###" minlength="4" maxlength="4" name="Employee_ID"/>
	<br/> <br/>
	Employee Name : <input type="text" value="14 Character Max." maxlength="14" name="Employee_Name"/>
	<br/> <br/>
	Phone : <input type ="text" value="3371234567" minlength="10" maxlength="10" name ="Phone"/>
	<br/> <br/>
	Email : <input type ="text" value="18 Character Max." maxlength="18" name ="Email"/>
	<br/> <br/>
	Office ID : <input type ="text" value="OF###" minlength="5" maxlength="5" name ="Office_ID"/>
	<br/> <br/>
	<input type ="submit" value="Insert" name="inserttb"/>
	</form>
  <div class="footer">
  <a href="logout.php" id="b1" class="btn btn-outline-success btn-sm ml-3">Sign Out</a>
  </div>
</body>
	</html>
