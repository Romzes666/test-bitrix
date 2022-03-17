<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Marshall Music');
?>
            <section class="welcome">
                <div class="container">
                    <h1>MAKING MUSIC <br>WITH MARSHALL</h1>
                    <div class="welcome__row">
                        <div class="welcome__text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include",
                            "",
                                Array("AREA_FILE_SHOW" =>"file",
                                    "AREA_FILE_SUFFIX" =>"Inc",
                                    "EDIT_TEMPLATE" =>"",
                                    "PATH"=>"/include/main_text.php"
                                )
                            );?>
                            <a href="#" class="empty-btn">explore</a>
                        </div>
                        <div class="welcome__img">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/welcome.jpg" alt="">
                        </div>
                    </div>
                    <a href="#" class="arrow-down"><img src="<?=SITE_TEMPLATE_PATH;?>/img/arrow-down.svg" alt="Down"></a>
                </div>
            </section>
<?$APPLICATION->IncludeComponent(
    "test-task:subscribe",
    "",
    Array()
);?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>