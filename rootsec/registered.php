<?php
session_start();
$datausrdb=$_SESSION['username'];
$datapwdb=$_SESSION['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>REGISTER</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" href="icon.png">
</head>
<body>
    <form class="formreg">
        <h1>Rootsec REGISTER</h1>
        <p><center>You have been registered as :<br> <?php echo($datausrdb) ?></center></p>
        <p><br><center>With password as following :<br> <?php echo($datapwdb) ?></center></p>
    </form>
</body>
</html>