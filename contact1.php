            <?php
            //Connexion au serveur de la base de donnée
             $res=include("connexion.php");
            //Récupération des données saisies dans le formulaire 
             $nom=$_POST['nomf'];
             $prenom=$_POST['prenomf'];
             $tel=$_POST['telf'];
             $objet=$_POST['objetf'];
             $message=$_POST['messagef'];
            //Enregistrement des données dans la table messages
             mysqli_query($res,"INSERT INTO messages(idclient,Nom,Prenom,Telephone,Objet,Message,Date,Heure,Lecture)VALUES
             (NULL,'$nom','$prenom','$tel','$objet','$message',curdate(),curtime(),'non lu')")or die(mysqli_error($res));
             
             $result=mysqli_query($res,"SELECT * FROM messages ORDER BY idclient ")or die(mysqli_error($res));
             while($row=mysqli_fetch_array($result)){
                $idclient=$row['idclient']; }
            
            //Enregistrement des données dans la table client
             mysqli_query($res,"INSERT INTO client(idclient,Nom,Prenom,Adresse,Telephone)VALUES('$idclient','$nom','$prenom','','$tel')")or die(mysqli_error($res));
            //Affichage d'une page de confirmation
             $res=include('confirmation.html');?>