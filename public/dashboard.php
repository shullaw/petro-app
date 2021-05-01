<?php
// mysqli_report(MYSQLI_REPORT_ALL);
// error_reporting(E_ALL); // report all PHP errors
// ini_set("display_errors", 1); // display them
session_start();
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
        background-image: url('/cppc/public/louisiana6.svg');
        background-position: center right;
        background-size: 1550px;
        background-attachment: fixed;
        background-color: rgba(0,0,0,.2);
        }
    </style>
</head>
<body>

    <h1 class="my-5">Welcome to CPPC.</h1>
    <p>
        <a href="/cppc/public/tableProduction.php" id="purp" class="shadow btn-sm btn-warning ml-3">Well Production</a>
        <a href="/cppc/public/tableWellprofile.php" id="purp" class="shadow btn-sm btn-warning ml-3">Well Profile</a>
        <a href="/cppc/public/tableWelltest.php" id="purp" class="shadow btn-sm btn-warning ml-3">Well Tests</a>
        <a href="/cppc/public/tableParish.php" id="purp" class="shadow btn-sm btn-warning ml-3">Parish</a>
        <a href="/cppc/public/tableField.php" id="purp" class="shadow btn-sm btn-warning ml-3">Field</a>
        <a href="/cppc/public//tableOffice.php" id="purp" class="shadow btn-sm btn-warning ml-3">Office</a>
        <a href="/cppc/public/tableEmployee.php" id="purp" class="shadow btn-sm btn-warning ml-3">Employees</a>
        <a href="/cppc/public/tableNomenclature.php" id="purp" class="shadow btn-sm btn-warning ml-3">Nomenclature</a>

    </p>
</div>
</body>
</html>
