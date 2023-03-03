<?php
require "scripts/userLogged.php";
require "scripts/logout.php";
?>

<h1>
  Welcome <?php echo $username ?>
</h1>
<form method="post" action="scripts/logout.php">
    <input type="submit" name="logout" value="Logout">
</form>
