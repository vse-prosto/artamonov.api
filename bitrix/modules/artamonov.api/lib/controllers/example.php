<?php


namespace Artamonov\Api\Controllers;


use Artamonov\Api\Request;
use Artamonov\Api\Response;
use Bitrix\Main\Loader;
use CIBlockElement;

class Example
{
    public function check()
    {
        $arResult = $this->getRequest();
        $arResult['IBLOCK_DATA'] = $this->getIblockData(1);
        $arResult['OPERATING_METHOD'] = 'OBJECT_ORIENTED';
        Response::ShowResult($arResult);
    }

    // Get current request
    private function getRequest()
    {
        return Request::get();
    }

    // Get data iblock
    private function getIblockData($id)
    {
        $arResult = [];
        if (Loader::includeModule('iblock')) {
            if ($result = CIBlockElement::getList(['ID' => 'DESC'], ['IBLOCK_ID' => $id, 'ACTIVE' => 'Y'], false, false, ['ID', 'NAME'])) {
                while ($ar = $result->fetch()) {
                    $arResult[] = $ar;
                }
            }
        }
        return $arResult;
    }
}