<?php
$MESS['TITLE'] = 'Настройки модуля';
$MESS['TAB_MAIN_TITLE'] = 'Основное';

$MESS['OPTION_USE_RESTFUL_API'] = 'Использовать RESTful API';
$MESS['OPTION_USE_RESTFUL_API_SELECT_TITLE_1'] = 'Отключено';
$MESS['OPTION_USE_RESTFUL_API_SELECT_TITLE_2'] = 'Включено';
$MESS['OPTION_USE_RESTFUL_API_SELECT_ID_1'] = 'N';
$MESS['OPTION_USE_RESTFUL_API_SELECT_ID_2'] = 'Y';
$MESS['OPTION_USE_RESTFUL_API_SELECT_HINT'] = 'Если параметр включён, тогда будет возможность использовать RESTful API на сайте.';

$MESS['OPTION_PATH_RESTFUL_API'] = 'Путь RESTful API';
$MESS['OPTION_PATH_RESTFUL_HINT'] = 'Путь по которому будет доступен интерфейс.<br><br>Пример: <b>/api/</b>';

$MESS['OPTION_USE_VERSIONS'] = 'Использовать версии';
$MESS['OPTION_USE_VERSIONS_SELECT_TITLE_1'] = 'Отключено';
$MESS['OPTION_USE_VERSIONS_SELECT_TITLE_2'] = 'Включено';
$MESS['OPTION_USE_VERSIONS_SELECT_ID_1'] = 'N';
$MESS['OPTION_USE_VERSIONS_SELECT_ID_2'] = 'Y';
$MESS['OPTION_USE_VERSIONS_SELECT_HINT'] = 'Если параметр включён, тогда будет учитываться версия контроллера обрабатывающего запрос.<br><br>Например: /api/<b>v1</b>/ - в этом случае интерфейс будет подключать контроллер, который располагается по пути: [папка модуля]/lib/controllers/<b>v1</b>/[название контроллера].';

$MESS['OPTION_OPERATING_MODE'] = 'Режим работы';
$MESS['OPTION_OPERATING_MODE_SELECT_TITLE_1'] = 'Объектно-ориентированный (По умолчанию)';
$MESS['OPTION_OPERATING_MODE_SELECT_TITLE_2'] = 'Файловый';
$MESS['OPTION_OPERATING_MODE_SELECT_TITLE_3'] = 'Объектно-ориентированный + Файловый';
$MESS['OPTION_OPERATING_MODE_SELECT_ID_1'] = 'OBJECT_ORIENTED';
$MESS['OPTION_OPERATING_MODE_SELECT_ID_2'] = 'FILE';
$MESS['OPTION_OPERATING_MODE_SELECT_ID_3'] = 'OBJECT_ORIENTED_FILE';
$MESS['OPTION_OPERATING_MODE_HINT'] = 'Объектно-ориентированный - запрос будет обрабатываться соответствующим контроллером (объектом класса) и методом класса, который распологается в папке модуля (см. документацию).<br><br>Файловый - запрос будет обрабатываться контроллером, который располагается по "одноимённому" физическому пути (см. документацию).<br><br>Объектно-ориентированный + Файловый - при запросе будет происходить поиск контроллера в папке модуля, при неудачной же попытке, поиск будет происходить по "одноимённому" физическому пути (см. документацию).';

$MESS['BTN_SAVE'] = 'Сохранить';
$MESS['BTN_RESTORE'] = 'Сбросить';
$MESS['OPTIONS_SAVED'] = 'Настройки сохранены';
$MESS['OPTIONS_RESTORED'] = 'Настройки сброшены';