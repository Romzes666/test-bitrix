<?php
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$this->setFrameMode(true);
?>
<section class="mailing">
    <div class="container">
        <div class="mailing__wrap">
            <div class="mailing__title"><?= Loc::getMessage('SUBSCRIBE_TITLE')?></div>
            <div class="mailing__desc"><?= Loc::getMessage('SUBSCRIBE_DISCR')?></div>
            <form class="mailing__form">
                <input type="text" placeholder="your email" class="mailing__input"> <input type="submit" value="subscribe" class="mailing__submit">
                <div class="mailing__agree"><?= Loc::getMessage('SUBSCRIBE_AGREE')?></div>
            </form>
        </div>
    </div>
</section>