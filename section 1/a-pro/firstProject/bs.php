<?php
require_once("db.php");
$conn = new mysqli("localhost", "root", "", "firstproject");
if($conn -> connect_error){
    die("Error" . $conn -> connect_error);
}
$sql = "CREATE DATABASE firstproject";
if($conn -> query($sql)){
    echo "Connecting success";
}else{
    echo "Error" . $conn -> error;
}
$conn->close();