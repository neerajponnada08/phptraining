<?php

$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password);

if($conn->connect_error){
    die("Error connecting to server");
}else{
    echo "Connection is created<br>";
    if($conn->query("CREATE DATABASE IF NOT EXISTS MyDB")){
        echo "Database created successfully<br>";
    }else{
        echo "Database not created successfully<br>";
    }
}

$conn->close();

?>