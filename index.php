<?php

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

function dump($data, $hide = false, $die = false){
	echo '<pre'. ($hide ? ' style="display:none!important;"' : '') .'>'. print_r($data, true) .'</pre>';
	if($die) die;
}

function clear($str){
	return trim(strip_tags($str));
}
if(!empty($_POST['submit_feedback'])){
	$mail = new \PHPMailer\PHPMailer\PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->Encoding = 'base64';

	$post = $_POST;
	$name = clear($post['landing_name']);
	$phone = clear($post['landing_phone']);
	$email = clear($post['landing_email']);
	$city = clear($post['landing_city']);
	$addr = clear($post['landing_address']);
	$ind = clear($post['landing_cap']);
	$time = date('d.m.Y H:i:s');
	$ip = $_SERVER['REMOTE_ADDR'];
	$body = "
		<p>Список заполненных полей:</p>
		Имя: {$name}<br>
		Телефон: {$phone}<br>
		E-mail:  {$email}<br>
		Город: {$city}<br>
		Адрес: {$addr}<br>
		Индекс: {$ind}<br>
		Дата и время отправки формы: {$time}<br><br>
		IP адрес: <a href='https://tendence.ru/tools/whois/$ip'>$ip</a>
	";
	try{

		//SMTP настройки
		
//		$mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->isSMTP();
		$mail->Host       = '';
		$mail->SMTPAuth   = true;
		$mail->Username   = '';
		$mail->Password   = '';
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
		$mail->Port       = 465;
		

		$mail->setFrom('', '');
		$mail->addAddress('');
		$mail->isHTML(true);
		$mail->Subject = 'Заказ с сайта';
		$mail->Body = $body;
		$mail->send();
		$json['success'] = true;
	}catch(Exception $e){
		$json['success'] = false;
	}
	echo json_encode($json);
	die;
}
?>
<!DOCTYPE html>
<html>
<head>

	<!-- Google Tag Manager -->
	<script>(function (w, d, s, l, i, cid) {
			w[l] = w[l] || [];
			w.pclick_client_id = cid;
			w[l].push({
				'gtm.start':
						new Date().getTime(), event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
					'//www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-P23G9N', '86516');</script>
	<!-- End Google Tag Manager -->

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="generator" content="Mobirise v4.12.3, mobirise.com">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="shortcut icon" href="assets/images/logo-ab-generator-122x89.png" type="image/x-icon">
	<meta name="description" content="">


	<title>Gymform AB Generator | Бестселлер в аэробной тренировке</title>
	<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="assets/tether/tether.min.css">
	<link rel="stylesheet" href="assets/socicon/css/styles.css">
	<link rel="stylesheet" href="assets/web/assets/gdpr-plugin/gdpr-styles.css">
	<link rel="stylesheet" href="assets/dropdown/css/style.css">
	<link rel="stylesheet" href="assets/theme/css/style.css">
	<link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
	<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
	<link rel="stylesheet" href="assets/style.css">
	<script src="https://kit.fontawesome.com/adb3ad8199.js" crossorigin="anonymous"></script>
	<style>
		.big-close {
			border-radius: 100px;
			cursor: pointer;
			padding: 0.4rem 1.5rem;
    		display: -webkit-inline-flex;
			background-color: #1f3c7d;
			margin-left: auto;
			margin-right: auto;
			width: 25%;
			margin-bottom: 15px;
			
		}
		.big-button-text {
			font-family: 'Heebo', sans-serif;
    		font-size: 1.1rem;
			color: #ffffff;
			margin-left: auto;
			margin-right: auto;
		}
		.modal-content{
			border-radius: 25px;
		}
		.modal-header {
			background-color: #1f3c7d;
			
		}
		.modal-title{
			font-family: 'Heebo', sans-serif;
    		font-size: 1.1rem;
			color: #ffffff;
		}
		.modal-body{
			color: #1f3c7d !important;
			font-family: 'Heebo', sans-serif;
    		font-size: 1.1rem;
		}
		.btn-custom{
			background: rgba(2, 192, 52, 1.00) !important;
			color: white !important;
		}

		.list-custom{
			list-style: none !important;
			padding-left: 0 !important;
			margin-left: 0 !important;
		}

		.list-custom i{
			color: #1f3c7d !important;
		}

		.cid-rVtgMjlc3k{
			padding-bottom: 200px !important;
		}

		.footer-top{
			margin-top: -200px !important;
			padding: 50px 0;
			background: rgba(102, 248, 68, 0.6);
		}

		@media screen and (max-width: 768px){
			.cid-rVtgMjlc3k{
				padding-bottom: 270px !important;
			}

			.footer-top{
				margin-top: -265px !important;
				padding: 20px !important;
			}
		}

		.footer-top .container{
			width: 80%;
			margin: 0 auto;
		}

		.footer-top .container .row-footer{
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			align-items: center;
			flex-wrap: wrap;
		}

		.footer-top .container .row-footer .col-footer{
			width: 25%;
			color: white;
			text-align: center !important;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}

		.footer-top .container .row-footer .col-footer h4{
			font-size: 14px;
			font-family: Arial, Helvetica, sans-serif;
		}

		.footer-top .box-image{
			width: 40px !important;
			margin-bottom: 10px;
		}

		.footer-top .box-image img{
			width: 100%;
		}

		@media screen and (max-width: 992px){
			.footer-top .container .row-footer .col-footer{
				width: 50%;
			}
		}

		@media screen and (max-width: 768px){
			.footer-top .container .row-footer .col-footer{
				width: 50%;
			}

			.footer-top .container .row-footer .col-footer h4{
				font-size: 12px;
				font-family: Arial, Helvetica, sans-serif;
			}
		}

		/*========================================== END FOOTER TOP WITH ICONS======================= */
	</style>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
	<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52QCX2D"
			height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="navbar-dropdown align-items-center navbar-fixed-top" style="text-align: center; font-family: 'Poppins', sans-serif; font-size: 0.9rem; font-weight: bold; background-color:#1F3C7D;">
		<span style="color: white; line-height: 1rem;">  <a style="color:#05A2BC" href="tel:08712226850"><strong style=" color: white;">&nbsp;ГАРАНТИЯ ВОЗВРАТА 30 ДНЕЙ!</strong></a> 
</span>
</div>

<section class="menu cid-rVtgNTeVB6" once="menu" id="menu1-2">



	<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<div class="hamburger">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</button>
		<div class="menu-logo">
			<div class="navbar-brand">
                <span class="navbar-logo">
                    
                         <img src="assets/images/logo-ab-generator-122x89.png" alt="GymForm AB Generator" title="GymForm AB Generator" style="height: 3.8rem;">
                    
                </span>

			</div>
		</div>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
				<li class="nav-item">
					<a class="nav-link link text-white display-4" href="#header3-4">

						Особенности
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link link text-white display-4" href="#header7-5">

						Видео
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link link text-white display-4" href="#testimonials1-f">Отзывы</a>
				</li>



			</ul>
			<div class="navbar-buttons mbr-section-btn">
				<a class="btn btn-sm btn-primary display-4" href="#form4-12a">
					<span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>

					Купить сейчас
				</a>
			</div>
		</div>
	</nav>
</section>

<section class="cid-rVtgMjlc3k mbr-fullscreen mbr-parallax-background" id="header2-1">



	<div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);"></div>

	<div class="container align-center">
		<div class="row justify-content-md-center">
			<div class="mbr-white col-md-10">
				<h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">&nbsp;</h1>
				<h1 class="mbr-section-title align-left mbr-bold pb-3 mbr-fonts-style display-1"><span style=" color: #66f844; font-size: 2.8rem; line-height: 2.6rem;">Лучший тренажер для аэробной тренировки <br> Gymform Ab Generator<br>
                    <small style="font-weight: lighter; "> Ограниченное предложение!
                    </small> </span>
					<br>
				</h1>



				<h3 style="font-size: 1.2rem; line-height: 1.5rem;" class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-7">

					<img src="assets/images/correcto2.png" style="height: 20px;">
					Лидер продаж в Европе в категории «Домашний тренажер»
					<br>

					<img src="assets/images/correcto2.png" style="height: 20px;">
					Быстрый результат
					<br>

					<img src="assets/images/correcto2.png" style="height: 20px;">
					Занимает мало места. Легко хранить
					<br>


					<img src="assets/images/correcto2.png" style="height: 20px;">
					Оптимальное сочетание кардио-нагрузки и общеукрепляющих упражнений
					<br>

					<img src="assets/images/correcto2.png" style="height: 20px;">
					В комплекте план диеты и многофункциональный компьютер
				</h3>

				<p class="mbr-text pb-3 mbr-fonts-style display-5" style="line-height: 2rem;">
					<strong style="font-size: 2.7rem; color: #66f844 !important;"> 15990₽ &nbsp;&nbsp;
						<strike style="color: red;">
							<span style="color: white;">25990₽   </span>
						</strike><em style="color: red; font-size: 2.7rem;">&nbsp;&nbsp; Экономия -10000₽</strong>
					</em>
					<br>

					<strong style="font-size: 1.5rem; ">+
						<i class="fas fa-truck"></i>
						Бесплатная доставка
					</strong>
					<br>
				</p>
				<div class="mbr-section-btn">
					<a class="btn btn-md btn-danger display-5" href="#form4-12a">
						<span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>
						Купить сейчас
					</a>
					<br>
					<span style="font-size: 1rem; font-family: 'Roboto', sans-serif;">Надежная доставка, с соблюдением норм безопасности в связи с пандемией </span>
					<br>
					<span class="mbr-text pb-3 mbr-fonts-style display-5 align-left" class="navbar-logo" style="text-align: left !important; ">

          <img src="assets/images/logo2.png" alt="GymForm AB Booster+" title="GymForm AB Booster+" style="height: 7rem; text-align: left !important;">

        </span>

					<br>
					<span style="font-size: 1rem; font-family: 'Roboto', sans-serif; color: yellow;">Гарантия качества продукции от российской компании с опытом 30 лет на рынке </span>
				</div>




			</div>
		</div>
	</div>

</section>
<section class="footer-top">
	<div class="container">
		<div class="row-footer">
			<div class="col-footer">
				<div class="box-image">
					<img src="assets/images/truck.png" alt="">
				</div>
				<h4>Доставка от
					<br>
					2 до 5 дней
				</h4>
			</div>
			<div class="col-footer">
				<div class="box-image">
					<img src="assets/images/security.png" alt="">
				</div>
				<h4>Лучшая цена

					<br>
					гарантирована
				</h4>
			</div>
			<div class="col-footer">
				<div class="box-image">
					<img src="assets/images/money.png" alt="">
				</div>
				<h4>30-дневная гарантия

					<br>
					возврата денег
				</h4>
			</div>
			<div class="col-footer">
				<div class="box-image">
					<img src="assets/images/call.png" alt="">
				</div>
				<h4>Клиентский

					<br>
					сервис
				</h4>
			</div>
		</div>
	</div>
</section>
<section class="cid-rVz1gNmlIG" id="image3-m">



	<figure class="mbr-figure container">
		<div class="image-block" style="width: 44%;">
			<img src="https://media.giphy.com/media/R4kkJvD3pSliFSQfUM/giphy.gif" width="1400" alt="GymForm AB Generator" title="">

		</div>
	</figure>
</section>

<section class="mbr-section article content9 cid-rVtHi4lLkp" id="content9-3">



	<div class="container">
		<div class="inner-container" style="width: 100%;">
			<hr class="line" style="width: 10%;">
			<div class="section-text align-center mbr-fonts-style display-5">
				AB Generator – это домашний тренажер со множеством функций, который задействует все мышцы тела, поддерживая их в тонусе.
				<span style="font-weight: bold;">Тренажёр помогает сгонять жир и делать тело более здоровым, крепким и красивым.</span>
				Это оптимальное сочетание кардио-нагрузки и общеукрепляющих упражнений.
			</div>
			<hr class="line" style="width: 10%;">
		</div>
	</div>
</section>

<section class="header3 cid-rVtHGoXeYD" id="header3-4">




	<div class="container">
		<div class="media-container-row">
			<div class="mbr-figure" style="width: 100%;">
				<img src="assets/images/ab-gen-1014x918.jpg" alt="GymForm AB Generator" title="">
			</div>

			<div class="media-content">
				<h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1">Тренировка дома, легко и эффективно</h1>

				<div class="mbr-section-text mbr-white pb-3 ">
					<p class="mbr-text mbr-fonts-style display-5">
						Сочетание упражнений на тренажере с рассчитанной по калориям диетой, дают видимый результат, сжигая жир и укрепляя все тело.
						<br>
					</p>
				</div>
				<div class="mbr-section-btn">
					<a class="btn btn-md btn-primary display-5" href="#form4-12a">
						<span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>
						Купить сейчас
					</a>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="mbr-gallery gallery5 cid-rVtV2qDmpt" id="gallery5-6">




	<div class="container">


		<div class="row" id="gallery" data-toggle="modal" data-target="#carouselModal">
			<div class="col-sm-6 col-md-4 col-lg-3 item gallery-image">
				<div class="item-wrapper">
					<img class="w-100" src="assets/images/1-510x510.jpg" alt="" data-target="#mbrCarousel" data-slide-to="0" title="">
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 item gallery-image">
				<div class="item-wrapper">
					<img class="w-100" src="assets/images/2-510x510.jpg" alt="" data-target="#mbrCarousel" data-slide-to="1" title="">
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 item gallery-image">
				<div class="item-wrapper">
					<img class="w-100" src="assets/images/3-510x510.jpg" alt="" data-target="#mbrCarousel" data-slide-to="2" title="">
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 item gallery-image">
				<div class="item-wrapper">
					<img class="w-100" src="assets/images/4-510x510.jpg" alt="" data-target="#mbrCarousel" data-slide-to="3" title="">
				</div>
			</div>
		</div>

		<div class="modal mbr-slider fade" id="carouselModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<div id="mbrCarousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="assets/images/background1.jpg" alt="">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="assets/images/background2.jpg" alt="">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="assets/images/background3.jpg" alt="">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="assets/images/background4.jpg" alt="">
								</div>
							</div>
							<ol class="carousel-indicators">
								<li data-target="#mbrCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#mbrCarousel" data-slide-to="1"></li>
								<li data-target="#mbrCarousel" data-slide-to="2"></li>
								<li data-target="#mbrCarousel" data-slide-to="3"></li>
							</ol>
							<a role="button" href="" class="close" data-dismiss="modal" aria-label="Close">
							</a>
							<a class="carousel-control-prev carousel-control" href="#mbrCarousel" role="button" data-slide="prev">
								<span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
								<span class="sr-only">Precedente</span>
							</a>
							<a class="carousel-control-next carousel-control" href="#mbrCarousel" role="button" data-slide="next">
								<span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
								<span class="sr-only">Successivo</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="header7 cid-rVtJaPp4B1" id="header7-5">




	<div class="container">
		<div class="media-container-row">

			<div class="media-content align-right">
				<h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1">На выбор 5 разных уровней сложности </h1>
				<div class="mbr-section-text mbr-white pb-3">
					<p class="mbr-text mbr-fonts-style display-7">

						Пять встроенных программ:
						<br>

					<ul class="mbr-text mbr-regular align-left mbr-fonts-style mt-4 display-4 list mbr-light list-custom" style=" color: black; text-align:left; font-weight: 300; font-size: 1.2rem !important; line-height:1.8rem; ">

						<li>
							<i class="fas fa-check"></i>&nbsp;начинающий
						</li>
						<li>
							<i class="fas fa-check"></i>&nbsp;средний
						</li>
						<li>
							<i class="fas fa-check"></i>&nbsp;продвинутый
						</li>

						<li>
							<i class="fas fa-check"></i>&nbsp;интенсивный
						</li>

						<li>
							<i class="fas fa-check"></i>&nbsp;экстремальный
						</li>
					</ul>
					<p class="mbr-text mbr-fonts-style display-7">
						Подберите себе оптимальный уровень для домашних тренировок. Достигайте своих целей, занимаясь понемногу каждый день.
					</p>



					</p>
				</div>
				<div class="mbr-section-btn">
					<a class="btn btn-md btn-primary display-5" href="#form4-12a">
						<span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>
						Купить сейчас
					</a>
				</div>
			</div>

			<div class="mbr-figure" style="width: 100%;">
				<div style="padding:100% 0 0 0;position:relative;">
					<iframe src="https://player.vimeo.com/video/502122294" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
				</div>
				<script src="https://player.vimeo.com/api/player.js"></script>
			</div>

		</div>
	</div>
</section>

<section class="features17 cid-rVu0OG6jrj" id="features17-d">




	<div class="container-fluid">
		<div class="media-container-row">
			<div class="card p-3 col-12 col-md-6 col-lg-2">
				<div class="card-wrapper">
					<div class="card-img">
						<img src="assets/images/tipoq-560x560.jpg" alt="GymForm AB Generator" title="">
					</div>
				</div>
			</div>

			<div class="card p-3 col-12 col-md-6 col-lg-2">
				<div class="card-wrapper">
					<div class="card-img">
						<img src="assets/images/tipo3-560x560.jpg" alt="GymForm AB Generator" title="">
					</div>
				</div>
			</div>

			<div class="card p-3 col-12 col-md-6 col-lg-2">
				<div class="card-wrapper">
					<div class="card-img">
						<img src="assets/images/abgenerator-1618-1-560x542.jpg" alt="GymForm AB Generator" title="">
					</div>
				</div>
			</div>

			<div class="card p-3 col-12 col-md-6 col-lg-2">
				<div class="card-wrapper">
					<div class="card-img">
						<img src="assets/images/tipo4-560x560.jpg" alt="GymForm AB Generator" title="">
					</div>
				</div>
			</div>
			<div class="card p-3 col-12 col-md-6 col-lg-2">
				<div class="card-wrapper">
					<div class="card-img">
						<img src="assets/images/tipo5-560x560.jpg" alt="GymForm AB Generator" title="">
					</div>
				</div>
			</div>
			<div class="card p-3 col-12 col-md-6 col-lg-2">
				<div class="card-wrapper">
					<div class="card-img">
						<img src="assets/images/tipo2-560x560.jpg" alt="GymForm AB Generator" title="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="header3 cid-rVtX6h6qB3" id="header3-9">




	<div class="container">
		<div class="media-container-row">
			<div class="mbr-figure" style="width: 100%;">
				<img src="assets/images/abgenerator-1662-1-886x746.jpg" alt="GymForm AB Generator" title="">
			</div>

			<div class="media-content">
				<h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1">Подходит для всех уровней физической подготовки</h1>

				<div class="mbr-section-text mbr-white pb-3 ">
					<p class="mbr-text mbr-fonts-style display-5">Неважно новичок Вы или ходите в спортзал каждый день, тренажёр Ab Generator идеально подходит для тех, кто хочет сжечь лишний жир и сделать тело здоровым и спортивным.
					</p>
				</div>
				<div class="mbr-section-btn">
					<a class="btn btn-md btn-primary display-7" href="#form4-12a">
						<span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>
						Купить сейчас
					</a>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="testimonials1 cid-rVunsGNuyE" id="testimonials1-f">




	<div class="container">
		<div class="media-container-row">
			<div class="title col-12 align-center">
				<h2 class="pb-3 mbr-fonts-style display-2">
					Отзывы от наших довольных покупателей 😊</h2>

			</div>
		</div>
	</div>

	<div class="container pt-3 mt-2">
		<div class="media-container-row">
			<div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
				<div class="panel-item p-3">
					<div class="card-block">
						<div class="testimonial-photo">
							<img src="assets/images/face1.jpg">
						</div>
						<p class="mbr-text mbr-fonts-style display-7" style="line-height: 1.2rem;">
							⭐⭐⭐⭐⭐
							<br>
							<strong>ПРОСТ В ИСПОЛЬЗОВАНИИ</strong>
							<br>
							<br>
							Я прекратил качать пресс, так как мне было неудобно тренироваться на полу. Увидев этот тренажер, я решил попробовать, цена была ниже чем у многих аналогов. Сейчас я уже могу гордиться первыми результатами, а главное тренировки пролетают незаметно.
							<br>
							<br>
						</p>
					</div>
					<div class="card-footer">
						<div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
							Петр У.
						</div>
						<small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-4">Магнитогорск, 17 июня 2021 года </small>
					</div>
				</div>
			</div>

			<div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
				<div class="panel-item p-3">
					<div class="card-block">
						<div class="testimonial-photo">
							<img src="assets/images/face3.jpg">
						</div>
						<p class="mbr-text mbr-fonts-style display-7" style="line-height: 1.2rem;">
							⭐⭐⭐⭐⭐
							<br>
							<strong>ОТЛИЧНОЕ СООТНОШЕНИЕ ЦЕНЫ И КАЧЕСТВА
								<br>
							</strong>
							<br>
							Гораздо дешевле, чем другие тренажеры, изготовлен из качественного материала. Компьютер также очень удобен. Благодаря дисплею можно легко следить за продолжительностью упражнений и за калориями.
							<br>
							<br>
						</p>
					</div>
					<div class="card-footer">
						<div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
							Григорий Н.
						</div>
						<small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-4"> Владивосток, 10 мая 2021 года</small>
					</div>
				</div>
			</div>

			<div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
				<div class="panel-item p-3">
					<div class="card-block">
						<div class="testimonial-photo">
							<img src="assets/images/face2.jpg">
						</div>
						<p class="mbr-text mbr-fonts-style display-7" style="line-height: 1.2rem;">
							⭐⭐⭐⭐
							<br>
							<strong>БЫСТРАЯ ДОСТАВКА</strong>
							<br>
							<br>
							Я долго искала тренажер, который был бы доступен по цене и действительно приносил желаемый эффект от тренировок. Этот тренажер превосходит своих конкурентов. Вы действительно можете почувствовать, как он работает после нескольких тренировок, занимаясь только несколько минут в день.
						</p>
					</div>
					<div class="card-footer">
						<div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
							Лариса К.
						</div>
						<small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-4">Электросталь, 30 мая 2021 года </small>
					</div>
				</div>
			</div>




		</div>
	</div>
</section>



<section class="services1 cid-rVzf0WAiAV" id="services1-n">
	<!---->

	<!---->
	<!--Overlay-->

	<!--Container-->
	<div class="container">
		<div class="row justify-content-center">
			<!--Titles-->
			<div class="title pb-5 col-12">
				<h2 class="align-left pb-3 mbr-fonts-style display-1">
					<strong>
						НАШЕ УНИКАЛЬНОЕ ПРЕДЛОЖЕНИЕ
					</strong>
				</h2>

			</div>
			<!--Card-1-->
			<div class="card col-12 col-md-6 p-3">
				<div class="card-wrapper">
					<div class="card-img">
						<img src="assets/images/pack-1-1076x717.jpg" alt="GymForm AB Generator" title="">
					</div>
					<div class="card-box">
						<h4 style="font-size: 2.3rem;" class="card-title mbr-fonts-style display-2">Gymform® AB
							<br>
							Generator
							<br>
						</h4>
						<p class="mbr-text pb-3 mbr-fonts-style display-5" style="line-height: 3rem;">
							<strong style="font-size: 2.7rem; color: #66f844 !important;"> 15990₽ &nbsp;&nbsp;
								<strike style="color: red;">
									<span style="color: grey;">25990₽   </span>
								</strike><em style="color: red; font-size: 2.7rem;">&nbsp;&nbsp; Экономия -10000₽
							</strong>
							</em>
							<br>

							<strong style="font-size: 1.5rem; ">+
								<i class="fas fa-truck"></i>
								Бесплатная доставка
							</strong>
							<br>
						</p>
						<!--Btn-->
						<div class="mbr-section-btn">
							<a class="btn btn-md btn-primary display-7" href="#form4-12a">
								<span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>
								Купить сейчас
							</a>
						</div>
					</div>
				</div>
			</div>
			<!--Card-2-->

			<!--Card-3-->

			<!--Card-4-->

		</div>
	</div>
</section>




<!--


        <section class="countdown1 cid-s4JuP9RZtL" id="countdown1-t">



                        <div class="container ">
                            <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2" style="font-size: 2rem;"><strong>
                                ПРЕДЛОЖЕНИЕ ДОСТУПНО, ПОКА ТОВАР ЕСТЬ В НАЛИЧИИ!
                                <br> <small style="color: #66f844 !important;"> КОЛИЧЕСТВО ОГРАНИЧЕНО!</small>                        </strong></h2>
                         <h3 class="mbr-section-subtitle align-center mbr-fonts-style display-5">


                          <strong style="font-size: 2rem; line-height: 1.4rem; color: yellow;">Gymform Ab Generator<br><br> </strong>ТЕПЕРЬ ЗА
                          <strong style="font-size: 2.3rem; color: #66f844 !important; "> 15990₽ &nbsp; </strong>Было <strong>  <strike style="color: red;"> <span style="color: white; font-size: 2rem;  ">25990₽</span></strike> </stronge> <br> 
                          </em>



                      </h3>

                  </div>
                !--  <div class="container countdown-cont align-center">
                    <div class="daysCountdown col-xs-3 col-sm-3 col-md-3" title="Дней"></div>
                    <div class="hoursCountdown col-xs-3 col-sm-3 col-md-3" title="Часов"></div> 
                    <div class="minutesCountdown col-xs-3 col-sm-3 col-md-3" title="Минут"></div> 
                    <div class="secondsCountdown col-xs-3 col-sm-3 col-md-3" title="Секунд"></div>
                    <div class="countdown pt-5 mt-2" data-due-date="2021/04/15"> 
                    </div>
                </div> -->

<!-- Contador --
<div id="cuenta">

</div>
<style>
/* Cuenta Regresiva */
#cuenta{
display: flex;
justify-content: center;
margin:  0;
}
/* .simply-amount:after{
content: ':';
position: absolute;
padding-left: 4%;

}

.simply-amount:last-of-type{

color: red;
} */
@media screen and (max-width: 1920px){
.simply-section{
width: 9%;
}
}
@media screen and (max-width: 1280px){
.simply-section{
width: 13%;
}
}
.simply-section{
/* background: #ef3340 !important; */
/* width: 180px; */
height: 180px;
margin: 30px 10px;
border-radius: 5px;
display: flex;
justify-content: center;
align-items: center;
text-align: center;
}
.simply-section:after{
content: ':';
color: white;
font-size: 50px;
margin-top: -55px;
font-weight: bold;
margin-left: 10%;
position: absolute;
}
.simply-section:last-of-type:after{
content: '';
position: absolute;
}
@media screen and (max-width: 768px){
.simply-section{
width: 70px !important;
height: 87px !important;
margin: 0 6px;
}
.simply-amount{
font-size: 27px !important;

}
.simply-word{
font-size: 13px !important;
}
.simply-section:after{
content: ':';
color: white;
font-size: 33px;
margin-top: -36px;
margin-left: 19%;
position: absolute;
}
.simply-section:last-of-type:after{
content: '';
position: absolute;
}
}
@media screen and (max-width: 1024px){
.simply-section{
/* width: 180px; */
width: 17% !important;
}

}
.simply-amount{
display: block;
font-size: 52px;
font-weight: 700;
font-family: 'Work Sans', sans-serif;
color: white;

}
.simply-word{
font-size: 25px;
font-weight: 300;
font-family: 'Work Sans', sans-serif;
color: white;
}




</style>
</section>

-->


<section style=" padding-top: 90px; padding-bottom: 90px;" class="mbr-section form4 cid-rJ1vGJIDwP" id="form4-12a">

	<div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(0, 0, 0);"></div>

	<div class="container">
		<div class="row">
			<center>
				<div style="border-radius: 3px; border-style: solid; border-color: yellow; padding-top: 3%; padding-bottom: 3%;" class="col-md-6">
					<h2 style="color: white;" class="pb-3 align-left mbr-fonts-style display-2">
						<center>
							<strong>Предложение заканчивается скоро!</strong>
							<br>
							<em style="color: yellow;">СЭКОНОМЬТЕ 10000₽ Рублей</em>
						</center>
					</h2>
					<div>
						<div class="icon-block pb-3 align-left">
							<h4 class="icon-block__title align-left mbr-fonts-style display-5">
								<center>
                            <span style="font-style: normal; color: white;">
                                Заполните поля <br> 
                                и через несколько дней он ваш <br>
                                Акция:Gymform AB Generator всего за 15990₽
                            </span>
								</center>
							</h4>
						</div>


						<div style="background: #232323; border-radius: 7px;">
							<center>
								<h5 class="align-left mbr-fonts-style display-5" style=" padding: 2em; color: white;  text-align: left !important;">
									<strong>
										<i class="fas fa-truck"></i> &nbsp; Бесплатная доставка
										<br>
										<i class="fas fa-money-bill-wave"></i> &nbsp; Если не довольны -
										<br>
										ВОЗВРАТ в течении 30 дней
									</strong>
								</h5>
							</center>
						</div>
						<div data-form-type="formoid">
							<!---Formbuilder Form--->
							<form id="main_form" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">

								<input type=hidden name=product value='AbGenerator2 - 15990'>
								<input type=hidden name=campaign value='AbGenerator2'>
								<input type=hidden name=price value='15990.00'>
								<input type=hidden name=src value="">


								<div class="row">
									<div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Grazie per aver compilato il modulo!</div>
									<div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
									</div>
								</div>
								<div class="dragArea row">
									<div style="text-align: left;" class="col-md-6  form-group" data-for="name">
										<label style="color: whitesmoke;" for="name-form1-19" class="form-control-label mbr-fonts-style display-7">Имя</label>
										<input type="text" maxlength="30" name="landing_name" placeholder="" data-form-field="Name" class="form-control input display-7" id="name-form4-1a">
									</div>
									<div style="text-align: left;" class="col-md-6  form-group" data-for="phone">
										<label style="color: whitesmoke;" for="name-form1-19" class="form-control-label mbr-fonts-style display-7">Телефон</label>
										<input type="text" maxlength="17" onkeyup="this.value = this.value.replace(/[^0-9()+-]/g,'');" title='Разрешены цифры 0-9, символы (), + и -, до 17 символов' name="landing_phone" placeholder="" data-form-field="Phone" class="form-control input display-7" id="phone-form4-1a">
									</div>
									<div style="text-align: left;" data-for="email" class="col-md-12  form-group">
										<label style="color: whitesmoke;" for="name-form1-19" class="form-control-label mbr-fonts-style display-7">E-mail
										</label>
										<input type="text" name="landing_email" placeholder="" data-form-field="Email" class="form-control input display-7" id="email-form4-1a">
									</div>
									<div style="text-align: left;" data-for="city" class="col-md-12  form-group">
										<label style="color: whitesmoke;" for="name-form1-19" class="form-control-label mbr-fonts-style display-7">Город</label>
										<input type="text" maxlength='30' name="landing_city" placeholder="" data-form-field="City" class="form-control input display-7" id="city-form4-1a">
									</div>
									<div style="text-align: left;" data-for="adress" class="col-md-12  form-group">
										<label style="color: whitesmoke;" for="adress-form1-19" class="form-control-label mbr-fonts-style display-7">Адрес
										</label>
										<input type="text" maxlength='120' name="landing_address" placeholder="" data-form-field="adress" class="form-control input display-7" id="adress-form4-1a">
									</div>
									<div style="text-align: left;" data-for="cap" class="col-md-12  form-group">
										<label style="color: whitesmoke;" for="cap-form1-19" class="form-control-label mbr-fonts-style display-7">Индекс</label>
										<input type="text" maxlength="8"  onkeyup="this.value = this.value.replace(/[^0-9]/g,'');" title='Только цифры, не более 8 символов' name="landing_cap" placeholder="" data-form-field="Cap" class="form-control input display-7" id="cap-form4-1a">
									</div>
									<div style="text-align: left;" data-for="policy" class="col-md-12  form-group">
										<label>
											<span class="textGDPR display-7" style="color: white; text-align: left; ">* Я ознакомился с <a href="privacy.html" style="color:#66f844 !important;">правилами</a>, и согласен на обработку моих персональных данных.</span>
										</label>

									</div>
									<div class="col-md-12 input-group-btn  mt-2 align-center">
										<button style="background-color: #66f844 !important; width: 100%; font-weight: bold; font-size: 24px; color: white;" type="submit" class="btn btn-form display-4 pulse"></span>ЗАКАЗАТЬ СЕЙЧАС</button>
									</div>
								</div>
								<input type="hidden" name="submit_feedback" value="1">
							</form>
							<!---Formbuilder Form--->
						</div>
					</div>
			</center>
		</div>
	</div>
</section>




<!--


<section class="header15 cid-rVySjoZ3rz mbr-fullscreen mbr-parallax-background" id="header15-l">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(0, 0, 0);"></div>

    <div class="container align-right">
        <div class="row">
<div class="row">
          <center>
                  <div style="border-radius: 3px; border-style: solid; border-color: gold; padding-top: 3%; padding-bottom: 3%;" class="col-md-6">
                       <h2 style="color: white;" class="pb-3 align-left mbr-fonts-style display-2"><center>
              <strong>Предложение заканчивается скоро!</strong><br>
              <em style="color: yellow;">Экономия 10000₽ Рублей</em>
            </center></h2>
            <div>
                <div class="icon-block pb-3 align-left">
                    <h4 class="icon-block__title align-left mbr-fonts-style display-5">
                        <center>
                            <span style="font-style: normal; color: white;">
                                Заполните поля <br> 
                                и через несколько дней он ваш <br>
                                Акция: Gymform AB Generator всего за 15990₽
                            </span>
                        </center>
                    </h4>
                </div>
                <div style="background: #232323; border-radius: 7px;">
                <center>
                <h5 class="align-left mbr-fonts-style display-5" style=" padding: 2em; color: white;  text-align: left !important;">
                    <strong>
                        <i class="fas fa-truck"></i> &nbsp; Бесплатная доставка<br>
                        <i class="fas fa-money-bill-wave"></i> &nbsp; Если не довольны - <br> ВОЗВРАТ в течении 30 дней
                    </strong>
                </h5>
                </center>
              </div>
                            <br>

                        </div>
                        <div data-form-type="formoid">
                            <---Formbuilder Form---
                            <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                                <input type="hidden" name="email" data-form-email="true" value="WfLGNF32FR4wrvWPUEDkRg0xbaRICKvG1kyMR4g2OdDOFehCBgvBIOYipsQMxTNgz8WwgJoJLFEGYs/ZOfKa3NO7SmbarJilzofADsSfy87havLlo6fDMtzvF91SdFpr">
                                <div class="row">
                                    <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Спасибо за заполнение формы!</div>
                                    <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                    </div>
                                </div>


                                   <div class="row">
                    <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Grazie per aver compilato il modulo!</div>
                    <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                    </div>
                  </div>
                  <div class="dragArea row">
                    <div style="text-align: left;" class="col-md-6  form-group" data-for="name">
                      <label style="color: whitesmoke;" for="name-form1-19" class="form-control-label mbr-fonts-style display-7">Имя</label>
                      <input type="text" name="landing_name" placeholder="" data-form-field="Name" required="required" class="form-control input display-7" id="name-form4-1a">
                    </div>
                    <div style="text-align: left;" class="col-md-6  form-group" data-for="phone">
                      <label style="color: whitesmoke;" for="name-form1-19" class="form-control-label mbr-fonts-style display-7">телефон</label>
                      <input type="text" name="landing_phone" placeholder="" data-form-field="Phone" required="required" class="form-control input display-7" id="phone-form4-1a">
                    </div>
                   <div style="text-align: left;" data-for="email" class="col-md-12  form-group">
                      <label style="color: whitesmoke;" for="name-form1-19" class="form-control-label mbr-fonts-style display-7">E-mail
                      </label>
                      <input type="landing_email" name="adress" placeholder="" data-form-field="Email" class="form-control input display-7" required="required" id="email-form4-1a">
                    </div>
                    <div style="text-align: left;" data-for="city" class="col-md-12  form-group">
                      <label style="color: whitesmoke;" for="name-form1-19" class="form-control-label mbr-fonts-style display-7">город</label>
                      <input type="text" name="landing_city" placeholder="" data-form-field="City" class="form-control input display-7" required="required" id="city-form4-1a">
                    </div>
                    <div style="text-align: left;" data-for="adress" class="col-md-12  form-group">
                        <label style="color: whitesmoke;" for="adress-form1-19" class="form-control-label mbr-fonts-style display-7">адрес
                        </label>
                        <input type="text" name="landing_address" placeholder="" data-form-field="adress" class="form-control input display-7" required="required" id="adress-form4-1a">
                      </div>
                    <div style="text-align: left;" data-for="cap" class="col-md-12  form-group">
                      <label style="color: whitesmoke;" for="cap-form1-19" class="form-control-label mbr-fonts-style display-7">Индекс</label>
                      <input type="text" name="landing_cap" placeholder="" data-form-field="Cap" class="form-control input display-7" id="cap-form4-1a">
                    </div>
                    <div style="text-align: left;" data-for="policy" class="col-md-12  form-group">
                      <label>
                        <span class="textGDPR display-7" style="color: white; text-align: left; ">* Я ознакомился с <a href="privacy.html" style="color:black;">правилами</a>, и согласен на обработку моих персональных данных.</span>
                      </label>

                    </div>
                    <div class="col-md-12 input-group-btn  mt-2 align-center">
                      <button style="background-color: #66f844 !important; width: 100%; font-weight: bold; font-size: 24px; color: white;" type="submit" class="btn btn-form display-4 pulse"></span>ЗАКАЗАТЬ СЕЙЧАС</button>
                                    </div>
                                </div>
                            </form>
                            !---Formbuilder Form---
                        </div>
            </div>
        </center>
            </div>
        </div>
    </div>
    
</section>
-->
<!--
<section class="mbr-section article content9 cid-rVtHi4lLkp" id="content9-3">
    
     

    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 10%;">
            <div class="section-text align-center mbr-fonts-style display-5" style="font-size:1.2rem;">Официальный представитель "Best Direct UK" в России   ООО "ИКС" (ООО IQS )<br>
Юридический адрес: 117628, г. Москва, ул. Грина, д.42, 1 эт., пом. VI, К.6, оф. 66, <br>
ИНН 7727429645 ОГРН 1197746581152<br>
<a href="mailto:info@interiqs.ru">info@interiqs.ru</a>
</div>
            <hr class="line" style="width: 10%;">
        </div>
        </div>
</section>
	

-->




<!---Footer


				   <style>


					 .cid-ruABGBd9qw {
					   padding-top: 30px;
					   padding-bottom: 45px;
					   background-color: black;
					 }
				   </style>


				   <section class="header3 cid-ruABGBd9qw" id="header3-2p">

					 <div class="container">
					   <div class="media-container-row" style="text-align: center;">

						 <div class="mbr-figure" style="width: 40%;">

							   <span style="color:white; text-align: center; font-family:sans-serif;"><a href="policy.html" style="color:white;">Policy Privacy</a></span>
						   <img src="assets/images/30days.png" alt="" title="" style="text-align: center;">
						 </div>


					   </div>
					 </div>

				   </section>


				 End of Footer --->




<section class="footer3 cid-sqHObctJJB" once="footers" id="footer3-d">
	<div class="container" style="text-align: center; ">
		<div class="row justify-content-center">
			<div class="columna col-6 col-md-3 col-lg-2" style="line-height: 1rem !important;">
				<span class="mbr-iconfont fa-truck fa" style="font-size: 1.3rem; color:white;"></span>
				<br>
				<span style="font-size: 1rem; line-height: 1rem; color:white;"> Доставка от <br>2 до 5 дней </span>
			</div>
			<div class="columna col-6 col-md-3 col-lg-2" style="line-height: 1rem !important;">
				<span class="mbr-iconfont fa-money fa" style="font-size: 1.3rem; color:white;"></span>
				<br>
				<span style="font-size: 1rem; line-height: .80rem !important; color:white;"> 30-дневная гарантия<br> возврата денег </span>
			</div>
			<div class="columna col-6 col-md-3 col-lg-2" style="line-height: 1rem !important;">
				<span class="mbr-iconfont fa-shield fa" style="font-size: 1.3rem; color:white;"></span>
				<br>
				<span style="font-size: 1rem; line-height: 1rem; color:white;"> Лучшая цена <br>гарантирована</span>
			</div>
			<div class="columna col-6 col-md-3 col-lg-2" style="line-height: 1rem !important;">
				<span class="fas fa-headphones-alt" style="font-size: 1.3rem; color:white;"></span>
				<br>
				<span style="font-size: 1rem; line-height: 1rem; color:white;"> Клиентский <br>сервис</span>
			</div>
		</div>
		<div class="media-container-row align-center mbr-white">
			<div class="row social-row" style="padding-top: 3rem;">
				<div class="col-footer-12">
					<a href="https://www.facebook.com/Bestdirect-Russia-114227090284197/" target="_blank">
						<i style="color: #eddbcc !important;" class="fab fa-facebook fa-2x" aria-hidden="true"></i>
					</a>
					<a href="https://www.instagram.com/bestdirect.ru/" target="_blank">
						<i style="color: #eddbcc !important;" class="fab fa-instagram fa-2x" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="row row-links">
				<ul class="foot-menu">
					<li class="foot-menu-item mbr-fonts-style display-7" style="color: orange;">
						<a href="policy.html" class="text-success1" target="_blank">
							<br>
							Политика конфиденциальности
						</a>
					</li>
				</ul>
			</div>
			<div class="row social-row">
				<div class="social-list align-right pb-2">
					<div class="soc-item">
						<img src="assets/images/logo2.png" alt="Smokefree Copper Grill" style="height: 3.6rem; width: auto;">
					</div>
				</div>
			</div>
			<div class="row row-copirayt">
				<p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
					© 2021 GymFrom Ab Generator | Все права защищены
				</p>
			</div>
		</div>
	</div>
</section>
<div id="popup_messages" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Уважаемый клиент, благодарим Вас за заказ!</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">В блжайшее время c Вами свяжется представитель компании «ИКС-ФИТНЕС», используя оставленные вами контактные данные.<br><br>Мы работаем <b>Пн-Пт с 9.00 до 20.00; Сб-Вс с 10.00 до 18.00.</b><br><br>Если заявка была сделана Вами в нерабочее время, мы позвоним Вам на следующий день в промежутке с 9:00-20:00. Пожалуйста, будьте готовы ответить на звонок для оформления заказа.</div>
			<button type="button" class="big-close" data-dismiss="modal" aria-label="Close"><span class="big-button-text" aria-hidden="true">Закрыть</span></button>		
		</div>
	</div>
</div>

<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/dropdown/js/nav-dropdown.js"></script>
<script src="assets/dropdown/js/navbar-dropdown.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/parallax/jarallax.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/theme/js/script.js"></script>
<script src="assets/countdown/jquery.countdown.min.js"></script>

<script src="assets/js/simplyCountdown.min.js"></script>
<script src="assets/js/countdown.js"></script>
<script src="assets/node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="assets/js/js.js"></script>

</body>
</html>