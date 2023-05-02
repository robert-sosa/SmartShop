<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
			header('location:index.php');
		}else{
			$message="Product ID is invalid";
		}
	}
}


?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	    <title>MaxiMarket - Pagina principal </title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<link rel="stylesheet" href="assets/css/owl.theme.css">
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/headers.css">
        <link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="assetsFront/css/styles.css">
		
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        

		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assetsFront\images\favicon.png">
		
		<!-- FRONTEND -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Customizable CSS -->
        <link rel="stylesheet" href="assetsFront/css/styles.css">
        <link rel="stylesheet" href="assetsFront/css/colors/orange.css">
        <link rel="stylesheet" href="assetsFront/css/owl.carousel.css">
        <link rel="stylesheet" href="assetsFront/css/owl.transitions.css">
        <link rel="stylesheet" href="assetsFront/css/animate.min.css">

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Icons/Glyphs -->
        <link rel="stylesheet" href="assetsFront/css/font-awesome.min.css">





	</head>
    <body>
	<div class="wrapper">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header>
<?php include('includes/menu-bar.php');?>
</header>
<!-- ============================================== HEADER : END ============================================== -->

<!-- Mashead header-->
<div id="top-banner-and-menu">  
    <div class="container">
        <div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
            <!-- ================================== TOP NAVIGATION ================================== -->
            <?php include('includes/side-menu.php');?>
			
            <!-- ================================== TOP NAVIGATION : END ================================== -->
        </div><!-- /.sidemenu-holder -->
        <div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
		<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="assetsFront\images\sliders\mercado1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="assetsFront\images\sliders\mercado2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assetsFront\images\sliders\banner01.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
            <!-- ========================================== SECTION – HERO ========================================= -->
            <!-- ========================================= SECTION – HERO : END ========================================= -->
        </div><!-- /.homebanner-holder -->
    </div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->

<!-- ========================================= HOME BANNERS ========================================= -->
<section id="banner-holder" class="wow fadeInUp">
    <div class="container">
        <div class="col-xs-12 col-lg-6 no-margin banner">
            <a href="">
                <div class="banner-text theblue text-white">
                    <h1 class="text-white">Licores</h1>
                    <span class="tagline text-white">Conocer promociones</span>
                </div>
                <img class="banner-image" alt="" src="assetsFront/images/sliders/fotolicor.jpg" data-echo="assetsFront/images/sliders/fotolicor.jpg" />
            </a>
        </div>
        <div class="col-xs-12 col-lg-6 no-margin text-right banner">
            <a href="">
                <div class="banner-text right">
                    <h1 class="text-white">Frutas frescas</h1>
                    <span class="tagline text-white">Prductos directos del campo</span>
                </div>
                <img class="banner-image" alt="" src="assetsFront/images/sliders/frutas001.jpg" data-echo="assetsFront/images/sliders/frutas001.jpg" />
            </a>
        </div>
    </div><!-- /.container -->
</section><!-- /#banner-holder -->
<!-- ========================================= HOME BANNERS : END ========================================= -->




<!-- ========================================= SECTION – HERO : END ========================================= -->	


<!-- ============================================== SCROLL TABS ============================================== -->
<div>
            <div class="container">		 	
                    <div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
            			<div class="more-info-tab clearfix">
            			   <h3 class="new-product-title pull-left">Productos Destacados</h3>
            				<ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
            					
            
            				</ul><!-- /.nav-tabs -->
            			</div>
            
            			<div class="tab-content outer-top-xs">
            				<div class="tab-pane in active" id="all">			
            					<div class="product-slider">
            						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
            <?php
            $ret=mysqli_query($con,"select * from products");
            while ($row=mysqli_fetch_array($ret)) 
            {
            	# code...
            
            
            ?>
            
            						    	
            		<div class="item item-carousel">
            			<div class="products">
            				
            	<div class="product">		
            		<div class="product-image">
            			<div class="image">
            				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
            				<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  height="300" alt=""></a>
            			</div><!-- /.image -->			
            
            			                        		   
            		</div><!-- /.product-image -->
            			
            		
            		<div class="product-info text-left">
            			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
            			<div class="rating rateit-small"></div>
            			<div class="description"></div>
            
            			<div class="product-price">	
            				<span class="price">
            					$<?php echo htmlentities($row['productPrice']);?>			</span>
            										     <span class="price-before-discount">$<?php echo htmlentities($row['productPriceBeforeDiscount']);?>	</span>
            									
            			</div><!-- /.product-price -->
            			
            		</div><!-- /.product-info -->
										<a id="addto-cart" href="product-details.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="le-button"><i class="fa fa-shopping-cart inner-right-vs"></i> Agregar al carrito</a>

            			</div><!-- /.product -->
                  
            			</div><!-- /.products -->
            		</div><!-- /.item -->
            	<?php } ?>
            
            			</div><!-- /.home-owl-carousel -->
            					</div><!-- /.product-slider -->
            				</div>
            
            
            
            
            	<div class="tab-pane" id="books">
            					<div class="product-slider">
            						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
            		<?php
            $ret=mysqli_query($con,"select * from products where category=3");
            while ($row=mysqli_fetch_array($ret)) 
            {
            	# code...
            
            
            ?>
            
            						    	
            		<div class="item item-carousel">
            			<div class="products">
            				
            	<div class="product">		
            		<div class="product-image">
            			<div class="image">
            				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
            				<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  height="300" alt=""></a>
            			</div><!-- /.image -->			
            
            			                        		   
            		</div><!-- /.product-image -->
            			
            		
            		<div class="product-info text-left">
            			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
            			<div class="rating rateit-small"></div>
            			<div class="description"></div>
            
            			<div class="product-price">	
            				<span class="price">
            					$. <?php echo htmlentities($row['productPrice']);?>			</span>
            										     <span class="price-before-discount">$<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>
            									
            			</div><!-- /.product-price -->
            			
            		</div><!-- /.product-info -->
								<a id="addto-cart" href="product-details.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="le-button"><i class="fa fa-shopping-cart inner-right-vs"></i> Agregar al carrito</a>

            			</div><!-- /.product -->
                  
            			</div><!-- /.products -->
            		</div><!-- /.item -->
            	<?php } ?>
            	
            		
            								</div><!-- /.home-owl-carousel -->
            					</div><!-- /.product-slider -->
            				</div>
            
            
            
            		<div class="tab-pane" id="furniture">
            					<div class="product-slider">
            						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
            		<?php
            $ret=mysqli_query($con,"select * from products where category=5");
            while ($row=mysqli_fetch_array($ret)) 
            {
            ?>
            
            						    	
            		<div class="item item-carousel">
            			<div class="products">
            				
            	<div class="product">		
            		<div class="product-image">
            			<div class="image">
            				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
            				<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  height="300" alt=""></a>
            			</div>		
            
            			                        		   
            		</div>
            			
            		
            		<div class="product-info text-left">
            			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
            			<div class="rating rateit-small"></div>
            			<div class="description"></div>
            
            			<div class="product-price">	
            				<span class="price fw-bold text-primar"> $<?php echo htmlentities($row['productPrice']);?></span>
            				<span class="price-before-discount">$ <?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>
            									
            			</div>
            			
            		</div>
								<a id="addto-cart" href="product-details.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="le-button"><i class="fa fa-shopping-cart inner-right-vs"></i> Agregar al carrito</a>

            			</div>
                  
            			</div>
            		</div>
            	<?php } ?>
            		
            								</div>
            					</div>
            				</div>
            			</div>
            		</div>
            
            </div>
</div>

<!-- Basic features section-->

<?php include('includes/footer.php');?>
	
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script src="js/bootstrap.min.js"> </script> 
    <script src="js/scripts.js"> </script> 

	<!-- JavaScripts FRONTEND -->
	<script src="assetsFront/js/jquery-1.10.2.min.js"></script>
    <script src="assetsFront/js/jquery-migrate-1.2.1.js"></script>
    <script src="assetsFront/js/gmap3.min.js"></script>
    <script src="assetsFront/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="assetsFront/js/owl.carousel.min.js"></script>
    <script src="assetsFront/js/css_browser_selector.min.js"></script>
    <script src="assetsFront/js/echo.min.js"></script>
    <script src="assetsFront/js/jquery.easing-1.3.min.js"></script>
    <script src="assetsFront/js/bootstrap-slider.min.js"></script>
    <script src="assetsFront/js/jquery.raty.min.js"></script>
    <script src="assetsFront/js/jquery.prettyPhoto.min.js"></script>
    <script src="assetsFront/js/jquery.customSelect.min.js"></script>
    <script src="assetsFront/js/wow.min.js"></script>
    <script src="assetsFront/js/buttons.js"></script>
    <script src="assetsFront/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      

	<!-- For demo purposes – can be removed on production -->
	
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>