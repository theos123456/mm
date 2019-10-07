
<?php
session_start();
$conn=mysqli_connect("localhost","root","","mothezhub");
if (isset($_POST['failed'])){
    // Include config file
    $order_id = $_GET['order_id'];
    
	$status="failed";  

$qry=$conn->query("UPDATE  `mothezhub`.`order_detail` SET status='$status' WHERE order_id=$order_id ");

	

//$qry=$conn->query("INSERT INTO `human_ressource`.`employee` (`id`, `email`, `fname`, `lname`, `phone`, `gender`, `position`, `username`, `password`) 
//VALUES (NULL, '$email', '$fname', '$lname', '$phone', '$gender', '$position', '$username', '$password')");


if($qry)
{
	header("location: admin_order.php");
   

}
else
{
    echo "<script>alert('fail to update')</script>";
}
}

if (isset($_POST['completed'])){
    // Include config file
    $order_id = $_GET['order_id'];
    
	$status="completed";  

$qry=$conn->query("UPDATE  `mothezhub`.`order_detail` SET status='$status' WHERE order_id=$order_id ");

	

//$qry=$conn->query("INSERT INTO `human_ressource`.`employee` (`id`, `email`, `fname`, `lname`, `phone`, `gender`, `position`, `username`, `password`) 
//VALUES (NULL, '$email', '$fname', '$lname', '$phone', '$gender', '$position', '$username', '$password')");


if($qry)
{
	header("location: admin_order.php");
   

}
else
{
    echo "<script>alert('fail to update')</script>";
}
}


if (isset($_POST['pending'])){
    // Include config file
    $order_id = $_GET['order_id'];
    
	$status="pending";  

$qry=$conn->query("UPDATE  `mothezhub`.`order_detail` SET status='$status' WHERE order_id=$order_id ");

	

//$qry=$conn->query("INSERT INTO `human_ressource`.`employee` (`id`, `email`, `fname`, `lname`, `phone`, `gender`, `position`, `username`, `password`) 
//VALUES (NULL, '$email', '$fname', '$lname', '$phone', '$gender', '$position', '$username', '$password')");


if($qry)
{
	header("location: admin_order.php");
   

}
else
{
    echo "<script>alert('fail to update')</script>";
}
}







?>






<!doctype html>
<html lang="en">

<head>
	<title>Notifications | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/toastr/toastr.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
        <?php include 'admin_navbar.php';?>
			
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
                <?php include 'admin_sidebar.php';?>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">



            <form  method="post">

            <h2> Please select status</h2>
  <div class="form-group">
    
    <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
  
  <button name="completed" type="submit" class="btn btn-success">completed</button>
  <button name="failed" type="submit" class="btn btn-danger">failed</button>
  <button name="pending" type="submit" class="btn btn-warning">pending</button>
  </div>
</form>
				
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/toastr/toastr.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
