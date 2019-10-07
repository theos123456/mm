<?php
session_start();
$conn=mysqli_connect("localhost","root","","mothezhub");
if (isset($_POST['yes'])){
    // Include config file
    $order_id = $_GET['order_id'];
    
	 

$qry=$conn->query("DELETE  FROM order_detail WHERE order_id =$order_id");

	

//$qry=$conn->query("INSERT INTO `human_ressource`.`employee` (`id`, `email`, `fname`, `lname`, `phone`, `gender`, `position`, `username`, `password`) 
//VALUES (NULL, '$email', '$fname', '$lname', '$phone', '$gender', '$position', '$username', '$password')");


if($qry)
{
	header("location: admin_order.php");
   

}
else
{
    echo "<script>alert('fail to delete')</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Delete Record</h1>
                    </div>
                    <form  method="post">
                        <div class="alert alert-danger fade in">
                            
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <button  name="yes" value="Yes" class="btn btn-danger">Yes </button>
                                <a href="admin_order.php" name="no" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>

                
            </div>        
        </div>
    </div>
</body>
</html>