<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$this->setFrameMode(true);
$APPLICATION->SetPageProperty("TITLE", Loc::getMessage('PAGE_TITLE'));

$APPLICATION->IncludeComponent(
    "bitrix:breadcrumb",
    "defaultBreadcrumb",
    [
        "SITE_ID" => "test-bitrix",
        "START_FROM" => "0"
    ]
);
?>
<section class="records">
    <div class="container">
        <h1><?=Loc::getMessage('PAGE_H1')?></h1>
        <div class="records__row">
            <div class="records__text">
                <p><?=Loc::getMessage('RECORDS_TEXT')?></p>
                <h2><?=Loc::getMessage('PAGE_H2')?></h2>
                <p><?=Loc::getMessage('RECORDS_TEXT2')?></p>
            </div>
            <div class="records__img">
                <img src="/local/templates/test-bitrix/img/records.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<section class="artists">
    <div class="container">
        <h2><?=Loc::getMessage('TITLE_ARTISTS')?></h2>
        <div class="artists__list">
            <?php if ($arResult["ITEMS"]) { ?>
                <?php foreach ($arResult["ITEMS"] as $arItem) { ?>
                    <div class="artists__item">
                        <div class="artists__photo">
                            <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="">
                        </div>
                        <div class="artists__body">
                            <div class="artists__body-wrap">
                                <div class="artists__name">
                                    <?= $arItem['NAME'] ?>
                                </div>
                                <div class="artists__desc">
                                    <?= $arItem['PREVIEW_TEXT'] ?>
                                </div>
                                <div class="artists__more">
                                    <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="empty-btn">more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>
