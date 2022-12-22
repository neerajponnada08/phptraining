<?php

$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password);

if($conn->connect_error){
    die("Error connecting to server");
}else{
    echo "Connection is created ";
    if($conn->query("CREATE DATABASE IF NOT EXISTS MyDB")){
        echo "Database created successfully";
    }else{
        echo "Database not created successfully";
    }
}

$conn->close();

?>