<?php
session_start();
$id = $_SESSION['id'];
$email = $_SESSION['userSession'];

?>
<p align="right"><a href="Logout.php">Logout</a> </p>
<h1 align="center"> Welcome <?php echo $_SESSION['name']; ?></h1>
    <p align="center">Your Email is : <?php echo $email ?></p>
