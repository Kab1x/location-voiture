<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Location de voiture</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <header>
    <img id="img1" src="image/imag.png" alt="">
    </header>
<div class="A">société de location de vehicules touristiques et utilitaire avec ou sans chauffeur</div>
    
<div class="B">
<img class="img" src="image/image1.jpg" alt="">
<img class="img" src="image/ima.jpg" alt="">
<img class="img" src="image/image4.jpg" alt="">
<img class="img" src="image/imag5.jpg" alt="">
<img class="img" src="image/im.jpg" alt="">
</div>

<nav>

<li><a href="index.php">Nos vehicule </a> </li>
<li><a href="">Conditions</a></li>
<li><a href="">Modalités</a></li>
<li><a href="">Tarifs</a></li>
<li><a href="">Résérvations</a></li>
<li><a href="">Contact</a></li>
</nav>
<div class="C">
    <div class="D"></div>
    <div class="E">
        <?php
      $code=$_GET['code'];
      $res=include("connexion.php");
      mysqli_query($res,"UPDATE reserver SET Lecture='lu' WHERE Numero='$code' ");
 ?>

  <h1> VU!</h1>
     
    </div>
    <div class="F"></div>
</div>
    

        <footer></footer>
</body>
</html>