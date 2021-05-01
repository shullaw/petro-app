<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>

body {
font-weight:bold;
background-image: url('louisiana6.svg');
background-position: center;
background-size: 1600px;
background-attachment: fixed;
background-color: rgba(0,0,0,.2);
}

.wrapper{
width: 1200px;
margin: 0 auto;
background-color:rgba(0, 0, 0, 0);
}
table tr td:last-child{
width: 60px;
}
#footer {
  margin: 0 auto;
}


</style>
<style type="text/css">
.signed_in_as{
position:fixed;
top:0;
right:0
}
#purp {
color:  #B10DC9
}
#b1 {
position: fixed;
top: 20px;
right: 0;
color:  #B10DC9;

}
#dash{
  top:0;
  left:0;
  position: fixed;

}
</style>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</head>
<body>
<div class="signed_in_as">Signed in as: <b><?php echo htmlspecialchars($_SESSION["username"]);?></div>
  <a href="dashboard.php" id="dash" class="btn btn-outline-primary ml-3">Dashboard</a>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3">
