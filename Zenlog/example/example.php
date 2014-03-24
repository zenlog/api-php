<?php
/**
 * @author Zenlog (it@zenlog.com.br)
 *
 */

set_include_path(get_include_path().':../../');
require_once 'init.php';

$volume = new Zenlog_Model_Volume();
$volume->weight = 10;
$volume->volume_type = ZenlogSettings::ZENLOG_VOLUME_BOX;
$volume->cost_of_goods = "10";
$volume->width = ZenlogSettings::ZENLOG_DEFAULT_WIDTH;
$volume->height = ZenlogSettings::ZENLOG_DEFAULT_HEIGHT;
$volume->length = ZenlogSettings::ZENLOG_DEFAULT_LENGTH;

$request = new Zenlog_Model_Request();
$request->origin_zip_code = "01001-100";
$request->destination_zip_code = "04037-002";
array_push($request->volumes, $volume);

$e = new Zenlog("projecta", "mate20mg");

echo "Result:\n";
var_dump($e->calculateShippingCost($request));
