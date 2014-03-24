<?php
/**
 * @author eSprinter (it@e-sprinter.com.br)
 */

set_include_path(get_include_path().':../../');
require_once 'e-sprinter.php';

$volume = new ESprinter_Model_Volume();
$volume->weight = 10;
$volume->volume_type = ESprinterSettings::ESPRINTER_VOLUME_BOX;
$volume->cost_of_goods = "10";
$volume->width = ESprinterSettings::ESPRINTER_DEFAULT_WIDTH;
$volume->height = ESprinterSettings::ESPRINTER_DEFAULT_HEIGHT;
$volume->length = ESprinterSettings::ESPRINTER_DEFAULT_LENGTH;

$request = new ESprinter_Model_Request();
$request->origin_zip_code = "01001-100";
$request->destination_zip_code = "04037-002";
array_push($request->volumes, $volume);

$e = new ESprinter("projecta", "mate20mg");

echo "Result:\n";
var_dump($e->calculateShippingCost($request));
