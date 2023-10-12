          <?php
            //Connexion au serveur de la base de donnée
              $res=include("connexion.php");
           
            //Récupération des données saisies dans le formulaire 
              $nom=$_POST['nom'];
              $prenom=$_POST['prenom'];
              $adresse=$_POST['adresse'];
              $telephone=$_POST['telephone'];
              $duree=$_POST['duree'];
              $date=$_POST['date'];

              $idvoiture = "10"; 
              $idvoiture = $_POST['idvoiture'];

            //Enregistrement des données dans la table reserver
              mysqli_query($res,"INSERT INTO reserver(idvoiture,Nom,Prenom,Adresse,Telephone,Duree,Date_debut,Heure_reception,Date_reception,Lecture)VALUES
              ('$idvoiture','$nom','$prenom','$adresse','$telephone','$duree','$date',curtime(),curdate(),'non lu')")or die(mysqli_error($res));
            //Enregistrement des données dans la table client
              mysqli_query($res,"INSERT INTO client(Nom,Prenom,	Adresse,Telephone)VALUES('$nom','$prenom','$adresse','$telephone')")or die(mysqli_error($res));
           
              //Affichage d'une page de confirmation
              $res=include('confirmationreserv.html');
           
              ?>