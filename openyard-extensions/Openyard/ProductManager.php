<?php
namespace Openyard;

class ProductManager {
    private $test;

    public function __construct() {
        $this->test = 12;
    }

    public function getTest() {

    //$app['db']['testsilex']->fetchAssoc('Select * FROM test_table');



        return $this->test;
    }

    public function setTest($val) {
        $this->test = $val;
        return true;
    }
   
}