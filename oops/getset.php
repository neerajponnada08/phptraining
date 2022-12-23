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

    public function __get($name){
        echo "<br/>Getting '$name'";
        if(array_key_exists($name,$this->data)){
            return $this->data[$name];
        }else{
            echo "<br/>Nothing found";
        }
    }

    public function __isset($name)
    {
        echo "Is '$name' set?<br>";
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        echo "<br> Unsetting '$name'";
        unset($this->data[$name]);
    }
}


$obj1=new MyClass();
$obj1->a=1;
echo $obj1->b;
var_dump(isset($obj1->a));
unset($obj1->a);


// $obj1=new MyClass();
// // echo $obj1->data;
// echo $obj1->declared;



?>