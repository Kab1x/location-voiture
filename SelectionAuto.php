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
                              <a href="index.php" class="band-logo"><img src="image/Logo.png" alt=""
                                        class="logo-image"></a>
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
                                                            class="material-icons right">assignment_ind</i>Contactez
                                                       nous</a>
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
          <li class="inscription">
               <a href="Inscriptions.html" class="waves-effect"> <i class="material-icons left">assignment_ind</i>
                    Inscription</a>
          </li>
          <li>
               <a href="contact.php" class="waves-effect"><i class="material-icons right">assignment_ind</i>Contactez
                    nous</a>
          </li>
     </ul>
      <div class="section teal lighten-2">
         <div class="container">
          <h4 class="header white-text">Voitures disponibles.</h4>

          <?php 
            // Connexion a la bdd
             $res=include('connexion.php');
             //recuperre les données de la bdd 
             $result=mysqli_query($res,"SELECT * FROM voiture ORDER BY idvoiture")or die(mysqli_error($res));
             while($row=mysqli_fetch_array($result)){
                 $designation=$row['designation'];  
                 $photo=$row['Photo'];          
                 $idvoiture=$row['idvoiture'];          
                 $categorie=$row['Categorie'];?>
          <!-- vehicule-->
               <div class="col s12 m7">
                    <div class="card horizontal">
                         <div class="card-image">
                              <h4><?php echo $designation ?></h4>
                              <img src="<?php echo $photo;?>">
                         </div>
                         <div class="card-stacked">
                              <div class="card-content">
                                    <h5 class="orange-text text-darken-2">Catégorie: <?php echo $categorie ?> </h5>
                                   <p>I am a very simple card. I am good at containing small bits of information.</p>
                              </div>
                              <div class="card-action">
                                   <a href="tarifs.php?idvoiture=<?php echo "$idvoiture"?>" class="btn center">TARIFS</a>
                                   <a href="reservation.php?idvoiture=<?php echo "$idvoiture"?>" class="btn center orange darken-1"><i class="material-icons right">send</i> RESERVER</a>
                              </div>
                         </div>
                    </div>
               </div>
             <?php }?>
        </div>
     </div>     
     
<!--footer-->
     <section class="section footer grey darken-4">
          <div class="container">
               <div class="footer-content">
                    <div class="white-text">
                         <h3>A Propos de nous.</h3>
                         <div>société de location de vehicules touristiques et utilitaire.</div>
                         <div> La SARL LOCDOR est l'une des premiéres sociétés de location de vehicules instllées au
                              niveau
                              de
                              la
                              ville de Tizi-ouzou. </div>
                         <div> Une société qui répond à votre besoin quelque soit votre secteur d'activité.</div>
                         <div>LOCDOR vous propose la localisation de vehicules de tourisme et utilitaires .</div>
                    </div>
               </div>
          </div>
     </section>
</body>



</html>
<script src="Scripts\MainScript.js"></script>