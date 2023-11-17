<?
/**
 * Created by Kto-to-eshe - 2023
 * @ Offers for full-time work: magicnotepad@yandex.ru
 * @ Technical support for the module, other questions: magicnotepad@gmail.com
 * @ https://www.1c-bitrix.ru/partners/18365340.php
 * @ https://kwork.ru/user/kto-to-eshe
 */

ini_set('error_reporting', 0);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
global $APPLICATION;

\Bitrix\Main\Loader::registerAutoLoadClasses("ktoto.cookies", [
	"Ktoto\Cookies\Options" 	=>	"lib/options.php"
]);

if (strpos($_SERVER['REQUEST_URI'], 'bitrix/') === FALSE) {
	$APPLICATION->IncludeComponent("ktoto:cookies", "", []);
}
?>