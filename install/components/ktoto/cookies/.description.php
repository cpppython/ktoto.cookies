<?
/**
 * Created by Kto-to-eshe - 2023
 * @ Offers for full-time work: magicnotepad@yandex.ru
 * @ Technical support for the module, other questions: magicnotepad@gmail.com
 * @ https://www.1c-bitrix.ru/partners/18365340.php
 * @ https://kwork.ru/user/kto-to-eshe
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 

use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

$arComponentDescription = [
	"NAME" => Loc::GetMessage("KTOTO_COMPONENT_COOKIES_NAME"),
	"DESCRIPTION" => Loc::GetMessage("KTOTO_COMPONENT_COOKIES_DESCRIPTION_NAME"),
	"PATH" => [
		"ID" => "ktoto.components",
		"NAME" => Loc::GetMessage("KTOTO_COMPONENT_COOKIES_GROUP_NAME"),
		"DESCRIPTION" => Loc::GetMessage("KTOTO_COMPONENT_COOKIES_GROUP_DESCRIPTION"),
	]
];

?>