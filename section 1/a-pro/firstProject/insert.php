<?php
require_once("db.php");
$conn = new mysqli("localhost", "root", "root", "firstproject");
if($conn -> connect_error){
    die("Error" . $conn -> connect_error);
}
$sql = "INSERT INTO Users (name, age) VALUES ('$name', $age)";
if($conn -> query($sql)){
    echo "Connecting success";
}else{
    echo "Error" . $conn -> error;
}
$conn->close();