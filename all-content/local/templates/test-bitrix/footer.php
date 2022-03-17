<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__row">
                <div class="footer__col">
                    <div class="footer__logo">
                        <a href="#">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/logo.svg" alt="">
                        </a>
                    </div>
                    <div class="footer__copyright">
                        ©2020 zound industries. <br>
                        all rights reserved. org. nr 5567574610
                    </div>
                </div>

                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "bottom_menu",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "N",
                        "ROOT_MENU_TYPE" => "bottom",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "bottom_menu"
                    ),
                    false
                );?>
                <div class="footer__col">
                    <div class="footer__social">
                        <ul class="footer__social-list">
                            <li>
                                <a href="#" class="footer__social-link">spotify</a>
                            </li>
                            <li>
                                <a href="#" class="footer__social-link">facebook</a>
                            </li>
                            <li>
                                <a href="#" class="footer__social-link">instagram</a>
                            </li>
                            <li>
                                <a href="#" class="footer__social-link">pinterest</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<?php
use \Bitrix\Main\Page\Asset;
$APPLICATION->ShowHead();
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/libs/jquery.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/script.min.js");
?>
</body>
</html>
