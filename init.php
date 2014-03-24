<?php
/**
 * @author Zenlog (it@zenlog.com.br)
 *
 */

if (!function_exists('curl_init')) {
    throw new Exception('Zenlog needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
    throw new Exception('Zenlog needs the JSON PHP extension.');
}

require_once(dirname(__FILE__) . '/Zenlog/ZenlogSettings.php');
require_once(dirname(__FILE__) . '/Zenlog/model/Zenlog_Model_Volume.php');
require_once(dirname(__FILE__) . '/Zenlog/model/Zenlog_Model_Request.php');
require_once(dirname(__FILE__) . '/Zenlog/Zenlog.php');
