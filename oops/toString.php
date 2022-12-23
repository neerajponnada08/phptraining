<?php

class myClass{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        echo "<br>Constructor is called<br>";
        $this->name = $name;
        $this->age = $age;
    }

    public function __destruct()
    {
        echo "<br>Destructor called for ".$this->name." <br>";
    }

    public function showValues(){
        echo "<br> Values are <br>Name: " . $this->name . "<br>Age: " . $this->age . "<br>";
    }

    public function __toString()
    {
        return "<br> From to string menthod, Values are, <br>Name: " . $this->name . "<br>Age: " . $this->age . "<br>";
    }

}

// $o1 = new myClass("Neeraj", 23);
// echo "<br>Before unsetting<br>";
// unset($o1);
// echo "<br>After unsetting<br>";

$o2 = new myClass("Sindhu", 21);

$o2->showValues();

echo $o2;

?>