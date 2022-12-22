<?php

$servername="localhost";
$username="root";
$password="";
$database="mydb";
$conn=new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
    die("Error connecting to server");
}else{
    echo "Connection is created<br> ";

    if(isset($_POST['save'])){
        $name=$_POST['name'];
        $address=$_POST['address'];

        mysqli_query($conn,"INSERT INTO USER(name,address) VALUES ('$name','$address')");
        echo "Record saved successfully<br>";
    }

    if(isset($_POST['display'])){
        $result = mysqli_query($conn, "SELECT * FROM USER");
        echo "
        <table border='2px'>
            <thead>
                <tr><th>Name</th><th>Address</th></tr>
            </thead>
        </table>
           
        ";
        while ($row = mysqli_fetch_array($result)) {
            // echo $row['name'] . " " . $row['address'] . "\n";
            echo "<tr border='2px'>
                <td>".$row['name']." </td>
                <td>".$row['address']."</td>
            </tr><br>";
        }
        
    }

    // if($conn->query("CREATE DATABASE IF NOT EXISTS MyDB")){
    //     echo "Database created successfully";
    // }else{
    //     echo "Database not created successfully";
    // }
}

$conn->close();

?>