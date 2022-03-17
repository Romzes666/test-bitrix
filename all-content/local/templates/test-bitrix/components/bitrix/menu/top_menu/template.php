<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
}
?>
<?php if (!empty($arResult)) { ?>
<nav class="header__nav">
    <ul class="header__nav-list">
        <?php foreach ($arResult as $item) { ?>
        <li>
            <a href="<?= $item['LINK'] ?>" style="opacity: <?=$item['SELECTED'] ? ' 1' : '.5'?>" class="header__nav-link<?=$item['SELECTED'] ? ' active' : ''?>"><?= $item['TEXT'] ?></a>
        </li>
        <?php } ?>
    </ul>
</nav>
<?php } ?>
