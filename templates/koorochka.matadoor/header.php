<?
/**
 * Powered by Artem Koorochka
 * artem@koorochka.com
 * @global CMain $APPLICATION
 */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset,
    Bitrix\Main\Localization\Loc;

Loc::loadLanguageFile(__FILE__);
//CJSCore::Init(array("fx", "ajax"));

global $page;
$page = $APPLICATION->GetCurPage(true);

/**
 * Formating metatags
 */
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">');

/**
 * Output meta tags
 */
echo "<!DOCTYPE html>";
echo "<html lang=\"" . LANGUAGE_ID . "\">";
echo "<head>";
echo "<title>";
$APPLICATION->ShowTitle();
echo "</title>";
$APPLICATION->ShowHead();
echo "</head>";
echo "<body>";
$APPLICATION->ShowPanel();
?>