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

	    <title>SmartShop- Pagina principal </title>

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
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/ico.png">

	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>
<!-- ============================================== HEADER : END ============================================== -->

<!-- Mashead header-->
<div class="masthead">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <!-- Mashead text and app badges-->
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
				    <h1 class="display-1 font-alt mb-4">Somos una tienda de Tecnologia</h1>
                    <h6 class="display-6 fw-normal text-muted mb-5">Encontraras los ultimos smartphones, laptops y dispositivos de ultima Tecnologia</h6>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                      <!-- Descarga nuestra app
                        <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>
                        <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a>
                                           
                      -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Masthead device mockup feature-->
                <div class="masthead-device-mockup">
                    <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                <stop class="gradient-start-color" offset="0%"></stop>
                                <stop class="gradient-end-color" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="50"></circle></svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
				    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen bg-black">
                              <!-- PUT CONTENTS HERE:-->
                              <!-- * * This can be a video, image, or just about anything else.-->
                              <!-- * * Set the max width of your media to 100% and the height to-->
                              <!-- * * 100% like the demo example below.-->
							  
                              <video muted="muted" autoplay="" loop="" style=" position:absolute; max-width: 100%; height: 100%;"><source src="assets/img/demo-screen.mp4" type="video/mp4" />  </video>
							  <img src="img\portrait_black.png" style="width: 168px; height: 105%; top: -5px; left: -12px; position:absolute;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
		<div class="furniture-container homepage-container">
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
				<!-- ================================== TOP NAVIGATION ================================== -->
	<?php include('includes/side-menu.php');?>
<!-- ================================== TOP NAVIGATION : END ================================== -->
			</div><!-- /.sidemenu-holder -->	
			
			<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
				<!-- ========================================== SECTION – HERO ========================================= -->				
                <div id="hero" class="homepage-slider3">
                	<div id="owl-main" class="">
                		<div class="full-width-slider">	
                			<div class="item full-width-slider">
                			    <img src="assets/images/sliders/s1.jpg" style="height:420px;">
                				<!-- /.container-fluid -->
                			</div><!-- /.item -->
                		</div><!-- /.full-width-slider -->
                	    
                	    <div class="full-width-slider">
                			<div class="item full-width-slider">
                			    <img src="assets/images/sliders/s2.jpg" style="height:420px;">
                			</div><!-- /.item -->
                		</div><!-- /.full-width-slider -->
                
                	</div><!-- /.owl-carousel -->
                </div>
			</div>
		</div>
	</div>		
</div>	
<!-- ========================================= SECTION – HERO : END ========================================= -->	


<!-- ============================================== SCROLL TABS ============================================== -->

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
					<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary btn-lg">Agregar a carrito</a></div>
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
					<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary btn-lg">Agregar a carrito</a></div>
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
					<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary btn-lg">Agregar a carrito</a></div>
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



  <!-- Quote/testimonial aside-->
<aside class="text-center bg-gradient-primary-to-secondary">
  <div class="container px-5">
      <div class="row gx-5 justify-content-center">
          <div class="col-xl-8">
              <div class="h2 fs-1 text-white mb-4">"¡Una solución intuitiva a un problema común al que todos nos enfrentamos al momento de comprar Tecnologia, en una sola tienda!"</div>
              <img src="assets/img/tnw-logo.svg" alt="..." style="height: 3rem" />
          </div>
      </div>
  </div>
</aside>
<!-- App features section-->
<section id="features">
  <div class="container px-5">
      <div class="row gx-5 align-items-center">
          <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
              <div class="container-fluid px-5">
                  <div class="row gx-5">
                      <div class="col-md-6 mb-5">
                          <!-- Feature item-->
                          <div class="text-center">
                              <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                              <h3 class="font-alt">Smartphones</h3>
                              <p class="text-muted mb-0">Vendemos smartphones de las marcas mas exclusivas y tecnologicas del mundo</p>
                          </div>
                      </div>
                      <div class="col-md-6 mb-5">
                          <!-- Feature item-->
                          <div class="text-center">
                              <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                              <h3 class="font-alt">Camaras</h3>
                              <p class="text-muted mb-0">Contamos con camaras reflex, compactas y profesionales</p>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 mb-5 mb-md-0">
                          <!-- Feature item-->
                          <div class="text-center">
                              <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                              <h3 class="font-alt">Ideal para un regalo</h3>
                              <p class="text-muted mb-0">Si deseas te podemos enviar el producto decorado gratis!</p>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <!-- Feature item-->
                          <div class="text-center">
                              <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                              <h3 class="font-alt">Pagos Seguros</h3>
                              <p class="text-muted mb-0">Ofrecemos pagos seguros y confiables</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 order-lg-0">
              <!-- Features section device mockup-->
              <div class="features-device-mockup">
                  <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                      <defs>
                          <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                              <stop class="gradient-start-color" offset="0%"></stop>
                              <stop class="gradient-end-color" offset="100%"></stop>
                          </linearGradient>
                      </defs>
                      <circle cx="50" cy="50" r="50"></circle></svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                      <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                      <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                  <div class="device-wrapper">
                      <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                          <div class="screen bg-black">
                              <!-- PUT CONTENTS HERE:-->
                              <!-- * * This can be a video, image, or just about anything else.-->
                              <!-- * * Set the max width of your media to 100% and the height to-->
                              <!-- * * 100% like the demo example below.-->
                              <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%"><source src="assets/img/demo-screen.mp4" type="video/mp4" /></video>
							  <img src="img\portrait_black.png" style="width: 168px; height: 105%; top: -5px; left: -12px; position:absolute;" alt="">
							</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Basic features section-->
<section class="bg-light">
  <div class="container px-5">
      <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
          <div class="col-12 col-lg-5">
              <h2 class="display- lh-1 mb-4">Nos arriesgamos a cambiar el mundo!</h2>
              <p class="display-6 lead fw-normal text-muted mb-5 mb-lg-0">SmarthShop es un proyecto ambicioso que quiere revolucionar la manera de comprar Tecnologia</p>          </div>
          <div class="col-sm-8 col-md-6">
			
		 
	    <section class="section featured-product inner-xs wow fadeInUp">
		<h4 class="section-title">Drones</h4>
		<div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
			<?php
$ret=mysqli_query($con,"select * from products where category=11");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
				<div class="item">
					<div class="products">

												<div class="product">
							<div class="product-micro">
								<div class="row product-micro-row">
									<div class="col col-xs-6">
										<div class="product-image">
											<div class="image">
												<a href="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-lightbox="image-1" data-title="<?php echo htmlentities($row['productName']);?>">
													<img data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" height="174" alt="">
													<div class="zoom-overlay"></div>
												</a>					
											</div><!-- /.image -->

										</div><!-- /.product-image -->
									</div><!-- /.col -->
									<div class="col col-xs-6">
										<div class="product-info">
											<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
											<div class="rating rateit-small"></div>
											<div class="product-price">	
												<span class="price">
													$ <?php echo htmlentities($row['productPrice']);?>
												</span>

											</div><!-- /.product-price -->
											<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary btn-lg">Agregar a carrito</a></div>
										</div>
									</div><!-- /.col -->
								</div><!-- /.product-micro-row -->
							</div><!-- /.product-micro -->
						</div>


											</div>
				</div><?php } ?>
							</div>
		</section>

          </div>
      </div>
  </div>
</section>

         


<!-- ============================================== TABS ============================================== -->
<div class="container">		 
    <div class="sections prod-slider-small outer-top-small">
				<div class="row">
					<div class="col-md-6">
	                   <section class="section">
	                   	<h3 class="section-title">Portatiles</h3>
	                   	<div class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme" data-item="2">
	   
<?php
$ret=mysqli_query($con,"select * from products where category=8");
while ($row=mysqli_fetch_array($ret)) 
{
?>



		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"   height="300"></a>
			</div><!-- /.image -->			                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$ <?php echo htmlentities($row['productPrice']);?>			</span>
										     <span class="price-before-discount">$<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>
									
			</div>
			
		</div>
					<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary btn-lg">Agregar a carrito</a></div>
			</div>
			</div>
		</div>
<?php }?>

	
			                   	</div>
	                   </section>
					</div>
					<div class="col-md-6">
						<section class="section">
							<h3 class="section-title">Monitores</h3>
		                   	<div class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme" data-item="2">
	<?php
$ret=mysqli_query($con,"select * from products where category=10");
while ($row=mysqli_fetch_array($ret)) 
{
?>



		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  height="300"></a>
			</div><!-- /.image -->			                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$ <?php echo htmlentities($row['productPrice']);?>			</span>
										     <span class="price-before-discount">$<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>
									
			</div>
			
		</div>
					<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary btn-lg">Agregar a carrito</a></div>
			</div>
			</div>
		</div>
<?php }?>

		
	
				                   	</div>
	                   </section>

					</div>
				</div>
			</div>

</div>			
<!-- ============================================== TABS : END ============================================== -->









<!-- Call to action section-->
<section class="cta">
  <div class="cta-content">
      <div class="container px-5">
          <h2 class="text-white display-1 lh-1 mb-4">
              No dudes en
              <br />
              Contactarnos
          </h2>
          <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="" >+57 3214567891</a>
      </div>
  </div>
</section>
<!-- App badge section-->
<section class="bg-gradient-primary-to-secondary" id="download">
  <div class="container px-5">
      <h1 class="text-center text-white font-alt mb-4">Tambien contamos con nuestra propia APP!</h1>
      <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
          <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>
          <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a>
      </div>
  </div>
</section>


  <div class="container">
    <style>
        footer{
	        width: 100%;
	        height: 50px;
	        bottom: 0;
        }
    </style> 

		

	


<?php include('includes/brands-slider.php');?>
</div>
</div>
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

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
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