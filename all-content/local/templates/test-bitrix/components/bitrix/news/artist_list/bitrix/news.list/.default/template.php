<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php foreach ($arResult["ITEMS"] as $arItem): ?>
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
<?php endforeach; ?>
