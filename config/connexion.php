<?php

    // Enable us to use Headers
    ob_start();

    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }

    $dbhost="localhost";
    $port=3306;
    $dbname="monvol";
    $user="root";
    $pwd="";

    try{
        $connexion = new PDO('mysql:host=' .$dbhost. ';port='.$port.';dbname='.$dbname.'',$user,$pwd);
        echo "connexion reussi";
    }
    catch(PDOexception $except){
        printf("echec de la connexion");
    }