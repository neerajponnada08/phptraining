<?php

/*
class A{
    function fun1(){
        echo "Function1 called<br>";
    }
}

class B extends A{
    function fun2(){
        echo "Function2 called<br>";
    }
}

$obj1 = new B();
$obj1->fun1();
$obj1->fun2();
*/


/*
class ParentClass{
    var $var = "This is first variable<br>";
    protected $first_name;

    function setFirst_name($first_name)
    {
        echo "<br>SetFirstname is called<br>";
        $this->first_name = $first_name;
    }
}

class ChildClass extends ParentClass {
    function setVal($set_val){
        $this->first_name = $set_val;
    }

    function getVal(){
        return $this->first_name;
    }

}

$o1 = new ChildClass();
$o1->setVal("Neeraj");
echo $o1->getVal();
*/

class ParentClass{
    var $var = "This is first varmessage inside parentclass<br>";
    protected $first_name;

    function getName(){
        return $this->first_name;
    }

    function setName($newName){
        $this->first_name = $newName;
    }
}

class Child1 extends ParentClass{
    function setValChild1($name){
        $this->first_name = $name;
    }

    function getValChild1(){
        echo "<br/> getVal method from Child1 class is called";
    }

}

class Child2 extends Child1{

    function setValChild2($name){
        $this->first_name = $name;
    }

    function getValChild2(){
        echo "<br/> getVal method from Child2 class is called";
    }

}

$obj1=new Child1();
$obj1->setValChild1("Eshan");
echo $obj1->getValChild1();

$obj2=new Child2();
$obj2->getName();
$obj2->getValChild1();
$obj2->getValChild2();

?>