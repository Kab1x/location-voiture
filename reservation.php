<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Materialize/css/materialize.min.css">
    <script src="Materialize/js/materialize.min.js"></script>
    <title>Reservation</title>
    <link rel="stylesheet" href="style.css">
        <script>
                //fonction d'erreur 
                function surligne(champ, erreur) {
                    if (erreur)
                        champ.style.backgroundColor = "#fba";
                    else
                        champ.style.backgroundColor = "";
                }
            
                //vereifier le nom /le prenom
                function verifier_nom(champ) {
                        var regex = /^[a-zA-Z]+$/;
                        if (!regex.test(champ.value)) {
                            surligne(champ, true);
                            return false;
                        } else {
                            surligne(champ, false);
                            return true;
                        }
                    }

                 //vereifier l'adresse
                 function verifier_adresse(champ) {
                      var regex = /^[a-zA-Z0-9]+$/;
                            if (!regex.test(champ.value)) {
                                surligne(champ, true);
                                return false;
                            } else {
                                surligne(champ, false);
                                return true;
                            }
                        }

                //vereifier telephone
                function verifier_telephone(champ) {
                    var regex = /^((05)|(06)|(07))[0-9]{8}$/;
                    if (!regex.test(champ.value)) {
                        surligne(champ, true);
                        return false;
                    } else {
                        surligne(champ, false);
                        return true;
                    }
                }
        </script>



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
                            <li class="meilleur-offres">
                                <a href="reservation.php" class="waves-effect">Nos vehicules</a>
                            </li>
                            <li class="bons-recharge">
                                <a href="Conditions.php" class="waves-effect">Conditions </a>
                            </li>


                            <li class="options">
                                <a class='dropdown-trigger' href='#' data-target='options'><i
                                        class="material-icons">keyboard_arrow_down</i></a>
                                <ul id='options' class='dropdown-content'>
                                    <li>
                                        <a href="Connexion.html" class="waves-effect"><i
                                                class="material-icons right">lock_open</i>Connexion</a>
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
            <a href="Main.html" class="waves-effect"><i class="material-icons">home</i>Accueil</a>
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
            <a href="Connexion.html" class="waves-effect"> <i class="material-icons left">lock_open</i> Connexion</a>
        </li>
        
        <li>
            <a href="contact.php" class="waves-effect"><i class="material-icons right">assignment_ind</i>Contactez
                nous</a>
        </li>
    </ul>
    <div class="section teal darken-1">
        <div class="container">
            <!-- formulaire -->
            <form method="post" action="reservation1.php">
                <h3 class="white-text">Réservation:</h3>
                <div type="text" name="idvoiture"><?php echo $_GET['idvoiture']?></div>
                <div class="container">
    
                    <div class="input-field">
                        <label class="lab white-text"> Nom:</label>
                        <input type="text" name="nom"required onblur="verifier_nom(this)">
                    </div>
    
                    <div class="input-field">
                        <label class="lab white-text"> Prenom:</label>
                        <input type="text" name="prenom" required onblur="verifier_nom(this)">
                    </div>
    
                    <div class="input-field">
                        <label class="lab white-text">Adresse:</label>
                        <input type="text" name="adresse" required onblur="verifier_adresse(this)">
                    </div>
    
                    <div class="input-field">
                        <label class="lab white-text"> Téléphone:</label>
                        <input type="text" name="telephone"required onblur="verifier_telephone(this) ">
                    </div>
    
                    <div class="input-field">
                        <label class="lab white-text">Durée</label>
                        <input type="text" name="duree" required>
                    </div>
    
                    <label class="lab white-text">A partir de</label>
    
                    <input type="date" name="date" >
    
                    <button type="submit" value="Envoyer" name="envoyer" class="btn">Envoyer <i class="material-icons right">send</i></button>
                    <input type="reset" value="Réinitialiser" class="btn red">
                </div>
            </form>
        </div>
    </div>
    <?php
        $res=include('connexion.php');
        $idvoiture=$_GET['idvoiture'];
        $result=mysqli_query($res,"SELECT * FROM voiture WHERE idvoiture='$idvoiture'")or die(mysqli_error($res));
        $row=mysqli_fetch_array($result);
        $designation=$row['designation'];  
        $photo=$row['Photo'];          
        $categorie=$row['Categorie'];
    ?>

    <div class="section teal lighten-1">
        <div class="container"> 
            <h5 class="white-text">Voiture Selectionnée </h5>
            <div class="col s12 m7 container">
                <div class="card horizontal">
                    <div class="card-image teal">
                        <h4 class=""><?php echo $designation ?></h4>
                        <img src="<?php echo $photo;?>">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content teal">
                            <h5 class="white-text ">Catégorie: <?php echo $categorie ?> </h5>
                            <p class="white-text">Vous avez séléctitonné la voiture <?php echo $designation ?></p>
                        </div>
                    </div>
                </div>
            </div>
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
<script src="Scripts\MainScript.js"></script>