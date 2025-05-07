<?php 
abstract class Categories{

    public function __construct($name){
        $this->name = $name;
    }

    abstract public function printArticolo();
}


?>