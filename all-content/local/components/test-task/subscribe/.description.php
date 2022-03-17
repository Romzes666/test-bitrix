<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("SUB_NAME"),
	"DESCRIPTION" => GetMessage("SUB_DESCRIPTION"),
	"ICON" => "/images/subscr_form.gif",
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "service",
		"CHILD" => array(
			"ID" => "custom-subscribe",
			"NAME" => GetMessage("SUB_SERVICE")
		)
	),
);

?>