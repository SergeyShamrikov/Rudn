<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <?php include("blocks/head.php") ?>
</head>
<body class="dummy">
<!--==============================header=================================-->
<header>
 <div class="header_bottom main wrapper">
        <div class="logotip f_left">
          <h1 class="logo">
            <a href="index.html"></a>
          </h1>
        </div>
        <div class="header_text f_left">
          <p class="header_text1">Наиболее прозрачный инструмент<br>
          благотворительности.</p>
        </div>
        <div class="header_search f_left">
          <form class="search" action="#">
          <input type="text" name="search" value="Что будем искать?" onblur="if(this.value=='') this.value='Что будем искать?'" onfocus="if(this.value =='Что будем искать?' ) this.value=''"><button></button>
          </form>
        </div>
        
        <div class="header_text_right f_left">
          <ul class="social_icon_menu2 clearfix">
              <li class="social_icon_menu_item2">
                <a class="soc" href="#"><img src="images/img_you_tube2.png" alt=""></a>
              </li>
              <li class="social_icon_menu_item2">
                <a class="soc" href="#"><img src="images/img_facebook2.png" alt=""></a>
              </li>
              <li class="social_icon_menu_item2">
                <a class="soc" href="#"><img src="images/img_vk2.png" alt=""></a>
              </li>
              <li class="social_icon_menu_item2">
                <a class="soc" href="#"><img src="images/img_twitter2.png" alt=""></a>
              </li>
            </ul>
        </div>  
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
    <div class="dammy_img-main p_rel 4 padb14">
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
    </div>
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



