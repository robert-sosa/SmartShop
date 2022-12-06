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
  


<header class="p-5 d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom shadow-sm " >
    
    

    <ul class="nav nav-pills navbar-expand-lg h3">
      

		<li class="nav-item"><a href="index.php" class="nav-link active">Inicio</a></li>

		<?php $sql=mysqli_query($con,"select id,categoryName  from category limit 6");
while($row=mysqli_fetch_array($sql))
{
    ?>

		<li class="nav-item">
			<a href="category.php?cid=<?php echo $row['id'];?>"> <?php echo $row['categoryName'];?></a>
		</li>
		<?php } ?>

		
                    

<?php if(strlen($_SESSION['login']))
    {   ?>
			<li class="nav-item"><a href="#"><i class="icon fa fa-user"></i>Bienvenido -<?php echo htmlentities($_SESSION['username']);?></a></li>
				<?php } ?>

			<li class="nav-item"><a href="my-account.php"><i class="icon fa fa-user"></i>Mi cuenta</a></li>
					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
            <li class="nav-item"><a href="login.php"><i class="icon fa fa-sign-in"></i>Iniciar sesión</a></li>
            <?php }
            else{ ?>
	
			<li class="nav-item"><a href="logout.php"><i class="icon fa fa-sign-out"></i>Cerrar sesión</a></li>
			<?php } ?>
      </a></li>
    </ul>
  </header>

