<!DOCTYPE html>
<html lang="ru">
<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';
include_once $ROOT . 'version.php';
?>
<head>
	<base href="<?= $BASE_HREF ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title><?= $title ?></title>

	<meta property="og:title" content="<?= $title ?>">
	<meta property="og:description" content="<?= $desc ?>">
	<meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
	<meta property="og:image" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">
	<link rel="image_src" href="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">

	<link href="img/common/favicon.svg" type="image/x-icon" rel="icon">
	<link href="img/common/favicon.svg" type="image/x-icon" rel="shortcut icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>

<body class="<?= $version ? 'version-' . $version : '' ?> page-thanks">

	
	<div class="wrapper">
			
	
	<header class="header">
	<div class="container">
		<div class="header__box">
			<div class="header__logo">
				<img data-src="img/header/logo.svg" alt="" class="lazy">
			</div>
			<nav class="header__menu">
				<ul class="header__list">
					<li class="header__item">
						<a href="#participants" class="header__link scroll">Участники</a>
					</li>
					<li class="header__item">
						<a href="#broadcast" class="header__link scroll">Трансляции</a>
					</li>
					<li class="header__item">
						<a href="#tournaments" class="header__link scroll">Турниры</a>
					</li>
				</ul>
			</nav>
			<div class="header__button">
				<a href="https://example.com/demo/login" class="header__button-login button">Войти</a>
				<a href="https://example.com/demo/register" class="header__button-reg button">Регистрация</a>
			</div>
		</div>
	</div>
</header>
	<section class="thanks">
    <h2 class="thanks__title about__title">Спасибо!</h2>
    <div class="thanks__description">Это демо-страница: заявки не&nbsp;отправляются и&nbsp;никто не&nbsp;свяжется.</div>
</section>

	</div>

	<div class="fixed">
		<a href="https://example.com/demo/register" class="fixed__button button">Регистрация бесплатно</a>
	</div>

	<div hidden>
		
		
		
<form action="#" class="form " onsubmit="return false">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Оставьте заявку и повысьте свою квалификацию</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_number ">
    
    <input name="tickets_count" type="number" placeholder="2" class="form__input" pattern=^[0-9]+$ min=1 required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Оставить заявку</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Демо: чекбокс только для макета, данные никуда не&nbsp;отправляются.</div>
                <!-- <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности </a> -->
            </label>
        </div>
    </div>
</form>

	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>
	<script src="js/script.js"></script>
</body>

</html>