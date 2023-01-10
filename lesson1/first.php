<?php
$name = "unknown";
$age = "unknown";
if(isset($_POST["name"])){
    // $name=htmlentities($_POST["name"]);
    $name=$_POST["name"];
}
if(isset($_POST["age"])){
    $age=$_POST["age"];
}
echo "Name: $name <br /> Age: $age";

// if(isset($_POST["users"])){
//     $users = $_POST["users"];
//     echo "In massive \t ". count($users) . "\t elements <br />";
//     foreach($users as $user){
//         echo "$user <br />";
//     }
// }
?>