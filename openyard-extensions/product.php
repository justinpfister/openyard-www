<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Justin
 * Date: 10/14/11
 * Time: 3:22 PM
 * To change this template use File | Settings | File Templates.
 */
 
class Product {

    private $title;
    private $id;
    private $description;

    public function setTitle($title) {
        return $this->title = $title;
    }

}