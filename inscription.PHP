<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <link rel="stylesheet" href="inscription.CSS">
</head>
<body>
     <!--debut de l'entete-->
  <header>
    <center>
        <marquee behavior="right" direction="left">
            <h3>⭐⭐Bienvenue au Palais Royal⭐⭐</h3>
        </marquee>
    </center>
    <!--logo-->
     <div class="logo"> 
        <p> <a href="#">
              <span class="corone">👑</span><br>
              <span class="DB">P&R</span><br>
              <span class="nomhotel">Palais  Royal</span>
            </a>
        </p>
    </div> 
    <!--menu (home..)-->
    <ul class="navmenu">
            <li><a href="index.PHP">Accueil</a></li>
            <li><a href="prestation.PHP">prestations</a></li>
            <li><a href="reservation.PHP">reservation</a></li> 
            <li><a href="contact.PHP">contact</a></li>
            <div class="dive">
               <li><a href="inscription.PHP">inscription</a></li>
            </div>
    </ul>
     <!--image user-->
    <div class="img1">
      <a href="inscription.PHP"><img src="image\user.jpg"></a>
    </div>
</header>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
    <div class="for">
      <p class="text">inscription</p>
      <form  action="PHPins.php" method="post" class="formulaire"  id="sub">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required><br><br>
       
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required><br><br>
       
        <label for="adresse">Adresse:</label>
        <input type="email" id="adresse" name="adresse" placeholder="Entrez votre adresse" required><br><br>
       
        <label for="tel">Numéro de télephone:</label>
        <input type="text" id="numero" name="numero" required placeholder="format +XXX  XXXXXXXX..." ><br><br>
        <!-- <input type="submit" value="Envoyer"-->
        <input type="submit" value="s'inscrirer">
         <p class="moi"><a  href="afficher_client.PHP">Voir si je suis un client</a></p>
        <br>
        <br>
      </form>
    </div>

    <!--menu-->
<p>
<h2 class="menuu">💙💙Menu informations💙💙<br>💙💙choisir une option (puis cliquez ⬇)💙💙</h2>
    <ul class="menu">
         <li class="a1"><a href="phpafficher_reser.PHP">Afficher ma reservation</a></li>
         <li  class="a2"><a  href="afficher_client.PHP">Voir si je suis un client</a></li>
         <li  class="a3"><a href="remplir_reser.PHP">Effectuer une reservation</a></li> 
    </ul>
</p>
<!--pied de page-->
<footer>
    <!--la class contenu du foote-->
   <div class="contenu-footer">
      <div class=" bloc footer-plan">
         <h3>Plan du site</h3>
         <ul class="liste-Service">
             <li><a href="index.PHP">Acceuil</a></li>
             <br>
             <li><a  href="prestation.PHP">prestations</a></li>
              <br>
             <li><a href="reservation.PHP">Reservation</a></li>
             <br>
             <li><a href="contact.PHP">Contact</a></li>
             <br>
             <li><a href="inscription.PHP">inscription</a></li>
         </ul>
      </div>
      <div class=" bloc footer-contact">
        <h3>Restons en contact</h3>
        <p>📲Tel 1: 52-87-50-41</p>
        <br>
        <p>📲Tel 2: 56-06-41-93</p>
        <br>
        <!--email-->
        <p><a href="mailto:decidaisomar@gmail.com" class="email">decidaisomar@gmail.com</a></p>
         <!--image footer--> 
         <br>
        <div class="im1"><img src="image\logo.jpg"></div>
      </div>
      <div class=" bloc footer-horaire">
        <h3>Nos Horaires</h3>
         <ul class="liste-horaire">
           <li>✔️ Lun 03h-20h</li>
           <br>
           <li>✔️ Mar 02h-22h</li>
           <br>
           <li>✔️ Mer 04h-19h</li>
           <br>
           <li>✔️Jeu 01h-21h</li>
           <br>
           <li>✔️ Ven 04h-00h</li>
           <br>
           <li>✔️ sam 05h-23h</li>
           <br>
           <li>✔️ dim 05h-18h</li>
         </ul>
      </div>
      <div class=" bloc footer-reseaux">
         <h3>Nos réseaux</h3>
         <!--les media-->
         <ul class="liste-media">
             <li><a href=" https://chat.whatsapp.com/LtbxbuFx7T59jWL2gUSONr" target="_blank"><img src="image/whatsapp.jpg"> <br>whatsapp</a></li>
             <li><a href="https://www.facebook.com/profile.php?id=61561028142293 " target="_blank"><img src="image/facebook.jpg"> <br>facebook </a></li>
             <li><a href="https://www.instagram.com/company_royal_palace?igsh=dWhlMmVoNmdreTVl" target="_blank"><img src="image/instagrame.jpg"> <br>instagrame</a></li>
          </ul>

      </div>
      <div class=" bloc footer-menbre">
         <h3>Menbres groupe</h3>
          <ul class="liste-menbre">
          <li><span>1.</span>Dzidziwu Dylan Omar</li>
             <br>
             <li><span>2.</span>DIARRA KEYLA LESLIE</li>
             <br>
             <li><span>3.</span>DEGBO-HOUMEY WISDOM MARCEL</li>
             <br>
             <li><span>4.</span>NIKIEMA ELVIS JETHRO</li>
             <br>
             <li><span>5.</span> MAIGA ABDOUL GABIROU MOUSSA</li>
             <br>
             <li><span>6.</span> OUEDRAOGO PUSDBA GILBERTINE</li>
          </ul>
      </div>
    </div>
    <!--la date-->
      <div class="date">
          <p>copyright : 2024</p>
      </div>
    <br>
</footer>
</div>
</body>
</html>