<?php
require('Conn.php');
$matricule=$_POST['Matricule'];
$prenom=$_POST['Prenom'];
$nom=$_POST['Nom'];
$age=$_POST['Age'];
$sexe=$_POST['Sexe'];
$numParent=$_POST['numeroParent'];
$numeroEtudient=$_POST['numeroEtudient'];
$adresseEmail=$_POST['adresseEmail'];
$residence=$_POST['Residence'];
$nationalite=$_POST['Nationalite'];
$diplome=$_POST['Diplome'];
$filiere=$_POST['Filiere'];
$classe=$_POST['Classe'];
$dateNaissance=$_POST['dateNaissance'];
$ndateInscription=$_POST['dateInscription'];
$commentaire=$_POST['Commentaire'];

try{
    $strconnection='mysql:host=localhost;dbname=myschool';

    $pdo=new PDO($strconnection,'root','');

    echo ("connection ok");



}catch (PDOException $e){
    echo  $e->getMessage();
}
$save=$pdo->prepare("update etudient set prenom=?, nom=?, age=?, sexe=?, num_parent=?, num_etudient=?, adresse_email=?, residence=?,nationalite=?, diplome_anterieur=?, filiere=?, classe=?, date_naissance=?, date_inscription=?, commentaire=? where matricule_etudient=?");
$list=array($prenom,$nom,$age,$sexe,$numParent,$numeroEtudient,$adresseEmail,$residence,$nationalite,$diplome,$filiere,$classe,$dateNaissance,$ndateInscription,$commentaire,$matricule);
$save->execute($list);

header("location:ListeEtudient.php?verifie=cool");