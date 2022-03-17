<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult)) {
    return "";
}

global $APPLICATION;

$sContentToReturn = '';
ob_start();
?>
<section class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs__list">
            <?php foreach ($arResult as $iKey => $aItem) {
                if ($iKey != count($arResult) - 1) { ?>
                    <a href="<?= $aItem['LINK'] ?>" class="breadcrumbs__item"><?= $aItem['TITLE'] ?></a>
                <?php } else { ?>
                    <div class="breadcrumbs__item breadcrumbs__item-active">
                        <?= $aItem['TITLE'] ?>
                    </div>
                <?php }
            }
            ?>
        </div>
    </div>
</section>
<?php
$sContentToReturn = ob_get_contents();
ob_end_clean();
return $sContentToReturn;
?>
