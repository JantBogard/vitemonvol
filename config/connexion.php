<?php

    // constantes d'environnement
    define("DBHOST", "localhost");
    define("DBUSER", "root");    
    define("DBPASS", "");    
    define("DBNAME", "vitemonvol");
    
    // DSN de connexion
    $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

    // On va ce connecter à la base
    try{
        // On instancie PDO
        $connexion = new PDO($dsn, DBUSER, DBPASS);
        
        //Envoyer les données en UTF8
        $connexion->exec("SET NAMES utf8");

        //Definition du mode de fetch par défaut
        $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    catch(PDOException $except){
        die("Erreur:".$except->getMessage());
    }