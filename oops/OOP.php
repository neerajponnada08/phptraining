<?php

class Complex{

    public $real;
    public $imag;

    function setReal($real){
        $this->real = $real;
    }

    function setimag($imag){
        $this->imag = $imag;
    }

    function getReal(){
        return $this->real;
    }

    function getimag(){
        return $this->imag;
    }

}

class Class1{

    private $var1;
    private $var2;

    function __construct($v1=0, $v2=0)
    {
        $this->var1 = $v1;
        $this->var2 = $v2;
    }

    function getValues(){
        echo "Var1: " . $this->var1 . "<br>";
        echo "Var2: " . $this->var2 . "<br>";
    }

    function __destruct()
    {
        echo "Destructor called...<br><br>";
        unset($this->var1);
        unset($this->var2);
    }
}

$obj1 = new Complex();
$obj1->setReal(100);
$obj1->setimag(200);

echo "Real: " . $obj1->getReal() . "<br>";
echo "Imag: " . $obj1->getimag() . "<br><br>";

var_dump($obj1);

$obj2 = new Complex();
$obj2->setReal(300);
$obj2->setimag(400);

echo "<br><br>";

var_dump($obj2);

echo "<br><br>" . $obj1->real . "<br>";

echo "<br>" . $obj1->imag . "<br>";

$clsobj = new Class1(10, 20);
$clsobj->getValues();

$clsobj2 = new Class1();
$clsobj2->getValues();

?>