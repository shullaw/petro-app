<?php
// keep these here for testing
// mysqli_report(MYSQLI_REPORT_ALL);
// error_reporting(E_ALL); // report all PHP errors
// ini_set("display_errors", 1); // display them
session_start();
include "style_head.php";
include "config.php";
?>
<h2 class="pull-left">Delete Well Profile</h2>
</div>
<div class="footer">
<a href="logout.php" id="b1" class="btn btn-outline-success btn-sm ml-3">Sign Out</a>
</div>
<div class="alert alert-danger text-left offset-5" role="alert">
  <a href="Delete_wellprofile.php" class="mr-3" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash" class="alert-link">Go to deletion page.</a>
</div>

<div class="alert alert-success text-center offset-5" role="alert">
<a href="tableWellprofile.php" class="alert-link">Click here to cancel</a>.
</div>
<?php
