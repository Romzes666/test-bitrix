<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if(!empty($arResult)):?>
        <ul class="footer__menu-list">
        <?php foreach ($arResult as $item):?>
            <li>
                <a href="<?= $item['LINK'] ?>" class="footer__menu-link"><?= $item['TEXT'] ?></a>
            </li>
        <?php endforeach; ?>
        </ul>
<?php endif; ?>
