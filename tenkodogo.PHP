<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ville.CSS">
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
            <li><a  href="prestation.PHP">prestations</a></li>
      <div>
         <li><a href="reservation.PHP">reservation</a></li>
      </div>  
         <li><a href="contact.PHP">contact</a></li>
         <li><a  href="inscription.PHP">inscription</a></li>
    </ul>
     <!--image user-->
    <div class="img1">
      <a href="inscription.PHP"><img src="image\user.jpg"></a>
    </div>
</header>
<br>
<!-- video du header-->
<div class="video1">
  <video autoplay="autoplay" muted="" loop="infinite" src="video\1.mp4" width="100%"
  height="10%"></video>
</div>
 <!-- text 1-->
  <div class="text1">
    <h4><span>P</span>alais <span>R</span>oyal (Tenkodogo)</h4>
    <h5>💙Le Luxe à Votre Portée</h5>
    <p>💙Votre clé pour des séjours inoubliables</p>
</div>
<!--corp du site--->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h2><span>N</span>otre selection des mellieurs hôtels:</h2>
  <br>

<section class="section__container">
  <br>
  <br>
  <br>
  <h2 class="section__header">💙💙LES HOTELS POPULAIRES💙💙<br> 💙💙A TENKODOGO💙💙</h2>
  <div class="popular__grid">
    <div class="popular__card">
      <img src="image\H14.jpeg"/>
      <div class="popular__content">
        <div class="popular__card__header">
          <h4>Laafi hôtel</h4>
          <h4>⭐⭐⭐⭐</h4>
        </div>
        <button><a href="remplir_reser.PHP">Reserver</a></button>
        <p> Tenkodogo, Burkina Faso</p>
      </div>
    </div>
    <div class="popular__card">
      <img src="image\H15.jpeg"/>
      <div class="popular__content">
        <div class="popular__card__header">
          <h4>Tiéba  hôtel </h4>
          <h4>⭐⭐⭐⭐</h4>
        </div>
        <button><a href="remplir_reser.PHP">Reserver</a></button>
        <p> Tenkodogo, Burkina Faso</p>
      </div>
    </div>
    <div class="popular__card">
      <img src="image\H16.jpg"/>
      <div class="popular__content">
        <div class="popular__card__header">
          <h4>Djouma Hôtel</h4>
          <h4>⭐⭐⭐</h4>
        </div>
        <!--corp du site partie boutton--->
        <button><a href="remplir_reser.PHP">Reserver</a></button>

        <p> Tenkodogo, Burkina Faso</p>
      </div>
    </div>
    <div class="popular__card">
      <img src="image\C4.jpeg"/>
      <div class="popular__content">
        <div class="popular__card__header">
          <h4>Chambre de l'hôtel ci-dessus</h4>
          <h4>XOF51900</h4>
        </div>
         <!--corp du site partie boutton--->
        <button><a href="remplir_reser.PHP">Reserver</a></button>

        <p>  Tenkodogo, Burkina Faso</p>
      </div>
    </div>
    <div class="popular__card">
      <img src="image\C5.jpg"/>
      <div class="popular__content">
        <div class="popular__card__header">
          <h4>Chambre de l'hôtel ci-dessus</h4>
          <h4>XOF50000</h4>
        </div>
         <!--corp du site partie boutton--->
        <button><a href="remplir_reser.PHP">Reserver</a></button>
        
        <p>  Tenkodogo, Burkina Faso</p>
      </div>
    </div>
    <div class="popular__card">
      <img src="image\C6.jpeg"/>
      <div class="popular__content">
        <div class="popular__card__header">
          <h4>Chambre de l'hôtel ci-dessus</h4>
          <h4>XOF39900</h4>
        </div>
         <!--corp du site partie boutton--->
        <button><a href="remplir_reser.PHP">Reserver</a></button>

        <p>  Tenkodogo, Burkina Faso</p>
      </div>
    </div>
  </div>
</section>


<!--menu-->
<p>
<h2 class="menuu">💙💙Menu informations💙💙<br>💙💙choisir une option (puis cliquez ⬇)💙💙</h2>
    <ul class="menu">
         <li class="a1"><a href="phpafficher_reser.PHP">Afficher ma reservation</a></li>
         <li  class="a2"><a  href="afficher_client.PHP">Voir si je suis un client</a></li>
         <li  class="a3"><a href="remplir_reser.PHP">Effectuer une reservation</a></li> 
    </ul>
</p>
<p>
<h2 class="menuu">💙💙Menu villes💙💙<br>💙💙choisir la ville pour une reservation (puis cliquez ⬇)💙💙</h2>
    <ul class="menu">
         <li class="a1"> <a href="banfora.PHP">Banfora</a></li>
         <li class="a2"><a href="Ouagadougou.PHP">Ouagadougou</a></li>
         <li class="a3"><a href="bobo.PHP">Bobo Dioulasso</a></li>
         <li class="a3"><a href="tenkodogo.PHP">Tenkodogo</a></li>
         <li class="a3"><a href="koudougou.PHP">koudougou</a></li>
         <li class="a3"><a href="Kaya.PHP">Kaya</a></li>
    </ul>
</p>
<!--pied de page-->
<footer>
    <!--la class contenu du foote-->
   <div class="contenu-footer">
      <div class=" bloc footer-plan">
         <h3>Plan du site</h3>
         <ul class="liste-Service">
              <li><a href="acceuil.PHP">Acceuil</a></li>
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