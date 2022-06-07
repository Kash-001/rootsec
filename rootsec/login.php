<?php
$usr=$_POST["username"];
$pw=$_POST["password"];
$link = new PDO('mysql:host=localhost;dbname=rootsec', "root","");

$confusr = "SELECT datapw FROM datas WHERE datapw = '$pw'";
$confpw = "SELECT datausr FROM datas WHERE datapw = '$usr'";

try {
    $return=$link->exec($confusr);
    $link = null;
    if($return) {
        $_SESSION['username']=$datausrdb;
        $_SESSION['password']=$datapwdb;
    }else {
        $ercode="db";
    }
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    $ercode="db";
    die();
}


?>