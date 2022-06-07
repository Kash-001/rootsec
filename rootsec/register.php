<?php
session_start();
$datausrdb=$_POST['username'];
$datapwdb=$_POST['password'];
$pwconf=$_POST['passwordconf'];
$ercode="";
$link = new PDO('mysql:host=localhost;dbname=rootsec', "root","");
$id = $link->query("SELECT max(id) FROM datas")->fetch()[0];
if($id == NULL) {
    $id=1;
} else{
    $id+=1;
}

$sql = "INSERT INTO Datas (datausr, datapw, id) VALUES ('$datausrdb','$datapwdb','$id')";

if($datapwdb === $pwconf){
    try {
        $return=$link->exec($sql);
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
}else {
    $ercode="pw";
}

switch ($ercode) {
    case "pw":
        header('Location: register.html');
        break;
    case "db":
        header('Location: errormanager.php');
        break;
    default:
        header('Location: registered.php');
        
}
?>