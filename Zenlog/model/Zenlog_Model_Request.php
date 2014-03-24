<?php
/**
 * @author Zenlog (it@zenlog.com.br)
 *
 */

namespace Zenlog;

class Zenlog_Model_Request {
    public $origin_zip_code;
    public $destination_zip_code;
    /**
     * @var Zenlog_Data_Volume[]
     */
    public $volumes = array();
} 