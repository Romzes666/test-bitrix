<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
}

if (!$arResult) {
    return;
}

$linksCounter = 0;
$linksElements = '';
foreach ($arResult as $item) {
    $linksElements .= '<li><a href="' . $item['LINK'] . '" class="footer__menu-link">' . $item['TEXT'] . '</a></li>';
    $linksCounter++;
    if ($linksCounter == 4) {
        echo '<div class="footer__col">
                <ul class="footer__menu-list">' .
                    $linksElements .
                '</ul>
            </div>';
        $linksCounter = 0;
        $linksElements = '';
    }
}
echo '<div class="footer__col">
                <ul class="footer__menu-list">' .
    $linksElements .
    '</ul>
            </div>';
?>


