<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
    use \Bitrix\Main\Page\Asset;
    $APPLICATION->ShowHead();
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.min.css");
    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">');
    ?>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title><?php $APPLICATION->ShowTitle()?></title>
</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel();?></div>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__row">
                <div class="header__logo">
                    <a href="#">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/logo.svg" alt="logo">
                    </a>
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top_menu",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "N",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "top_menu"
                    ),
                    false
                );?>
            </div>
        </div>
    </header>

    <main class="main">
