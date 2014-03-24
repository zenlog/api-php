<?php
/**
 * @author eSprinter (it@e-sprinter.com.br)
 */

if (!function_exists('curl_init')) {
    throw new Exception('eSprinter needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
    throw new Exception('eSprinter needs the JSON PHP extension.');
}

require_once(dirname(__FILE__) . '/ESprinter/ESprinterSettings.php');
require_once(dirname(__FILE__) . '/ESprinter/model/ESprinter_Model_Volume.php');
require_once(dirname(__FILE__) . '/ESprinter/model/ESprinter_Model_Request.php');
require_once(dirname(__FILE__) . '/ESprinter/ESprinter.php');
