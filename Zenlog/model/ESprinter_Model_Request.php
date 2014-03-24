<?php
/**
 * @author eSprinter (it@e-sprinter.com.br)
 */

class ESprinter_Model_Request {
    public $origin_zip_code;
    public $destination_zip_code;
    /**
     * @var ESprinter_Data_Volume[]
     */
    public $volumes = array();
} 