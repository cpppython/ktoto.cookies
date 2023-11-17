<?
/**
 * Created by Kto-to-eshe - 2023
 * @ Offers for full-time work: magicnotepad@yandex.ru
 * @ Technical support for the module, other questions: magicnotepad@gmail.com
 * @ https://www.1c-bitrix.ru/partners/18365340.php
 * @ https://kwork.ru/user/kto-to-eshe
 */

use \Bitrix\Main\Loader;
use \Bitrix\Main\Application;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 
 
class CookiesNontiComp extends CBitrixComponent {

    private function _checkModules() {
        if (!Loader::includeModule("ktoto.cookies")) {
            throw new \Exception(Loc::GetMessage("KTOTO_COOKIES_MODULE_ERROR_MSG"));
        }
        return true;
    }

    public function getModuleParams() {
        $options = \Ktoto\Cookies\Options::getAll();
        if (empty($options["text_".LANGUAGE_ID])) {
            $options["text_".LANGUAGE_ID] = Loc::GetMessage("KTOTO_COOKIES_BIGTEXT");
        }
        if (empty($options["buttontext_".LANGUAGE_ID])) {
            $options["buttontext_".LANGUAGE_ID] = Loc::GetMessage("KTOTO_COOKIES_TEXT_ON_BUTTON");
        }
        return $options;
    }

    public function executeComponent() {
        $this->_checkModules();
        
        $this->arResult["OPTIONS"] = $this->getModuleParams();

        $this->includeComponentTemplate();
    }
}

?>