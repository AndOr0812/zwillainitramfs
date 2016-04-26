<?php
require_once('abstract.php');
/**
 * Configuring PoolPicker
 *
 * @author Stoyvo
 */

class Config_PoolPicker extends Config_Abstract {

    // Settings
    protected $_config = '/config/user_data/configs/poolpicker.json';
    protected $_url = 'https://zwilla.de/api';
    protected $_algorithms = array();

    /*
     * Specific to class
     */

    protected function add($algorithms) {
        $this->_algorithms = $algorithms;
    }

    public function create() {
        $this->_data = array();
        foreach ($_POST['algorithms'] as $algorithm) {
            $this->_data[] = $algorithm;
        }

        $this->_fileHandler->delete();
        return $this->write();
    }

    public function getConfig() {
        return $this->_data;
    }

    public function remove() {
        return $this->_fileHandler->delete();
    }

}
