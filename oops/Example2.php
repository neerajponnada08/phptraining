<?php

class MyClass{
    private $data=array();
    public $declared=1;
    private $hidden=2;

    public function __construct(){
        echo "<br/> Constructor is called";
    }
    public function __set($name,$value){
        echo "<br/>Setting '$name' to '$value',<br/>";
        $this->data[$name]=$value;
    }
}


$obj1=new MyClass();
$obj1->a=1;

// $obj1=new MyClass();
// // echo $obj1->data;
// echo $obj1->declared;



?>