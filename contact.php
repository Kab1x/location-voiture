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
                            <li class="nos-vehicules">
                                <a href="SelectionAuto.php" class="waves-effect">Nos vehicules</a>
                            </li>
                            <li class="bons-recharge">
                                <a href="Conditions.php" class="waves-effect">Conditions </a>
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
    
    <div class="section teal darken-2 white-text">
        <div class="container">
            <form method="post" action="contact1.php">
                <h4 class=>Envoyer un message</h4>
                <div class="input-field">
                    <label class="lab" >Nom:</label>
                    <input type="text" name="nomf" required onblur="verifier_nom(this)"><br>
                </div>
                <div class="input-field">
                    <label class="lab" >Prenom:</label>
                    <input type="text" name="prenomf" required onblur="verifier_nom(this)"><br>
                </div>
                <div class="input-field">
                    <label class="lab">Telephone:</label>
                    <input type="text" name="telf" required onblur="verifier_telephone(this)" ><br>
                </div>
                <div class="input-field">
                    <label class="lab">L'objet de votre message:</label>
                    <input type="text" name="objetf"required  ><br>
                </div>
        
                <textarea name="messagef"  cols="20" rows="2"></textarea><br><br>
                
                <input type="submit"value="Envoyer le message" class="btn center">
                <input type="reset" value="Effacer tout"  class="btn center">
            </form> 
        </div>
    </div>

    <div class="divider grey darken-4"></div>
    <section class="section teal">
        <div class="container center">
            <a href="SelectionAuto.php" class="btn-large waves-effect">Commencer a reserver</a>
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