<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head text-bg-primary"><i class="icon fa fa-align-justify fa-fw"></i> Categorias</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
  
        <ul class="nav">
            <li class="dropdown menu-item h4">
              <?php $sql=mysqli_query($con,"select id,categoryName  from category");
while($row=mysqli_fetch_array($sql))
{
    ?>
                <a href="category.php?cid=<?php echo $row['id'];?>" class="dropdown-toggle"><i class=""></i>
                <?php echo $row['categoryName'];?></a>
                <?php }?>
                        
</li>

</ul>
    </nav>
</div>