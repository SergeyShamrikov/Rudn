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
<body class="dummy">
<!--==============================header=================================-->
<header>
  <div class="main">
    <ul class="header_list wrapper">
      <li class="header_list_item">
        <h1 class="logo">
          <a href="index.html"></a>
        </h1>
      </li>
      <li class="header_list_item">
        <p class="header_text1">Наиболее прозрачный инструмент<br>
          благотворительности.
        </p>
      </li>
      <li class="header_list_item">
        <form class="search" action="#">
          <input type="text" name="search" value="Что будем искать?" onblur="if(this.value=='') this.value='Что будем искать?'" onfocus="if(this.value =='Что будем искать?' ) this.value=''">
          <button></button>
        </form>
      </li>  
      <li class="list_bottom_item">
        <ul class="social_icon_menu2">
          <li class="f_left">
            <a href="#"><img src="images/img_you_tube2.png" alt=""></a>
          </li>
          <li class="f_left">
            <a href="#"><img src="images/img_facebook2.png" alt=""></a>
          </li>
          <li class="f_left">
            <a href="#"><img src="images/img_vk2.png" alt=""></a>
          </li>
          <li class="f_left">
            <a href="#"><img src="images/img_twitter2.png" alt=""></a>
          </li>
        </ul>
      </li>  
    </ul>  
  </div> 
  <nav>
    <div class="main">
      <div class="f_left padt10">
        <img class="screw" src="images/screw_dummy.png" alt="">
      </div>
      <div class="sf-menu wrapper">
        Сайт находится в разработке. Дата запуска 23 мая
     </div>
    </div>   
    <div class="clear"></div>
  </nav>
</header>
<!--==============================content================================-->
    <li class="slides_it p_rel 4 padb14 clone" style="width: 1349px; float: left; display: block;">
      <img class="slides_it_img" src="images/flexslider_img22.png" alt="">
      <div class="p_abs flexslider_box">
        <div class="main clearfix">
          <div class="f_right flax_banner">
            <figure>
              <img src="images/logo_big2.png" alt="">
            </figure>
            <p class="flax_banner_text">Наиболее прозрачный инструмент благотворительности, при котором деньги жертвователей не расходуются, а постоянно работают на благо образования,</p>
            <a href="#" class="f_right details">Подробнее</a>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </li>
    <div id="content">
      <div class="main">
        <?php include("components/about_fond.php") ?>
      </div>
    </div>
<!--==============================footer=================================-->
    <footer>
      <div class="footer_menu_top">
          <div class="footer_main wrapper">
            <ul class="footer_menu">
              <li class="footer_menu_item">
                <a href="#">Главная </a>
              </li>
              <li class="footer_menu_item">
                <a href="#">О фонде</a>
              </li>
              <li class="footer_menu_item">
                <a href="#">Меценаты</a>
              </li>
              <li class="footer_menu_item">
                <a href="#">Сделать взнос</a>
              </li>
              <li class="footer_menu_item">
                <a href="#">Сотрудничество</a>
              </li>
              <li class="footer_menu_item">
                <a href="#">Контакты</a>
              </li>
            </ul>
          </div>  
      </div>
    </footer>
    
</body>
</html>



