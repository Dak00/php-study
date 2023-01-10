<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
</head>
<body>

<form action="first.php" method="post">
  <p>Name: <input type="text" name="name" /></p>
  <p>Age: <input type="text" name="age" /></p>
  <p><input type="submit" name="submit" value="Submit" /></p>
</form>

<!-- <form action="first.php" method="POST">
    <p>User 1 <input type="text" name="users[]"></p>
    <p>User 2 <input type="text" name="users[]"></p>
    <p>User 3 <input type="text" name="users[]"></p>
    <p><input type="submit" name="submit" value="Submit" /></p>
</form> -->

    <?php
    function myFunc(){
    echo "<strong>PHP not is awesome!</strong>";
}
myFunc();

echo"<br />";

    // $a = readline();
    // $b = readline();
    //  for(; $a <= $b; $a++){
    //      if($a %2 !=0){
    //      continue;
    //      }
    //         echo "$a ";
    //     }
    

    
//     for ($i = 0; $i <= 10; $i++) {
//         if($i%2 != 0){
//         continue;
//         }
//             echo $i."\n";
//         }
        
//         $x = 0;
// while($x <= 7) {
//    $x++;
// }
// echo $x;

        
        
        
//   define("MSG", "Привет, Степик!");
//   echo MSG;

//    // Выводит "Привет, Степик!"
//    echo "</br>";
//     $name = "Darkhan";
//     function getName(){
//         global $name;
//         echo $name;
//     }
//     getName();
// $name = array(
//     'outline' => array('Daved'),
//     'gett' => array('dada'),

// );
// echo $name['outline'][0];
    ?>
    <?php include 'footer.php';?>
</body>
</html>