<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Materialize/css/materialize.min.css">
    <script src="Materialize/js/materialize.min.js"></script>
    <title>Location de voiture</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="navbar-fixed">
        <nav class="teal">
            <div class="container">
                <div class="nav-wrapper">
                    <div class="nav-logo">
                        <a href="index.php" class="band-logo"><img src="image/Logo.png" alt="" class="logo-image"></a>
                        <a href="#" data-target="mobile-nav" class="sidenav-trigger"> <i
                                class="material-icons">menu</i></a>

                        <ul class="nav-menu right hide-on-med-and-down">
                            <li class="page-accueil">
                                <a href="index.php" class="waves-effect"><i class="material-icons">home</i></a>
                            </li>
                            <li class="nos-vehicules">
                                <a href="SelectionAuto.php" class="waves-effect">Nos vehicules</a>
                            </li>
                            <li class="bons-recharge">
                                <a href="#bons-recharge" class="waves-effect">Conditions </a>
                            </li>

                            <li class="options">
                                <a class='dropdown-trigger' href='#' data-target='options'><i
                                        class="material-icons">keyboard_arrow_down</i></a>
                                <ul id='options' class='dropdown-content'>
                                    <li>
                                        <a href="Connexion.html" class="waves-effect">
                                        <i class="material-icons right">lock_open</i>Connexion</a>
                                    </li>
                                    <li>
                                        <a href="contact.php" class="waves-effect"><i
                                                class="material-icons right">assignment_ind</i>Contactez nous</a>
                                    </li>
                                    <li>
                                        <a href="admin/index.php" class="waves-effect">Espace Admin</a>
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
            <a href="index.php" class="waves-effect"><i class="material-icons">home</i>Accueil</a>
        </li>
        <li class="nos-vehicules">
            <a href="SelectionAuto.php" class="waves-effect">Nos Vehicules</a>
        </li>
        <li class="conditions">
            <a href="Conditions.php" class="waves-effect">Conditions</a>
        </li>
        
        <div class="divider"></div>
        <li class="connexion">
            <a href="admin/index.php" class="waves-effect"> <i class="material-icons left">lock_open</i> Connexion</a>
        </li>
        
        <li>
            <a href="contact.php" class="waves-effect"><i class="material-icons right">assignment_ind</i>Contactez
                nous</a>
        </li>
    </ul>
    <section class="slider teal">
        <ul class="slides">
            <li>
                <img src="image/Voitures/auto6.jpg">
                <div class="caption pink-text text-darken-2 center-align">
                    <h3>
                        Fiabilité
                    </h3>
                    <h5>
                        Nos vehicules sont testés régulierement pour vous assurer une conduite en toute securite.
                    </h5>
                </div>
            </li>
            <li>
                <img src="image/Voitures/auto7.jpg">
                <div class="caption center-align">
                    <h3>
                        Rapidité
                    </h3>
                    <h5>
                        Demandez une voiture et vous l'aurez en moins d'une heure.
                    </h5>
                </div>
            </li>
            <li>
                <img src="image/Voitures/auto8.jpg">
                <div class="caption center-align">
                    <h3>
                        Contactez nous dés maintenant.
                    </h3>
                    <a href="SelectionAuto.php"class="btn-large waves-effect submit">
                        Demander une voiture.

                        <i class="material-icons right">send</i>
                    </a>
                </div>
            </li>
        </ul>
    </section>

    <section class="section teal">
        <div class="container center">
            <a href="SelectionAuto.php" class="btn-large red waves-effect">Commencer a reserver</a>
        </div>
    </section>
    
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
                    <div>LOCDOR vous propose la localisation de vehicules de tourisme et utilitaires.</div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<script src="Scripts\MainScript.js"></script>