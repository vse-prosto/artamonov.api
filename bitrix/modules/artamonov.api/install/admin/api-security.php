<?php

$local = $_SERVER['DOCUMENT_ROOT'] . '/local/modules/artamonov.api/admin/pages/api-security.php';
$bitrix = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/artamonov.api/admin/pages/api-security.php';

if (file_exists($local)) {
    require_once $local;
}elseif (file_exists($bitrix)){
    require_once $bitrix;
}