<?php

class Employee{
    private $empid;
    private $name;
    private $basicSalary;

    public function __construct($empid, $name, $basicSalary){
        $this->empid = $empid;
        $this->name = $name;
        $this->basicSalary = $basicSalary;
    }

    public function __destruct()
    {
        unset($this->empid);
        unset($this->name);
        unset($this->basicSalary);
    }


    public function printDetails(){
        $out = "";
        $out .= "<br>";
        $out .= "Employee Details<br>";
        $out .= "Empid: ".$this->empid."<br>";
        $out .= "Name: ".$this->name."<br>";
        $out .= "Basic Salary: ".$this->basicSalary."<br>";
        return $out;
    }

    
}

// $obj1 = new Employee(1,'Neeraj',25000);
// $obj1->__get("Sindhu");
// $obj1->__set("Sindhu", "12");
// $obj1->printDetails();


class Sales extends Employee{
    private $salesId;
    private $obj;

    public function __construct($salesid,$empid,$name,$basicSalary){
        $this->salesId = $salesid;
        $obj = new Employee($name, $basicSalary, $empid);
        $this->obj = $obj;
    }

    public function __toString()
    {
        return $this->obj->printDetails();
    }
}

echo "<br><br><br>";
$childobbj = new Sales(1,1,'Neeraj',10000);
echo $childobbj;

?>