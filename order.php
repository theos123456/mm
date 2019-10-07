<?php 
$now=date("Y-m-d");

?>

<?php
@session_start();
$conn=mysqli_connect('localhost','root','','mothezhub') or die('Connection fail');

	
$product_id = $_GET['product_id'];

$SelSql = "SELECT * FROM `product` WHERE product_id = $product_id";

$res = mysqli_query($conn, $SelSql);

$r = mysqli_fetch_assoc($res);



if(isset($_POST['order'])){

    
  
$now=date("Y-m-d");
  



$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];

$quantity=$_POST['quantity'];
$client_email=$_POST['client_email'];
$client_phone=$_POST['client_phone'];
$client_names=$_POST['client_names'];

$total=($product_price*$quantity);

$qry = "INSERT INTO `mothezhub`.`order_detail` (`order_id`, `product_id`,`quantity`, `client_email`,`client_phone`,`client_names`,`order_date`,`total`) VALUES (NULL, '$product_id','$quantity','$client_email','$client_phone','$client_names','$now','$total')";


$res1 = mysqli_query($conn, $qry);

#$UpdateSql = "UPDATE `employee` SET fname='$fname', lname='$lname',  email='$email',gender='$gender', password='$password' position='$position', username='$username',  department='$department',phone='$phone',      WHERE id=.$id";


if($res1){
	

	header( 'Location: sucess.php' ) ;
}else{
	echo "<div class='alert alert-danger'>Unable to make order. Please try again.</div>";
}

}

?>
















<!DOCTYPE html>
<html lang="en">
  <head>

  <script>
        var x = 0;
        var y = 0;
        var z = 0;
        function calc(obj) {
            var e = obj.id.toString();
            if (e == 'tb1') {
                x = Number(obj.value);
                y = Number(document.getElementById('tb2').value);
            } else {
                x = Number(document.getElementById('tb1').value);
                y = Number(obj.value);
            }
            z = x * y;
            document.getElementById('total').value = z;
            document.getElementById('update').innerHTML = z;
        }
    </script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <?php include 'head.php';?>
  </head>
  <body class="goto-here">
  <?php include 'header.php';?>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	   <?php include 'nav.php';?>
	  </nav>
    <!-- END nav -->


    <!-- Default form subscription -->

    <div class="container">
  <div class="row">
  <div class="col-lg-3 col-sm-12">
  </div>
    
    <div class="col-lg-6 col-sm-12">
 
    <form  name="addem"  id="addem" method="post" class="form-group " >
    <div class="form-group">
        <label for="inputEmail">date</label>
        <input name="order_date" type="date" class="form-control"  value="<?php echo "$now"; ?>" id="inputEmail" readonly>
    </div>

    <div class="form-group">
        <label for="inputEmail">Product</label>
        <input name="product_name" type="text" class="form-control"  value="<?php echo $r['product_name']; ?>" id="inputEmail" readonly>
    </div>
    <div class="form-group">
        <label for="inputEmail">Price</label>
        <input  id="tb1"  onkeyup="calc(this)" type="text"   data-price="<?php $product_price ?>"  name="product_price" class="price form-control"  value="<?php echo $r['product_price']; ?>" id="inputEmail" readonly>
    </div>

    <?php if ($r['product_reduction'] !=0) :   ?> 

    <div class="form-group">
        <label for="inputEmail">reduction</label>
        <input name="product_name" type="text" class="form-control"  value="<?php echo $r['product_reduction']; ?>" id="inputEmail" readonly>
    </div>

    <?php  endif; ?>

    <div class="form-group">
        <label for="inputEmail">Quantity</label>
        <input  id="tb2"  onkeyup="calc(this)" name="quantity"   type="text" class="form-control"   id="inputEmail" placeholder="3" required>
    </div>
    <div class="form-group">
    <label for="inputEmail">Total:</label>
    
    <span id="update" class="label bg-primary text-light label-danger">0.0</span> FRW
    </div>
    <input type="hidden" id="total" name="total" value="0" />
    


    <div class="form-group">
        <label for="inputEmail"> Your Email</label>
        <input name="client_email" type="email" class="form-control"   id="inputEmail" placeholder="Email" required>
    </div>

    <div class="form-group">
        <label for="inputEmail">Your names</label>
        <input name="client_names" type="text" class="form-control"   id="inputEmail" placeholder="Yves Himbaza" required>
    </div>

    <div class="form-group">
        <label for="inputEmail">Your phone number</label>
        <input name="client_phone" type="text" class="form-control"   id="inputEmail" placeholder="0784436600" required>
    </div>

    
    <button type="submit"  name="order"class="btn btn-primary">Press order</button>
</form>

</div>
<div class="col-lg-3 col-sm-12">
  </div>


</div>
</div>




    
    <footer class="ftco-footer bg-light ftco-section">
    <?php include 'footer.php';?>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  
    
  </body>
</html>