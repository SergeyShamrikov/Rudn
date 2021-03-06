<!DOCTYPE html>
<html lang="en">
<head>
    <title>Реквизиты</title>
    <?php include("blocks/head.php") ?>
	 
</head>
<body>
<!--==============================header=================================-->
    <?php include("blocks/header.php") ?>
<!--==============================content================================-->
    <div id="content">
      <div class="main">

        <?php include("components/make_donation.php") ?>
       <?php include("components/menu_content.php") ?>
       <h4 class="title2 museo_font900 banking_title">Реквизиты</h4>
       <div class="banking_box wrapper mb2">
          <div class="f_left al_left bankdetails_box">
            <h4 class="title6">Платежные реквизиты для перечисления денежных средств в ЕВРО: </h4>
            <ul class="banking_details_list">
              <li>BANK NAME: Sberbank (Head office-all branches and offices in Russia) Moscow </li>
              <li>SWIFT: SABR RU MM </li>
              <li>BENIFICIARY ACCOUNT: 40503978638110200323 </li>
              <li>BENIFICIARY: Peoples’ Friendship University of Russia </li>
              <li>ADDRESS: Miklukho-Maklay Str., 6, Moscow, Russia, 117198 </li>
              <li>CORRESPONDENT ACCOUNT: № 10094987261000; Deutsche Bank AG, Frankfurt am Main (SWIFT-DEUTDEFF) </li>
            </ul>
            <span class="d_block  payment_description">В назначении платежа обязательно указать договор пожертвования № 2 от 01.02.2014 </span>
            <a href="#javascript:;" class="details printer_btn d_in-block">Печать</a>
          </div>
         <img src="images/banking_details1.png" class="f_right banking_img-1" alt="picture">
       </div>

       <div class="banking_box wrapper mb2">
          <div class="f_left al_left bankdetails_box">
            <h4 class="title6">Платежные реквизиты для перечисления денежных средств в  Долларах США: </h4>
            <ul class="banking_details_list">
              <li>ANK NAME: Sberbank (Head office-all branches and offices in Russia) Moscow  </li>
              <li>SWIFT: SABR RU MM </li>
              <li>BENIFICIARY ACCOUNT: 40503840038110200323  </li>
              <li>BENIFICIARY: Peoples’ Friendship University of Russia </li>
              <li>ADDRESS: Miklukho-Maklay Str., 6, Moscow, Russia, 117198 </li>
              <li>CORRESPONDENT ACCOUNT: № 8900057610 in the Bank of New York Mellon, New York (SWIFT – IRVT US 3N)  </li>
            </ul>
            <span class="d_block  payment_description">В назначении платежа обязательно указать договор пожертвования № 2 от 01.02.2014 </span>
            <a href="#javascript:;" class="details d_in-block">Печать</a>
          </div>
         <img src="images/banking_details1.png" class="f_right banking_img-2" alt="picture">
       </div>

       <div class="banking_box_last wrapper">
          <div class="f_left al_left bankdetails_box">
            <h4 class="title6">Платежные реквизиты для перечисления денежных средств в Рублях РФ: </h4>
            <ul class="banking_details_list">
              <li>Банк получателя: В Отделение 1 Москва</li>
              <li>ИНН 7728073720 </li>
              <li>КПП 772801001</li>
              <li>Получатель: УФК по г.Москве (л/сч 20736X13430 РУДН)</li>
              <li>БИК 044583001</li>
              <li>Счет № 40501810600002000079</li>
              <li>КБК 00000000000000000180</li>
              <li>ОКТМО 45905000 </li>
            </ul>
            <span class="d_block  payment_description">В назначении платежа обязательно указать договор пожертвования № 2 от 01.02.2014 </span>
            <a href="#javascript:;" class="details d_in-block">Печать</a>
          </div>
         <img src="images/banking_details1.png" class="f_right banking_img-3" alt="picture">
       </div>
      </div>
    </div>
<!--==============================footer=================================-->
     <?php include("blocks/footer.php") ?>
    
  </body>
</html>