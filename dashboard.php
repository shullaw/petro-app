<?php
// Initialize the session
// Check if the user is logged in, if not then redirect him to login page
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
mysqli_report(MYSQLI_REPORT_ALL);
error_reporting(E_ALL); // report all PHP errors
ini_set("display_errors", 1); // display them
include("style_head.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

        body{ font: 14px sans-serif; text-align: center; }
        #footer {  margin: 0 auto;  }
        body {
        font-weight:bold;
        background-image: url('louisiana6.svg');
        background-position: center right;
        background-size: 1550px;
        background-attachment: fixed;
        background-color: rgba(0,0,0,.2);
        }
    </style>
</head>
<body>
  <!-- <nav class="navbar navbar-light bg-transparent">
    <a class="navbar-brand" href="#">
      <img src="louisiana5.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    </a>
  </nav> -->

    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to CPPC.</h1>
    <p>
      <!-- <div class="tc">Signed in as: <b><?php echo htmlspecialchars($_SESSION["username"]);?></div> -->
        <a href="tableProduction.php" id="purp" class="shadow btn-sm btn-warning ml-3">Well Production</a>
        <a href="tableWellprofile.php" id="purp" class="shadow btn-sm btn-warning ml-3">Well Profile</a>
        <a href="tableWelltest.php" id="purp" class="shadow btn-sm btn-warning ml-3">Well Tests</a>
        <a href="tableParish.php" id="purp" class="shadow btn-sm btn-warning ml-3">Parish</a>
        <a href="tableField.php" id="purp" class="shadow btn-sm btn-warning ml-3">Field</a>
        <a href="tableOffice.php" id="purp" class="shadow btn-sm btn-warning ml-3">Office</a>
        <a href="tableEmployee.php" id="purp" class="shadow btn-sm btn-warning ml-3">Employees</a>
        <a href="tableNomenclature.php" id="purp" class="shadow btn-sm btn-warning ml-3">Nomenclature</a>

        <!-- <a href="Delete_wellprofile.php" class="btn-sm btn-danger ml-3">Delete Well Profile</a> -->
        <!-- <a href="Edit_emply_record.php" class="btn-sm btn-primary ml-3">Edit Employee</a> -->
        <!-- <a href="insert_into_employee.php" class="btn-sm btn-sm-warning ml-3">Add Employee</a>
        <a href="insert_into_production.php" class="btn-sm btn-primary ml-3">Add Production</a> -->

    </p>
    <div class="footer">
  <a href="logout.php" id="b1" class="btn btn-outline-success btn-sm ml-3">Sign Out</a>
</div>
</body>
</html>
