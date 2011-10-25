<?php
namespace Openyard;

use Silex\Application;
//use Silex\Provider\DoctrineServiceProvider;

class ProductManager {
    private $test;
    private $conn;

    public function __construct() {
        $this->test = 12;
    }

    public function getTest() {

        return $this->test;
    }

    public function setTest($val) {

        $this->test = $val;
        return true;
    }

    public function ddb(Application $app) {

              $test = $app['db'];
              $results = $test->fetchAssoc('SELECT * FROM test_table');
              var_dump($results);
        
        
        echo "test";

    }

}