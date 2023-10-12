<?php
//Nom de la base de donnée
$bd="loc";
//Nom de la machine hebergant la bse de donnée
$host="localhost";
//Nom de l'utilisateur
$user="root";
//Mot de passe de l'utilisateur 
$pw="";
//connexion au serveur de la base de donnée
return @mysqli_connect($host,$user,$pw,$bd);
?>