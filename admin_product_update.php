<?php 
session_start();
include 'connection.php';
   if(isset($_GET['product_id']))
   {
	$sel2 = mysqli_query($con, "SELECT * FROM product,category,sub_category WHERE product.product_id='".$_GET['product_id']."' and product.sub_cath_id=sub_category.sub_cath_id and category.cathe_id=sub_category.cathe_id");
    
	//$sel1 = mysqli_query($con, "SELECT * FROM publication WHERE district='".$_GET['loc']."'");
	$fetch = mysqli_fetch_array($sel2);

   }
   if(isset($_POST['modify']))
{
 $prodname=$_POST['prodname'];
 $prodprice=$_POST['prodprice'];
 $prodreduction=$_POST['prodreduction'];
 $proddescription=$_POST['proddescription'];
 $category=$_POST['category'];
 $subcat=$_POST['sub-cat'];
 //$img=$_POST['img'];
//to search if tin number exist

//file uploads------------------------------------------------------------
if(isset($_FILES['prodimg']) && $_FILES['prodimg']['name']!="")
	{
	$photo_name=$_FILES['prodimg']['name'];
	$photo_temp=$_FILES['prodimg']['tmp_name'];
	$photo_size=$_FILES['prodimg']['size'];
	$folder=$target_dir = 'uploads/';
	$res=$target_dir.$photo_name;
	$number=0;
	while(file_exists($res))
	{
	$number++;
	$photo_ext=".jpg" or ".gif" or ".png" or ".bmp" or ".jpeg";
	$name1=str_replace($photo_ext," ",$photo_name);
	$new_name=$name1."(".$number.")";
	$new_name_ext=$folder . $new_name . $photo_ext;
	$res=$new_name_ext;
	}
	$result=move_uploaded_file($photo_temp,$res);
	}
	//upload
	//connect server
	//connect database
	$_SESSION['front']=@$res;


	
//end of file uploads-----------------------------------------------------
//$sqlhey = $conn->query("select *  from category where cathe_name='$category'");
//$row=mysqli_fetch_assoc($sqlhey);
//$count=mysqli_num_rows($sqlhey);

//if($count == 0)
//{

/*$sql1 =$conn->query("UPDATE  `mothezhub`.`product`,`mothezhub`.`category`,`mothezhub`.`sub_category` SET  `product_name` =  '$prodname',
`product_price` =  '$prodprice',
`product_reduction` =  '$prodreduction',
`product_description` =  '$proddescription',
`product_picture` =  '".$_SESSION['front']."',
`cathe_name`='$category',
`sub_cathe_name`='$subcat';

 WHERE  `product`.`product_id` ='".$_GET['product_id']."' and `sub_category`.`sub_cath_id`=`product`.`sub_cath_id` and `category`.`cathe_id`=`product`.`scathe_id` LIMIT 1 ") or die(mysql_error());
//}*/
//$sql1 =$con->query("UPDATE product SET product_name='$prodname',product_price='$prodprice',product_reduction='$prodreduction' WHERE product_id='".$_GET['product_id']."'");
$sql1 =$con->query("UPDATE  `mothezhub`.`product`, `mothezhub`.`category`,`mothezhub`.`sub_category` SET  `product_name` =  '$prodname',`product_price` =  '$prodprice',`product_reduction` =  '$prodreduction',`product_description` =  '$proddescription',product_picture='".$_SESSION['front']."',cathe_name='$category',sub_cathe_name='$subcat' WHERE  `product`.`product_id` ='".$_GET['product_id']."' and  `sub_category`.`sub_cath_id`=`product`.`sub_cath_id` and `category`.`cathe_id`=`sub_category`.`cathe_id` ") ;
if($sql1 == true)
{
echo"<script>alert('well updated')</script>";
}
else{
  echo"<script>alert('not Updated')</script>";
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
	<script type="text/javascript" src="js/category-autoload.js"> </script>
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



			<form name="new_product" action="#" enctype="multipart/form-data" method="post">
<fieldset class="form-group">
<label for="product name">product name</label>
<input type="text" class="form-control" id="prodname" name="prodname" value="<?php echo $fetch['product_name']; ?>">
</fieldset>
<fieldset class="form-group">
<label for="last_name">product price</label>
<input type="text" class="form-control" id="prodprice" name="prodprice" value="<?php echo $fetch['product_price']; ?>">
</fieldset>
<fieldset class="form-group">
<label for="last_name">product reduction</label>
<input type="text" class="form-control" id="prodreduction" name="prodreduction" value="<?php echo $fetch['product_reduction']; ?>">
</fieldset>
<fieldset class="form-group">
<label for="last_name">product Description</label>
<input type="text" class="form-control" id="proddescription" name="proddescription" value="<?php echo $fetch['product_description']; ?>">
</fieldset>
<fieldset class="form-group">
<label for="last_name">product category</label>
<select id="input-style" name="category" onChange="categoryChange(this);" class="form-control validate" >
<option value="empty">Select category</option>
<option>Baby food</option>
 <option>receipes</option>
  <option>party notebook</option>
   <option>party theme</option>
    <option>essential goods of motherhood</option>
	 
 </select>
 </fieldset>
<fieldset class="form-group">
<label for="last_name">product sub category</label>
<select name="sub-cat" id="category" style="width:98%;height:40px;box-shadow: 0px 0px 0.5px 0.5px dimgray;"><option value=" " type="text" class="form-control validate">Select Subcategory</option>

           


          </select>
</fieldset>
<fieldset class="form-group">
<label for="last_name">product picture</label>
<input type="file" class="form-control" id="prodpicture" name="prodimg">
</fieldset>
<button type="submit" class="btn btn-primary" name="modify">modify</button>
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
