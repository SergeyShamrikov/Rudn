<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta name = "format-detection" content = "telephone=no" />
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
   <script type="text/javascript" src="js/jquery.flexslider.js"></script>
	 <script type="text/javascript" src="js/owl.carousel.js"></script>
	 <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	 <script src="js/script.js"></script>
	 
	<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
    <!--[if lt IE 9]>
   	<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
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