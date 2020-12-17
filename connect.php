<?php
$serveurBD="localhost";
$nomUtilisateur="root";
$motDePasse="";
$baseDeDonnees="dsi_projet";
$idConnexion=mysqli_connect($serveurBD,$nomUtilisateur,$motDePasse)
    or die ("probleme de connexion a la base!");
$connexionBase=mysqli_select_db($idConnexion,$baseDeDonnees)
     or die ("probleme de selection  de la base!");
?>












