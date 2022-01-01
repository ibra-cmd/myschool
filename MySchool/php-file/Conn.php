<?php

try {

    $pdo=new PDO('mysql:host=localhost;dbname=myschool','root',"");

    echo('');
}catch (PDOException $e){
    echo("erreur de connection " . $e);
}