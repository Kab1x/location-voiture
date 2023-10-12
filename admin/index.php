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
                        <a href="../index.php" class="band-logo"><img src="../image/Logo.png" alt="" class="logo-image"></a>
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


       <div class="teal section">
    <div class="container">
        <h5 class="white-text">Entrez votre mot de passe.</h5>
        <form action="" method="POST" class="">
            <div class="form">
                <div class="input-field">
                    <label for="" class="">Mot de passe</label>
                    <input type="password" name="pw" class="s4">
                    <input type="submit" class="btn center" value="Acceder" name="acceder">
                </div>
<?php
//connexion a la bdd
$res=include('connexion.php');
//si le champ n'est pas vide
if(isset($_POST['pw'])){
//recuperrere le mot de passe
$requete=mysqli_query($res,"SELECT mot_de_passe from mot_de_passe")or die (mysqli_error($res));
//se positionner sur une case du tableau recuperrer
$p=mysqli_fetch_row($requete);
//recuperer le mot de passe saisie 
$mot_saisi=$_POST['pw'];
//recupperrer le mot de passe de la premiere case du tableau
$mot_table=$p[0];
//si on clique sur le boutton acceder
if(isset($_POST["acceder"])){
    if($mot_saisi==$mot_table){
        echo"<font color=green size=5>Bienvenu,cliquez sur le lien suivant pour accéder a <a href=gestion.php>
        continuer</a></font>";
    }
    else{echo"<font color=red size=5>Le mot de passe est incorrect!veuillez réessayer</font>";}
}
}
?>
 </div>
        </form>
</div>  
    </div>
    <section class="section footer grey darken-4">
        <div class="container">
            <div class="footer-content">
                <div class="white-text">
                    <h3>A Propos de nous.</h3>
                    <div>société de location de vehicules touristiques et utilitaire.</div>
                    <div> La SARL LOCDOR est l'une des premiéres sociétés de location de vehicules instllées au niveau de
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