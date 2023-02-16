<?php
$conn = new mysqli("localhost", "root", "", "firstproject");
if($conn -> connect_error){
    die("Error" . $conn -> connect_error);
}
echo "Connecting success";
$conn->close();