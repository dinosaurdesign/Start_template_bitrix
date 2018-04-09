<? if ( ! defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true ) {
	die();
} ?>

<!doctype html>
<html class="no-js" lang="">
<head>

	<? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon.ico"/>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<header class="container-fluid">
    <div class="header_content row">
        <div class="col-1"></div>
        <div class="col-5 align-self-center">
            <a href="/">
	            <?
	            $APPLICATION->IncludeFile(
		            SITE_DIR . "include/company_name.php",
		            Array()
	            );
	            ?>
            </a>
        </div>
        <div class="col-5 d-flex flex-column justify-content-center">
            <div class="header__social">
                <ul class="d-flex justify-content-end">
                    <li><a href="#">Instagram</a>/li>
                    <li><a href="#">VK</a></li>
                    <li><a href="#">375292444375</a></li>
                </ul>
            </div>
            <nav class="header_nav">
                <ul class="d-flex justify-content-between">
                    <li><a href="#">Портфолио</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Контакты</a></li>
                    <input type="button" value="Связаться с нами">
                </ul>

            </nav>

        </div>
        <div class="col-1"></div>
    </div>
</header>
<section id="header" class="container-fluid">

</section>
