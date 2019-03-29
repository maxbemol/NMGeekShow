<?php
    //Connexion à la BD
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=nmgs;charset=utf8', 'max', 'legolas14', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exeption $e)
    {
        die('Erreur: ' . $e->getMessage());
    }    
?>