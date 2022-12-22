<?php
$severname="localhost";
$username="root";
$password="";
$dbname="mydb";

$conn=mysqli_connect($severname,$username,$password,$dbname);
$file=fopen("records.txt","w") or die("Can't open ");

$id=$_REQUEST['empId'];
$name=$_REQUEST['name'];
$salary=$_REQUEST['salary'];

//check connection
if($conn->connect_error){
    echo "Error connecting to mysql";
}
else{
    echo "connected successfully";
}
$insert_query="insert into employee values (".$id.",'".$name."',".$salary.");";
echo $insert_query;
if($conn->query($insert_query)==true) {
    echo "Record inserted successfully";
    fwrite($file,"Id ".$id."Name:".$name."Salary".$salary."\n");
}
else{
    echo "Table is not created successfully";
}

$conn->close();
?>