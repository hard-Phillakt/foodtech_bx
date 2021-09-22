<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include.php';

/*
 * title
 * description
 * img_url (/upload/global/equpiment/goods/goods-4/vik2.jpg)
 * alias (rucnoj-etiketirovocnyj-kompleks-rek)
 * model (Модели)
 * opportunities (Возможности)
 * accessories (Аксессуары)
 * specifications (Характеристики)
 * */


/* ОБОРУДОВАНИЕ

 * Взвешивание и маркировка - 1
 * Фасовка и сортировка - 2
 * Инспекция  и контроль - 3
 * Упаковка в пленку и запайка лотков - 4
 * Промышленные весы - 5
 * Промышленные компьютеры - 6
 * Заклейщики и формирователи коробов - 7
 * Формирователи потоков - 24
 * Паллетообмотчики - 25
 * Коллаборативный робот UR - 26
 *
 * */

/* Комплектующие

 * Металлообработка - 16
 * Изделия  из пластмасс - 17
 * Сборные изделия - 18
 * Ремни - 19
 * Силиконовые валики - 20
 * Термоголовки - 21
 * Тефлоновые ремни - 22
 * Транспортировочные ленты - 23
 *
 * */

$get = file_get_contents('https://foodtech.su/json/json-all-prod');

$jsonData = json_decode($get, true);

foreach ($jsonData as $key){

    // Взвешивание и маркировка
    if($key['parent_id'] == 23){

        if(CModule::IncludeModule("iblock")) {

            $el = new CIBlockElement();

            $PROP = [];
            $PROP[1] = $key['specifications']; // (Характеристики)
            $PROP[2] = $key['opportunities']; // (Возможности)
            $PROP[3] = $key['model']; // (Модели)
            $PROP[4] = $key['accessories']; // (Аксессуары)

            $strTitle = mb_strtolower($key['title']);

            $arLoadProductArray = Array(
                "MODIFIED_BY"    => 1, // элемент изменен текущим пользователем
                "IBLOCK_SECTION_ID" => 18, // элемент лежит в корне раздела
                "IBLOCK_ID"      => 2,
                "PROPERTY_VALUES"=> $PROP,
                "NAME"           => $strTitle,
                "ACTIVE"         => "Y",
                "CODE"         => $key['alias'],
                "PREVIEW_TEXT"   => $key['description'],
                "DETAIL_TEXT"    => $key['description'],
                "PREVIEW_PICTURE"   => CFile::MakeFileArray('https://foodtech.su' . $key['img_url']),
                "DETAIL_PICTURE" => CFile::MakeFileArray('https://foodtech.su' . $key['img_url'])
            );

        }
    }

}






