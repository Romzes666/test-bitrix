<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Marshall records");
$APPLICATION->SetTitle("records");
?><section class="breadcrumbs">
<div class="container">
	<div class="breadcrumbs__list">
 <a href="/index.php" class="breadcrumbs__item">main page</a>
		<div class="breadcrumbs__item breadcrumbs__item-active">
			 acton multi-room
		</div>
	</div>
</div>
 </section> <section class="records">
<div class="container">
	<h1>
	marshall records </h1>
	<div class="records__row">
		<div class="records__text">
			<p>
				 Marshall is more than just an amp manufacturing brand. Marshall is a music brand. Jim Marshall's passion for music was the driver for all that <br>
				 he achieved. This same motivation is at the heart of Marshall Records. <br>
				 The label supports musicians to create, record, produce and promote their music.
			</p>
			<h2>OUR HISTORY</h2>
			<p>
				 The vision of Marshall has always been to support people that play <br>
				 so it should come as no surprise that that’s how the story of Marshall Records began. When we received a letter from a mother asking <br>
				 for an amp for her son, we never could have imagined the journey that <br>
				 we were about to embark on. Over the following years, the guitarist’s mother continued to update us on his progress and it quickly became clear that <br>
				 he was hugely talented. The guitarist was in fact, King Creature’s riff master Dave Evans. When Dave teamed up with three other local musicians to form King Creature, we knew we had to be involved in their music. In January 2017, we launched Marshall Records, providing a platform for King Creature and other talented acts to take their music forward. Within the first year, <br>
				 the label signed five acts and both its roster and reach continues to grow.
			</p>
		</div>
		<div class="records__img">
 <img src="/local/templates/test-bitrix/img/records.jpg" alt="">
		</div>
	</div>
</div>
 </section> <section class="artists">
<div class="container">
	<h2>
	artists </h2>
	<div class="artists__list">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"artist_list", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "Artists",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/artist/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "artist_list",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		)
	),
	false
);?>
	</div>
</div>
 </section> <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>