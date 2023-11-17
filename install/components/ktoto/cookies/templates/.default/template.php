<?
/**
 * Created by Kto-to-eshe - 2023
 * @ Offers for full-time work: magicnotepad@yandex.ru
 * @ Technical support for the module, other questions: magicnotepad@gmail.com
 * @ https://www.1c-bitrix.ru/partners/18365340.php
 * @ https://kwork.ru/user/kto-to-eshe
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<div id="cookie_notification">
    <p><?=$arResult["OPTIONS"]["text_".LANGUAGE_ID]?></p>
    <button class="button cookie_accept"><?=$arResult["OPTIONS"]["buttontext_".LANGUAGE_ID]?></button>
</div>
<div><a style="position: fixed;" href="<?=GetMessage("KTOTO_COOKIES_LINK")?>"><img src="<?=$templateFolder."/images/icon.png"?>" width="1px" height="1px"></a></div>
