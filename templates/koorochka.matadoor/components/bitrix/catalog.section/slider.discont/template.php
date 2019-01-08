<?
// <editor-fold defaultstate="collapsed" desc="Qualification">
/**
 * developed by artem@koorochka.com
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 */
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->addExternalJs(SITE_TEMPLATE_PATH . "/js/koorochka.catalog.item.min.js");
// </editor-fold>
?>
<div class="catalog-section-slider mb-5">
    <div class="row flex-nowrap pb-5"
         id="matadoor-discont-slider">
        <?
        // <editor-fold defaultstate="collapsed" desc="Catalog item 1.1">
        foreach ($arResult['ITEMS'] as $item):
        $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
            <div id="<?=$this->GetEditAreaId($item['ID']);?>"
                 data-sticker="discont"
                 onmouseenter="window.koorochkaCatalogItem.mouseenter(this)"
                 onmouseleave="window.koorochkaCatalogItem.mouseleave(this)"
                 class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center item">

                <a class="catalog-item-img mb-2"
                   href="<?=$item["DETAIL_PAGE_URL"]?>">
                    <img class="img-thumbnail"
                         src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>"
                         width="<?=$item["PREVIEW_PICTURE"]["WIDTH"]?>"
                         height="<?=$item["PREVIEW_PICTURE"]["HEIGHT"]?>"
                         title="<?=$item["PREVIEW_PICTURE"]["TITLE"]?>"
                         alt="<?=$item["PREVIEW_PICTURE"]["ALT"]?>">
                </a>

                <a href="<?=$item["DETAIL_PAGE_URL"]?>"
                   class="text-uppercase text-bold d-block mb-2"><?=$item["NAME"]?></a>

                <div class="catalog-item-price">
                    <?foreach ($item["ITEM_PRICES"] as $price):?>
                        <div class="h4"><?=$price["PRINT_RATIO_PRICE"]?></div>
                    <?endforeach;?>
                </div>

            </div>
        <?
        endforeach;
        // </editor-fold>
        ?>
    </div>

    <div class="carousel-controls text-center mt-3">
        <span class="btn btn-outline-danger" onclick="return window.koorochkaDiscontSlider.slidePrev()">&lsaquo;</span>
        <?
        // <editor-fold defaultstate="collapsed" desc="Catalog items pagination">
        foreach ($arResult['ITEMS'] as $i=>$item):?>
            <span class="btn btn-outline-danger paginator" onclick="return window.koorochkaDiscontSlider.slideTo(<?=$i?>)"></span>
        <?endforeach;
        // </editor-fold>
        ?>
        <span class="btn btn-outline-danger" onclick="return window.koorochkaDiscontSlider.slideNext()">&rsaquo;</span>
    </div>
</div>