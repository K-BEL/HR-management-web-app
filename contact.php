<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
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
   <li><a href='loggedin.php'>GRH</a></li>
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
           <li><a href='main.php'>GRH</a></li>
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




    <div class="lg2" style="box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );">
        <img src="images/GRH_logo.png" height="130px" width="300px" align="center" >
    <h2 align="center" class="title">Contact</h2>
    <p>
    <a href="https://www.google.com/maps?ll=33.594009,-7.544766&z=15&t=m&hl=fr-FR&gl=MA&mapclient=embed&cid=15234256469657238891" target="_blank">
            <img src="images/GRH_loc.png.jpg"  alt="Image de contact" align="center" class="img">
        </a>
       <h2 align="center" class="title1">Global Ressources Humaines</h2>
       <h2 align="center" class="title1"> Casablanca</h2>
       <h2 align="center" class="title1"> 120, Bd de la Grande Ceinture, Résidence Lilya 2, Appt 11</h2>
       <h2 align="center" class="title1"> Maroc</h2> 
       <h2 align="center" class="title1"> Tel: (212) 05 22 66 03 84 </h2>
       <h2 align="center" class="title1">Fax: (212) 05 22 66 57 24 </h2>
       <h2 align="center" class="title1"><a align="center" href="https://www.grhmaroc.ma/" >Site Officel </a> </h2>
    </p>
    
    </div>
</body>



</html>