<?php
$matricule=$_GET['matricule'];

require_once('Conn.php');
try{
    $strconnection='mysql:host=localhost;dbname=myschool';

    $pdo=new PDO($strconnection,'root','');

    echo ("connection ok");



}catch (PDOException $e){
    echo  $e->getMessage();
}
$save=$pdo->prepare("delete from etudient where matricule_etudient=?;");
$list=array($matricule);
$save->execute($list);

header("location:ListeEtudient.php?verifie=ok");


