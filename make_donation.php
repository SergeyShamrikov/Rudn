<!DOCTYPE html>
<html lang="en">
<head>
    <title>Сделать взнос</title>
    <?php include("blocks/head.php") ?>
</head>
<body class="leadership_page">
<!--==============================header=================================-->
    <?php include("blocks/header.php") ?>
<!--==============================content================================-->

<div id="content">
  <div class="main">
  	<section class="make_donation_box">
  		<h2 class="title2 museo_font900">Сделать взнос</h2>
  		<h3 class="title5 museo_font900">Ввод данных для перечисления средств</h3>
  		<form action="" id="make_donation" class="clearfix">
  			<div class="make_donation_left f_left">
  				<label class="label_form" for="f_name">Фамилия<sup>*</sup></label>
  				<input type="text" class="inp_style" id="f_name">
  				<label class="label_form" for="name">Имя<sup>*</sup></label>
  				<input type="text" class="inp_style" id="name">
  				<label class="label_form" for="s_name">Отчество<sup>*</sup></label>
  				<input type="text" class="inp_style" id="s_name">
  				<label class="label_form" for="amount">Сумма(руб.)<sup>*</sup></label>
  				<input type="text" class="inp_style" id="amount">
  				<label class="label_form" for="">Сделать вклад в целевой капитал<sup>*</sup></label>
  				<select name="" id="" class="inp_style">
  					<option value=""></option>
  					<option value="">Значение1</option>
  					<option value="">Значение2</option>
  					<option value="">Значение3</option>
  					<option value="">Значение4</option>
  					<option value="">Значение5</option>
  					<option value="">Значение6</option>
  					<option value="">Значение7</option>
  					<option value="">Значение8</option>
  				</select>
  				<span class="warning d_block">Если желаете, заполните, пожалуйста, поля, расположенные ниже. Эти данные не будут публиковаться.</span>
  			</div>
  			<div class="make_donation_right f_right">
  				<label class="label_form" for="email">E-mail</label>
  				<input type="text" class="inp_style" id="email">
  				<label class="label_form" for="tel">Телефон</label>
  				<input type="text" class="inp_style" id="tel">
  				<label class="label_form" for="faculty">Факультет, который Вы окончили в РУДН</label>
  				<input type="text" class="inp_style" id="faculty">
  				<label class="label_form" for="year">Год Вашего выпуска из РУДН</label>
  				<input type="text" class="inp_style" id="year">
  				<div class="clearfix">
  					<button class="details f_right">Далее</button>
  				</div>
  			</div>
  		</form>
  		<p class="make_donation_text">
  			Внимание! В отчетах о поступлениях и тратах представлены средства реально поступившие и ушедшие со счетов Фонда. Здесь не показываются долги Фонда перед поставщиками, т.е. даже если лекарство поступило ребенку, но еще не оплачено, то в отчете эту трату увидеть нельзя. Тоже самое относится к договорам на приобретение оборудование и т.п. расходы. На счетах Фонда зарезервированы средства для покрытия таких обязательств, но отчеты по ним Вы сможете увидеть только после фактической оплаты.
  		</p>
  	</section>
  </div>
</div>

<!--==============================footer=================================-->
     <?php include("blocks/footer.php") ?>
</body>
</html>