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

    <div class="section teal">
        <form method="post">
            <div class="container">
                <h5 class="white-text">Calculez vous meme votre total de location.</h5>
                <br>
                <br>
                <br>
                <div class="input-field ">
                    <label class="white-text">Nombre de jours </label>
                    <input type="number" name="nbr_jour">
                </div>
                
                <input type="submit" class="btn center large" value="calculer" name="calculer">
                <br>
            </div>
        </form>
    </div>
    <div class="teal section">
        <div class="container">
            <div class="white-text center-align">
            
            
                <?php 
                    $res=include('connexion.php');
                    $idvoiture=$_GET['idvoiture'];
                    $result=mysqli_query($res,"SELECT * FROM voiture WHERE idvoiture='$idvoiture'")or die(mysqli_error($res));
                    $row=mysqli_fetch_array($result);
                    $designation=$row['designation'];  
                    $photo=$row['Photo'];          
                    $categorie=$row['Categorie'];

                    if(isset($_POST['calculer'])){
                    
                    $nbr=$_POST['nbr_jour'];
                    
                
                    if($categorie=='Utilitaire'){
                    if(($nbr>= 1)and($nbr<=7))
                    {
                        $total=$nbr*3200;
                        $net=$total;
                        echo "<h5>le total:$total</h5>
                        <h5>le Net à paye: $net</h5>";
                    }
                    else if(($nbr>7)and($nbr<=30))
                    {
                        $total=$nbr*3200;
                        $remise= $total*0.04;
                        $net=$total-$remise;
                        echo "<h5>le total:$total</h5>
                        <h5>la rmise est:$remise </h5>
                        <h5>le Net à paye: $net</h5>";
                    }

                    else if($nbr>=30)
                    {
                        $total=$nbr*3200;
                        $remise=$total*0.06;
                        $net=$total-$remise;
                        echo "<h5>le total:$total</h5>
                        <h5>la rmise est:$remise </h5>
                        <h5>le Net à paye: $net</h5>";
                    }
                    }
                    else if($categorie=='Touristique'){
                        if(($nbr>= 1)and($nbr<=7))
                        {
                            $total=$nbr*4000;

                            $net=$total;
                            echo "<h5>le total:$total</h5>
                            <h5>le Net à paye: $net</h5>";
                        }
                        else if(($nbr>7)and($nbr<=30))
                        {
                            $total=$nbr*4000;
                            $remise=$total*0.04;
                            $net=$total-$remise;
                            echo "<h5>le total:$total</h5>
                            <h5>la rmise est:$remise </h5>
                            <h5>le Net à paye: $net</h5>";
                        }

                        else if($nbr>=30)
                        {
                            $total=$nbr*4000;
                            $remise=$total*0.06;
                            $net=$total-$remise;
                            echo "<h5>le total:$total</h5>
                            <h5>la rmise est:$remise </h5>
                            <h5>le Net à paye: $net</h5>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    
    <div class="section teal lighten-1">
        <div class="container"> 
            <h5 class="white-text">Voiture Selectionnée </h5>
            <div class="col s12 m7">
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

<script src="Scripts\MainScript.js"></script>