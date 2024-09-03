<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.CSS">
  
  </head>
<body>
  <!--debut de l'entete-->
  <header>
    <center>
        <marquee behavior="right" direction="left">
            <h3>⭐⭐Bienvenue au Palais Royal⭐⭐</h3>
        </marquee>
    </center>
    <br>
    <br>
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
            <div> 
               <li><a href="contact.PHP">contact</a></li>
            </div>
            <li><a href="inscription.PHP">inscription</a></li>
    </ul>
      <!--image user -->
    <div class="img1">
      <a href="inscription.PHP"><img src="image\user.jpg"></a>
    </div>
</header>
<div class="image">
  <img src="image\image3.jpg" width="100%" height="50%" margin-top="5%">
</div>
<!--premier texte-->
<div class="texte-photo1">
  <h2><span>CONTACTEZ-NOUS</span></h2>
  <h3>💙Une agence en ligne <br> 💙réservée aux professionnels</h3><br>
</div>
<div class="texte1">
  <p class="p1"><span>N</span>os hôtel :</p>
  <h4><span>pour vous servir</span></h4>
  <br>
  <p class="p2"><span>N</span>os informations perssonnelle :</p>     
</div>
<!--le texte apres photo -->
<div class="texte-apres-photo">
<h2>Contactez-nous pour plus d’informations</h2>
<p class="texte-apres-photo1">Vous avez une question sur nos prestations, institut 
 ou catalogue hôtel ?
</p>
<p class="texte-apres-photo2"> 
  Notre équipe vous répondra dans les meilleurs délais.
</p>
 <a href="mailto:decidaisomar@gmail.com">➡decidaisomar@gmail.com⬅</a>
</div>
<!--video de page-->
<div class="video2"><video loop="infinite" muted="" src="video/video2.mp4" autoplay="autoplay"></video></div>
<!--formulaire de requette-->
<h2 class="formu">Vous pouvez egalement nous laisser un message en remplissant ce formulaire ci-dessous :</h2><br>
  <div class="form">
      <form  action="requette.php" method="post" class="formulair"  id="sub">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required><br>
          <br>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required><br>
        <br>
        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" placeholder="Entrez votre adresse " required><br>
        <br>
        <label for="message">Saisissez votre message:</label>
 <br />
 
 <textarea name="message" id="message" rows="10" cols="50"placeholder="Entrez votre adresse" required>
 </textarea><br><br>
 <button type="submit" form="sub">Envoyer</button>
      </form>
    </div>

<!--notre contact-->
<div class="partie">
<p class="partie1"><h2>::::::::::Les adresses de nos::::::::::</h2> </p>

<p class="partie2"> 📍<br>
   <span>:::::::::agences:::::::::<br> :::::::::::::::🇧urkina faso:::::::::::::::<br> </span>
</p>

<p class="partie3">
1➡Dagnouin : Wemtinga, 69005 Banfora.<br>
2➡Gounghin : Rue de la Solidarité, secteur 7.<br>
3➡Dagnouin : 43 rue Wemba-Poko, secteur 23.<br>
4➡Zone du Bois : Rue du Musée National, secteur 3.<br>
5➡Karpala : Rue 17.03, derrière l'École Internationale.<br>
6➡Zogona : Avenue Kadiogo, en face de l'Église Notre Dame.<br>
7➡1200 Logement : 7 rue, non loin de l'Université Aube-Nouvelle. <br>
8➡Patte d’Oie : Boulevard des Tansoba, à côté du Centre Médical.<br>
9➡Ouaga 2000 : Quartier résidentiel, près de l'Ambassade des États-Unis.<br>
10➡Pissy : Avenue Charles de Gaulle, en face de la pharmacie des Nations.<br>
</p>
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