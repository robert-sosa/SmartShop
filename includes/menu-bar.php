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
  

<!-- Bootstrap Core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Customizable CSS -->
<link rel="stylesheet" href="assetsFront/css/styles.css">

<!-- Fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<!-- Icons/Glyphs -->
<link rel="stylesheet" href="assetsFront/css/font-awesome.min.css">




<!-- ============================================================= HEADER ============================================================= -->
<header style="background-color:#F27A24;"> 
    <div class="d-flex justify-content-between  align-items-center">
        <div class="col-xs-12 col-sm-12 col-md-3 justify-content-start">
            <!-- ============================================================= LOGO ============================================================= -->
            <div class="logo">
                <a href="index.html">
                    <!--<img alt="logo" src="assets/images/logo.svg" width="233" height="54"/>-->
                    <!--<object id="sp" type="image/svg+xml" data="assets/images/logo.svg" width="233" height="54"></object>-->
                    <img src="assetsFront/images/logomini.png" width="300">
                </a>
            </div><!-- /.logo -->
            <!-- ============================================================= LOGO : END ============================================================= -->
        </div><!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-6 ">
            <strong>
                <ul class="nav justify-content-center ">
                    
                    <li class="nav-item ">
                      <a class="nav-link active text-white" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    

                    <?php $sql=mysqli_query($con,"select id,categoryName  from category limit 6");
                      while($row=mysqli_fetch_array($sql))
                      {
                    ?>
                      
                    <li class="nav-item">

                      	<a class="nav-link text-white" aria-current="page" href="category.php?cid=<?php echo $row['id'];?>"> <?php echo $row['categoryName'];?></a>
                    </li>
                    <?php } ?>



                    <?php if(strlen($_SESSION['login']))
            {   ?>
            		<li class="nav-item text-white" aria-current="page"><a href="#" class="link-light"><i class="icon fa fa-user"></i>Bienvenido -<?php echo htmlentities($_SESSION['username']);?></a></li>
                    <li class="nav-item text-white" aria-current="page"><a href="my-account.php" class="link-light"><i class="icon fa fa-user"></i>Mi cuenta</a></li>
            
            			<?php } ?>
            
            				<?php if(strlen($_SESSION['login'])==0)
            {   ?>
                    <li class="nav-item text-white" aria-current="page"><a href="login.php" class="link-light"><i class="icon fa fa-sign-in"></i>Iniciar sesión</a></li>
                    <?php }
                    else{ ?>
            
            		<li class="nav-item text-white" aria-current="page"><a href="logout.php" class="link-light"><i class="icon fa fa-sign-out"></i>Cerrar sesión</a></li>
            		<?php } ?>
              </a></li>



                    
                </ul> 
            </strong>                           
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 top-search-holder no-margin justify-content-end">
            <!-- ============================================================= SEARCH AREA ============================================================= -->
            <div class="search-area ">
                <form>
                    <div class="control-group">
                        <input class="search-field" placeholder="Buscar productos"/>
                        <a class="search-button" href="#" ></a>
                    </div>
                </form>
            </div><!-- /.search-area -->
            <!-- ============================================================= SEARCH AREA : END ============================================================= -->
        </div><!-- /.top-search-holder -->
       
    </div><!-- /.container -->
</header>
<!-- ============================================================= HEADER : END ============================================================= -->

<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
