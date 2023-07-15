<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Présentation</title>
<link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel = "shortcut icon" type = 'img/png' href="images/GRH_logo.png" >
</head>
<body>
<?php 
   
   if (isset($_SESSION["user"])){
    $email = $_SESSION['user'];
    echo "<div id='cssmenu'>
<ul>
<li><a href='loggedin.php'>Global Ressources Humaines</a></li>
<li class='active' style='transform: translate(1625px,0%);'><a href='#'>Paramétres</a>
  <ul>
           <li><a href='changepass.php?email=".$email."'>Changer le Mot de Passe</a></li>
           <li><a href='about.php'>About</a></li>
            <li><a href='contact.php'>Contact</a></li>
           <li><a href='signout.php'>Se Déconnecter </a></li>
     
  </ul>
</li>

</ul>
</div>";
}
else{
    echo "
    <div id='cssmenu'>
    <ul>
       <li><a href='main.php'>Global Ressoureces Humaines</a></li>
       <li class='active' style='transform: translate(1625px,0%);'><a href='signin.php'>Se Connecter</a>
          
       </li>
       <li class='active' style='transform: translate(1350px,0%);'><a href='creecompte.php'>S'inscrire</a>
          
       </li>
       <li class='active' style='transform: translate(1050px,0%);'><a href='about.php'>Présentation</a>
          
       </li>
       <li class='active' style='transform: translate(750px,0%);'><a href='contact.php'>Contact</a>
          
       </li>
       
    </ul>
    </div>
    
    
    
    
    
        
    
            <br><br>"
    ;
}

?>


    <div class="lg" style="box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );">
    <img src="images/GRH_logo.png" height="90px" width="90px" align="center" class="avatar">
    <h2 align="center" class="title">Présentation</h2>
    <p>
        Opérateur reconnu dans l’univers de la mise à disposition de personnel aux entreprises, GRH affiche une stratégie de développement ambitieuse sur les cinq prochaines années, et cherche à ancrer sa pérennité sur une culture d'entreprise forte, basée sur la qualité et la satisfaction de tous ses partenaires, internes et externes.

        Nous sommes une entreprise de travail temporaire crée en Février 2016, spécialisée dans la mise à disposition de personnel intérimaire formé et qualifié au sein des entreprises multisectorielles avec plus de 3600 collaborateurs (BTP, industrie, hôtellerie, commerce, production, etc.).
    </p>
    
    </div>
</body>



</html>