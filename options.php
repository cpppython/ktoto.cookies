<?
/**
 * Created by Kto-to-eshe - 2023
 * @ Offers for full-time work: magicnotepad@yandex.ru
 * @ Technical support for the module, other questions: magicnotepad@gmail.com
 * @ https://www.1c-bitrix.ru/partners/18365340.php
 * @ https://kwork.ru/user/kto-to-eshe
 */

use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
Loader::includeModule("ktoto.cookies");

$aTabs = [
    [
        "DIV" => "template", 
        "TAB" => Loc::GetMessage("KTOTO_COOKIES_TAB_NAME_OPTIONS")
    ],
];
$tabControl = new \CAdminTabControl("tabControl", $aTabs);

if ($_REQUEST["action"] == "save") {
    \Ktoto\Cookies\Options::setAll($_REQUEST["params"]);
}

$options = \Ktoto\Cookies\Options::getAll();
?>

<form method="post"
    action="<?=$APPLICATION->GetCurPage(false)?>?mid=<?=htmlspecialcharsbx($mid)?>&lang=<?=LANGUAGE_ID?>"
    name="post_form">
    <?=bitrix_sessid_post()?>
    <input type="hidden" name="action" value="save">

    <?
    $tabControl->Begin();
    $tabControl->BeginNextTab();
    ?>

    <tr class="heading">
        <td colspan="2"><?=Loc::GetMessage("KTOTO_COOKIES_COMPONENT_VIEW")?> RU</td>
    </tr>
    <tr>
        <td width="40%"><?=Loc::GetMessage("KTOTO_COOKIES_TEXT_ON_BUTTON_TITLE")?></td>
        <td width="60%">
            <input type="text" name="params[buttontext_ru]" size="30" value="<?=$options["buttontext_ru"]?>"
                placeholder="<?=Loc::GetMessage("KTOTO_COOKIES_TEXT_ON_BUTTON")?>">
        </td>
    </tr>
    <tr>
        <td width="40%"><?=Loc::GetMessage("KTOTO_COOKIES_BIGTEXT_TITLE")?></td>
        <td width="60%">
            <textarea type="text" name="params[text_ru]" style="width: 300px; height: 100px;" value="<?=$options["text_ru"]?>"
                placeholder="<?=Loc::GetMessage("KTOTO_COOKIES_BIGTEXT")?>"><?=$options["text_ru"]?></textarea>
        </td>
    </tr>

    <tr class="heading">
        <td colspan="2"><?=Loc::GetMessage("KTOTO_COOKIES_COMPONENT_VIEW")?> EN</td>
    </tr>
    <tr>
        <td width="40%"><?=Loc::GetMessage("KTOTO_COOKIES_TEXT_ON_BUTTON_TITLE")?></td>
        <td width="60%">
            <input type="text" name="params[buttontext_en]" size="30" value="<?=$options["buttontext_en"]?>"
                placeholder="<?=Loc::GetMessage("KTOTO_COOKIES_TEXT_ON_BUTTON_EN")?>">
        </td>
    </tr>
    <tr>
        <td width="40%"><?=Loc::GetMessage("KTOTO_COOKIES_BIGTEXT_TITLE")?></td>
        <td width="60%">
            <textarea type="text" name="params[text_en]" style="width: 300px; height: 100px;" value="<?=$options["text_en"]?>"
                placeholder="<?=Loc::GetMessage("KTOTO_COOKIES_BIGTEXT_EN")?>"><?=$options["text_en"]?></textarea>
        </td>
    </tr>

    <?
    $tabControl->Buttons([
        "disabled" => false,
        "back_url" => false,
    ]);
    $tabControl->End();
    ?>
</form>