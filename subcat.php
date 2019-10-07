---<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'head.php';?>
  </head>
  <body class="goto-here">
  <?php include 'order1.php';?>
  <?php include 'header.php';?>
  

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<?php include 'nav.php';?>
	  </nav>
    <!-- END nav -->
	
    <div class="hero-wrap hero-bread" style="background-image: url('images/baby.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Collection Products</h1>
          </div>
        </div>
      </div>
    </div>
	<?php include 'connection.php';
   if(isset($_GET['sub']))
   {
	$sel2 = mysqli_query($con, "SELECT * FROM sub_category WHERE sub_cathe_name='".$_GET['sub']."'");
    
	//$sel1 = mysqli_query($con, "SELECT * FROM publication WHERE district='".$_GET['loc']."'");
	$fetch = mysqli_fetch_array($sel2);
		
		$id=$fetch['sub_cath_id'];
	$sel3 = mysqli_query($con, "SELECT * FROM category,sub_category,product WHERE product.sub_cath_id=sub_category.sub_cath_id and category.cathe_id= sub_category.cathe_id and sub_category.sub_cath_id='$id'");
		
	while($fetch1 = mysqli_fetch_array($sel3))
		{

  ?>
    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8 col-lg-10 order-md-last">
    				<div class="row">
		    			<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
		    				<div class="product">
		    					<a href="#" class="img-prod"><img class="img-fluid" src="<?php echo $fetch1['product_picture']; ?>" alt="Colorlib Template">
		    						<span class="status"><?php echo $fetch1['product_reduction']; ?>%</span>
		    						<div class="overlay"></div>
		    					</a>
		    					<div class="text py-3 px-3">
		    						<h3><a href="#"><?php echo $fetch1['product_name']; ?></a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
				    						<p class="price"><span class="mr-2 price-dc">RWF <?php echo $fetch1['product_price']; ?></span><span class="price-sale">$80.00</span></p>
				    					</div>
				    					<div class="rating">
			    							<p class="text-right">
			    								<a href="#"><span class="ion-ios-star-outline"></span></a>
			    								<a href="#"><span class="ion-ios-star-outline"></span></a>
			    								<a href="#"><span class="ion-ios-star-outline"></span></a>
			    								<a href="#"><span class="ion-ios-star-outline"></span></a>
			    								<a href="#"><span class="ion-ios-star-outline"></span></a>
			    							</p>
			    						</div>
			    					</div>
			    					<p class="bottom-area d-flex px-3">
		    							<a href="#" class="add-to-cart text-center py-2 mr-1"><span>By via watsap <i class="ion-ios-add ml-1"></i></span></a>
		    							
										<a href="order.php?product_id=<?php echo $fetch1["product_id"]; ?>" data-toggle="modal"  class="buy-now text-center py-2">By online <span><i class="ion-ios-cart ml-1"></i></span></a>
		    						
										
									
									
									
									</p>
		    					</div>
		    				</div>
		    			</div>
		  }  		<?php
		}
	}
		?>
		    		</div>
		    		<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div>
		    	</div>

		    	<?php include 'sidebar.php';?>
    		</div>
    	</div>
    </section>

    <footer class="ftco-footer bg-light ftco-section">
	<?php include 'footer.php';?>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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