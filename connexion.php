<?php
    $serveur = "localhost";
    $login = "root";
    $password = "";
    try{
        $db = new PDO("mysql:host=$serveur;dbname=inscrit_igs;charset=utf8",$login,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die('erreur de connexion: '. $e->getMessage());
    }