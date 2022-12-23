<?php

class DemoClass{
    public function __call($name,$arguments){
        echo "<br/>Calling object method <mark> $name </mark> arguments <mark>". implode(',',$arguments)."</mark><br/>";
    }

}

$obj1=new DemoClass();
$obj1->runTest('in object context');

?>