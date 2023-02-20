<?php

$fullName = "Unknown";
$age = "unknown";
$address = "unknown";
$link = "unknown";


if(empty($_POST["name"])){
    unset($fullName);
}else{
    $fullName = htmlentities($_POST["name"]);
    echo "Full Name: $fullName <br>";
}

if(empty($_POST["age"])){
    unset($age);
}else{
    $age = htmlentities($_POST["age"]);
    echo "Age: $age <br>";
}

if(empty($_POST["address"])){
    unset($address);
}else{
    $address = htmlentities($_POST["address"]);
    echo "Address: $address <br>";
}

if(empty($_POST["Link"])){
    unset($link);
}else{
    $link = htmlentities($_POST["link"]);
    echo "Link: $link <br>";
}