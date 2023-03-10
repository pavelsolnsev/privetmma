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

<body class="<?= $version ? 'version-' . $version : '' ?> page-thanks">
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
						<a href="#participants" class="header__link scroll">??????????????????</a>
					</li>
					<li class="header__item">
						<a href="#broadcast" class="header__link scroll">????????????????????</a>
					</li>
					<li class="header__item">
						<a href="#tournaments" class="header__link scroll">??????????????</a>
					</li>
				</ul>
			</nav>
			<div class="header__button">
				<a href="https://??????.????/user/login" class="header__button-login button">??????????</a>
				<a href="https://??????.????/user/register" class="header__button-reg button">??????????????????????</a>
			</div>
		</div>
	</div>
</header>
	<section class="thanks">
    <h2 class="thanks__title about__title">??????????????!</h2>
    <div class="thanks__description">???? ???????????????? ?????? ???????? ?? ?????????? ???????????????? ?? ????????.</div>
</section>

	</div>

	<div class="fixed">
		<a href="https://??????.????/user/register" class="fixed__button button">?????????????????????? ??????????????????</a>
	</div>

	<div hidden>
		
		
		
		<a href="http://sydi.ru" style="display: none">Synergy Digital</a>
		
<form action="<?=$action?>&form=reg" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title ">???????????????? ???????????? ?? ???????????????? ???????? ????????????????????????</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="??????" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="??????????????" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"   required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_number ">
    
    <input name="tickets_count" type="number" placeholder="2" class="form__input" pattern=^[0-9]+$ min=1 required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">???????????????? ????????????</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">??&nbsp;?????? ???????????????? ????&nbsp;?????????????????? ???????????????????????? ???????????? ??&nbsp;?????????????????? ???????????????????????????? ???????????????? ????&nbsp;?????????????????????? ?????????????????? ??????????????????</div>
                <!-- <a href="#privacy" class="fancybox form__more-link">?????????????????? ???????????????????????????????????? </a> -->
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