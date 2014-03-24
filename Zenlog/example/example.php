<?php
/**
 * @author Zenlog (it@zenlog.com.br)
 *
 */

require_once 'spoon.php';

$volume = new Zenlog_Model_Volume();
$volume->weight = 10;
$volume->volume_type = Zenlog_Settings::ZENLOG_VOLUME_BOX;
$volume->cost_of_goods = "10";
$volume->width = Zenlog_Settings::ZENLOG_DEFAULT_WIDTH;
$volume->height = Zenlog_Settings::ZENLOG_DEFAULT_HEIGHT;
$volume->length = Zenlog_Settings::ZENLOG_DEFAULT_LENGTH;

$request = new Zenlog_Model_Request();
$request->origin_zip_code = "01001-100";
$request->destination_zip_code = "04037-002";
array_push($request->volumes, $volume);

$zenlog = new Zenlog("projecta", "mate20mg");

echo "Result:\n";
var_dump($zenlog->calculateShippingCost($request));
