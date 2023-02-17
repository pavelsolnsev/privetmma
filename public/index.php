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
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-<?= $gtm ?>');
	</script>
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2487426621502508');
    fbq('track', 'PageView');
    </script>
</head>

<body class="<?= $version ? 'version-' . $version : '' ?> ">
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2487426621502508&ev=PageView&noscript=1"
    /></noscript>

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	
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
				<a href="https://мма.рф/user/login" class="header__button-login button">Войти</a>
				<a href="https://мма.рф/user/register" class="header__button-reg button">Регистрация</a>
			</div>
		</div>
	</div>
</header>
			<section class="main ">
    <div class="container">
        <div class="main__content">
            <div class="main__subtitle">Добро пожаловать на</div>
            <h1 class="main__title">Мма.РФ</h1>
            <p class="main__text">Доступ к&nbsp;прямым эфирам турниров со&nbsp;всей России, полному архиву боев и&nbsp;турнирам по&nbsp;разным дисциплинам единоборств, а&nbsp;также эксклюзивным новостям, мастер-классам, образовательному и&nbsp;развлекательному контенту</p>
            <a href="https://мма.рф/user/register" class="main__button button">Регистрация бесплатно</a>
        </div>
    </div>
</section>
			<section class="info" id="info">
    <div class="container">
        <div class="info__box">
            <h2 class="info__title title"><span>Портал о&nbsp;единоборствах</span>  для профессионалов<br> и&nbsp;любителей</h2>
        </div>
    </div>
</section>
			<section class="participants" id="participants">
    <div class="container">
        <h2 class="participants__title title">Участники</h2>
        <div class="participants__box">
            <div class="participants__item">
                <img data-src="img/participants/emel.png" alt="" class="lazy">
                <h3 class="participants__item-title">Фёдор Емельяненко</h3>
                <p class="participants__item-text">Председатель наблюдательного совета Союза смешанных боевых единоборств &laquo;ММА&raquo; России</p>
            </div>
            <div class="participants__item">
                <img data-src="img/participants/gab.png" alt="" class="lazy">
                <h3 class="participants__item-title">Радмир Габдуллин</h3>
                <p class="participants__item-text">Президент Союза смешанных боевых единоборств «ММА» России</p>
            </div>
            <div class="participants__item">
                <img data-src="img/participants/mineev.png" alt="" class="lazy">
                <h3 class="participants__item-title">Владимир Минеев</h3>
                <p class="participants__item-text">Чемпион AMC Fight Nights Global в&nbsp;среднем весе, президент федерации ММА Ульяновской области</p>
            </div>
            <div class="participants__item">
                <img data-src="img/participants/nemkov.png" alt="" class="lazy">
                <h3 class="participants__item-title">Вадим Немков</h3>
                <p class="participants__item-text">Чемпион Bellator FC&nbsp;в&nbsp;полутяжелом весе, президент федерации ММА Белгородской области</p>
            </div>
            <div class="participants__item">
                <img data-src="img/participants/ankalaev.png" alt="" class="lazy">
                <h3 class="participants__item-title">Магомед Анкалаев</h3>
                <p class="participants__item-text">Первый в&nbsp;истории России Заслуженный мастер спорта по&nbsp;ММА, топ боец UFC</p>
            </div>
            <div class="participants__item">
                <img data-src="img/participants/abdylaev.png" alt="" class="lazy">
                <h3 class="participants__item-title">Шамиль Абдулаев</h3>
                <p class="participants__item-text">Заслуженный мастер спорта по&nbsp;ММА, боец OneFC, главный тренер Universal Fighters</p>
            </div>
            <div class="participants__item">
                <img data-src="img/participants/mag.png" alt="" class="lazy">
                <h3 class="participants__item-title">Забит Магомедшарипов</h3>
                <p class="participants__item-text">Мастер спорта по&nbsp;ММА, топовый боец UFC</p>
            </div>
            <div class="participants__item">
                <img data-src="img/participants/ian.png" alt="" class="lazy">
                <h3 class="participants__item-title">Пётр&nbsp;Ян</h3>
                <p class="participants__item-text">Мастер спорта по&nbsp;ММА, боец команды &laquo;Архангел Михаил&raquo;, временный чемпион UFC в&nbsp;легчайшем весе</p>
            </div>
        </div>
    </div>
</section>
			<section class="form-reg" id="form-reg">
    <div class="container">
        <div class="form-reg__box">
            <h2 class="form-reg__title title">Зарегистрируйся</h2>
            <div class="form-reg__subtitle">и&nbsp;получи полный доступ к&nbsp;миру ММА (прямые эфиры со&nbsp;всей России, архивы боёв, эксклюзивные новости и&nbsp;мастер-классы)</div>
            <a href="https://мма.рф/user/register" class="form-reg__button button">Регистрация</a>
        </div>
    </div>
</section>




			<section class="tournaments" id="tournaments">
    <div class="container">
        <h2 class="tournaments__title title">Турниры</h2>
        <div class="tournaments__box">
            <div class="tournaments__item">
                <h3 class="tournaments__item-title">Чемпионат России<br> по&nbsp;ММА среди<br> мужчин и&nbsp;женщин</h3>
            </div>
            <div class="tournaments__item">
                <h3 class="tournaments__item-title">Чемпионат Европы<br> по&nbsp;ММА среди<br> мужчин и&nbsp;женщин</h3>
            </div>
            <div class="tournaments__item">
                <h3 class="tournaments__item-title">Всероссийский мастерский<br> турнир по&nbsp;ММА памяти<br> А.М.Нурмагомедова</h3>
            </div>
        </div>
    </div>
</section>
			
<section class="price lazy">
    <div class="container">
        <h2 class="price__title title">Тарифы</h2>
        <div class="price__box" id="price">
            
            <div class="price-card">
                <div class="price-card__header">
                    <div class="price-card__header-title">Бесплатно</div>
                    <div class="price-card__header-price"></div>
                </div>
                <p class="price-card__text">Оформляйте подписку на&nbsp;месяц и&nbsp;получай доступ ко&nbsp;всем прямым эфирам турниров ММА</p>
                <ul class="price-card__body">
                    
            <li>Доступ к&nbsp;экслюзивным новостям, мастер-классам, обучающему контенту и&nbsp;прямым эфирам со&nbsp;всей России</li>
            <li>Уроки от&nbsp;лучших представителей российской школы единобрств</li>
        
                </ul>
                <a href="https://мма.рф/user/register" class="price-card__button button">Регистрация</a>
            </div>
            
            <div class="price-card">
                <div class="price-card__header">
                    <div class="price-card__header-title">Ежемесячно</div>
                    <div class="price-card__header-price">190 ₽</div>
                </div>
                <p class="price-card__text">Оформляйте подписку и&nbsp;получай доступ ко&nbsp;всем прямым эфирам турниров ММА</p>
                <ul class="price-card__body">
                    
            <li>Доступ к&nbsp;экслюзивным новостям, мастер-классам, обучающему контенту и&nbsp;прямым эфирам со&nbsp;всей России</li>
            <li>Уроки от&nbsp;лучших представителей российской школы единобрств</li>
            <li>Полный архив соревнований и&nbsp;мастер-классов</li>
            <li>Доступ к&nbsp;первому в&nbsp;России онлайн &laquo;Факультету ММА&raquo;</li>
        
                </ul>
                <a href="https://мма.рф/user/register" class="price-card__button button">Скоро</a>
            </div>
            
            <div class="price-card">
                <div class="price-card__header">
                    <div class="price-card__header-title">Ежегодно</div>
                    <div class="price-card__header-price">990 ₽</div>
                </div>
                <p class="price-card__text">Оформляйте подписку на&nbsp;месяц и&nbsp;получай доступ ко&nbsp;всем прямым эфирам турниров ММА</p>
                <ul class="price-card__body">
                    
            <li>Доступ к&nbsp;экслюзивным новостям, мастер-классам, обучающему контенту и&nbsp;прямым эфирам со&nbsp;всей России</li>
            <li>Уроки от&nbsp;лучших представителей российской школы единобрств</li>
            <li>Полный архив соревнований и&nbsp;мастер-классов</li>
            <li>Доступ к&nbsp;первому в&nbsp;России онлайн &laquo;Факультету ММА&raquo;</li>
            <li>Возможность попасть в команду профессионалов ММА.рф</li>
        
                </ul>
                <a href="https://мма.рф/user/register" class="price-card__button button">Скоро</a>
            </div>
            
        </div>
    </div>
</section>
			<section class="broadcast" id="broadcast">
    <div class="container">
        <div class="broadcast__content">
            <h2 class="broadcast__title title">Зарегистрируйтесь и получите возможность</h2>
            <div class="broadcast__subtitle">создавать свой профиль, профиль своего клуба, заявляться на&nbsp;соревнования онлайн и&nbsp;участвовать в&nbsp;национальном рейтинге</div>
        </div>
       
    </div>
</section>
			<footer class="footer">
    <div class="container">
        <div class="footer__box">
            <div class="footer__logo"><img src="img/header/logo.svg" alt="" class="footer__logo-img"></div>
            <div class="footer__developer">
                <div class="footer__developer-box footer__link"><a class="footer__link" target="_blank" href="file/Политика_конфидициальности_ММА_рф.docx">Политика конфиденциальности</a></div>
            </div>
        </div>
    </div>
</footer>
			
	</div>

	<div class="fixed">
		<a href="https://мма.рф/user/register" class="fixed__button button">Регистрация бесплатно</a>
	</div>

	<div hidden>
		
		
		
		<a href="http://sydi.ru" style="display: none">Synergy Digital</a>
		
<form action="<?=$action?>&form=reg" class="form ">
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
                <div class="form__footer-text">Я&nbsp;даю согласие на&nbsp;обработку персональных данных и&nbsp;получение информационных рассылок от&nbsp;Московского Открытого Института</div>
                <!-- <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности </a> -->
            </label>
        </div>
    </div>
</form>

	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>
	<script src="https://syn.su/js/lander.js?v=2" defer="defer"></script>
	<script src="js/script.js"></script>
</body>

</html>