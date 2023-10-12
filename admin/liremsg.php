<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Materialize/css/materialize.min.css">
    <script src="../Materialize/js/materialize.min.js"></script>
    <title>Boite de recepetions</title>
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
        <?php
      $code=$_GET['code'];
      $res=include("connexion.php");
      mysqli_query($res,"UPDATE messages SET lecture='lu' WHERE Numero='$code' ");
      $result=mysqli_query($res,"SELECT * FROM messages WHERE Numero='$code'");
      $row=mysqli_fetch_array($result);
      $sender=$row['Nom'];
      $objet=$row['Objet'];
      $date=$row['Date'];
      $message=$row['Message'];
      ?>
      <div class="section teal darken-2">
      <div class="container">
      <h5 class="white-text center-align">Message Recu</h5>
        <table class="white-text">
        <tr><td>Expediteur:<?php echo $sender?></td></tr> 
        <tr><td>Objet:<?php echo $objet?></td></tr>
        <tr><td>Date:<?php echo $date; ?></td></tr></table>
        </table>
        <br class="">
        <br class="">
        <textarea class="white-text" name="text" cols=50 rows=10 id="text"><?php echo $message; ?></textarea>
      </div>
    </div>
   
   
    
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

     
   
      
