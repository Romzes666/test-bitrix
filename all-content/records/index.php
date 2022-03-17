<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->IncludeComponent(
    "bitrix:news",
    "artists",
    [
        "ADD_ELEMENT_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "IBLOCK_ID" => 1,
        "IBLOCK_TYPE" => "Artists",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "SEF_MODE" => "Y",
        "COMPONENT_TEMPLATE" => "artists",
        "SEF_FOLDER" => "/records/",
        "CACHE_TYPE" => "N",
        "SEF_URL_TEMPLATES" => [
            "news" => "",
            "section" => "",
            "detail" => "#ELEMENT_CODE#/",
        ]
    ],
    false
);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>