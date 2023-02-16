<?php
require_once("db.php");
$conn = new mysqli("localhost", "root", "root", "firstproject");
if($conn -> connect_error){
    die("Error" . $conn -> connect_error);
}
$sql = "CREATE TABLE Users (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), age INTEGER)";
if($conn -> query($sql)){
    echo "Connecting success";
}else{
    echo "Error" . $conn -> error;
}
$conn->close();