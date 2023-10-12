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


   
    <div class="section teal">
    <h4 class="white-text">Boite de message:</h4> 
        <div class="container">
            <table width=728 height=27 border=0 align=center>
                <tr>
                    <td width=33%><font face="Verdana,Arial,Helvetica,sans serif" size="2">Expediteur</font></td>
                    <td width=43%><font size="2" face="Verdana,Arial,Helvetica,sans serif">Objet du message</font></td>
                    <td><div align="center">Date d'envoie</div></td>
                    <td width=10%><div align="center" >Action</div></td>
                </tr> 
            </table>
   <?php
   $res=include("connexion.php");
   $result=mysqli_query($res,"SELECT * FROM messages ORDER BY date DESC")or die (mysqli_error($res));
   while($row=mysqli_fetch_array($result)){
   $code=$row['idclient'];
   $exp=$row['Nom'];
   $expi=$row['Prenom'];
   $objet=$row['Objet'];
   $date=$row['Date'];
   $lu=$row['lecture'];?>
   <table width=728 height=27 border=1 align=center>

  <?php 
    if($lu=="non lu"){
    ?>
<tr  background-color="#99CCFF"><?php }else {?></tr>
<tr background-color="#CCCCCC"><?php } ?>
<td width=20%><font face="Verdana,Arial,Helvetica,sans serif" size="2"><?php echo $exp;?></font></td>
<td width=13%><font face="Verdana,Arial,Helvetica,sans serif" size="2"><?php echo $expi;?></font></td>
<td width=43%><font size="2" face="Verdana,Arial,Helvetica,sans serif"><?php echo $objet;?></font></td>
<td><div align="center"><?php echo $date;?></div></td>
<td width=10%><div align="center" style="background-color:#FF9900"><b><a href="liremsg.php?code=<?php echo $code; ?>">
Lire</a></b></div></td>
    </tr></table>
<?php } ?>
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
