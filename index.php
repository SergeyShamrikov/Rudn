<!DOCTYPE html>
<html lang="en">
<head>
    <title>Главная</title>
    <?php include("blocks/head.php") ?>
</head>
<body>
<!--==============================header=================================-->
   	<?php include("blocks/header.php") ?>
<!--==============================content================================-->
    <?php include("components/flaxslider.php") ?>
    

    <div id="content">
    <div class="main">
      <?php include("components/patrons.php") ?>
    </div>
      <?php include("components/news.php") ?>
    <div class="main">
      <?php include("components/about_fond.php") ?>
    </div>
    </div>
<!--==============================footer=================================-->
    <?php include("blocks/footer.php") ?>
    
</body>
</html>