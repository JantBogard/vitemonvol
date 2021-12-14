<?php
$dbhost="localhost";
$port=3306;
$dbname="monvol";
$user="root";
$pwd="";

try{
    $connexion = new PDO('mysql:host=' .$dbhost. ';port='.$port.';dbname='.$dbname.'',$user,$pwd);
    echo "connexion reussi";
}
catch(PDOxception $except){
    printf("echec de la connexion");
}