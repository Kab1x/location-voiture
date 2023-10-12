<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Materialize/css/materialize.min.css">
    <script src="../Materialize/js/materialize.min.js"></script>
    <title>Reservation</title>
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <div class="navbar-fixed">
        <nav class="teal">
            <div class="container">
                <div class="nav-wrapper">
                    <div class="nav-logo">
                        <a href="../index.php" class="band-logo"><img src="../image/Logo.png" alt=""
                                class="logo-image"></a>
                        <a href="#" data-target="mobile-nav" class="sidenav-trigger"> <i
                                class="material-icons">menu</i></a>

                        <ul class="nav-menu right hide-on-med-and-down">
                            <li class="page-accueil">
                                <a href="../index.php" class="waves-effect"><i class="material-icons">home</i></a>
                            </li>
                            <li class="meilleur-offres">
                                <a href="../reservation.php" class="waves-effect">Nos vehicules</a>
                            </li>
                            <li class="bons-recharge">
                                <a href="Conditions.php" class="waves-effect">Conditions </a>
                            </li>


                            <li class="options">
                                <a class='dropdown-trigger' href='#' data-target='options'><i
                                        class="material-icons">keyboard_arrow_down</i></a>
                                <ul id='options' class='dropdown-content'>
                                    <li>
                                        <a href="../Connexion.html" class="waves-effect"><i
                                                class="material-icons right">lock_open</i>Connexion</a>
                                    </li>
                                    <li>
                                        <a href="../contact.php" class="waves-effect"><i
                                                class="material-icons right">assignment_ind</i>Contactez nous</a>
                                    </li>
                                    <li>
                                        <a href="index.php" class="waves-effect">Espace Admin</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-nav">
        <li class="page-accueil">
            <a href="../Main.html" class="waves-effect"><i class="material-icons">home</i>Accueil</a>
        </li>
        <li class="meilleur-offres">
            <a href="#meilleur-offres" class="waves-effect">Nos Vehicules</a>
        </li>
        <li class="bons-recharge">
            <a href="Conditions.php" class="waves-effect">Conditions</a>
        </li>
        <li class="contact">
            <a href="#panier" class="waves-effect">Tarifs</a>
        </li>
        <div class="divider"></div>
        <li class="connexion">
            <a href="../Connexion.html" class="waves-effect"> <i class="material-icons left">lock_open</i> Connexion</a>
        </li>
        
        <li>
            <a href="../contact.php" class="waves-effect"><i class="material-icons right">assignment_ind</i>Contactez
                nous</a>
        </li>
    </ul>

    <div class="section teal lighten-2">
        <div class="container">
            <form action="" method="POST">
                <div class="input-field">
                    <label class="white-text"for="">Ancien mot de passe:</label>
                    <input type="password" name="ancien">
                </div>
                <div class="input-field">
                    <label class="white-text"for="">Nouveau mot de passe:</label>
                    <input type="password" name="nouv">
                </div>
                <input type="submit" value="valider" class="btn">
            </form>
        </div>
    </div>

<?php
//connexion a la bdd
   $res=include("connexion.php");
//tester si les mots entrées ne sont pas vide
   if((isset($_POST['ancien']))and(isset($_POST['nouv']))and($_POST['ancien']!="")and($_POST['nouv']!="")){
//recupérer le contenu de la table mot_de_passe
    $ancien=mysqli_query($res,"SELECT *FROM mot_de_passe")or die(mysqli_error($res));
    //recupérer le contenu de l'enregistrement 
    $re=mysqli_fetch_array($ancien);
    $mot=$re['mot_de_passe'];
    //recupérer le contenu du champs ancien mot_de_passe
    $anc=$_POST['ancien'];
    //si l'ancien mot de passe est différent de celui existant dans la table
    if($anc!=$mot){
        $res=include("mdp.html");//afficher cette page 
    }else{
        //si nn recupérer le noveau mot_de_passe
        $nouv=$_POST['nouv'];
        //metre a jour la table en inserant le nouveau mdp
        mysqli_query($res,"update mot_de_passe set passe='$nouv' ");
        echo"<font size=5 color=green>changement efféctuer.</font>";
    }}?>
    <section class="section footer grey darken-4">
        <div class="container">
            <div class="footer-content">
                <div class="white-text">
                    <h3>A Propos de nous.</h3>
                    <div>société de location de vehicules touristiques et utilitaire.</div>
                    <div> La SARL LOCDOR est l'une des premiéres sociétés de location de vehicules instllées au niveau
                        de
                        la
                        ville de Tizi-ouzou. </div>
                    <div> Une société qui répond à votre besoin quelque soit votre secteur d'activité.</div>
                    <div>LOCDOR vous propose la localisation de vehicules de tourisme et utilitaires avec ou sans
                        chauffeur.</div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<script src="../Scripts/MainScript.js"></script>
