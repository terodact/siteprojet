<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire </title>
    <link rel="stylesheet" href="remplir_reser.CSS">
      <!--script de remplisage de la case-->
    <script>
        function updatePrice() {
            var roomSelect = document.getElementById("room");
            var priceInput = document.getElementById("price");
            var prices = {
                "chambre_standard": "XOF 5000",
                "chambre_superieure": " XOF 800",
                "suite": " XOF124.000"
            };
            var selectedRoom = roomSelect.value;
            priceInput.value = prices[selectedRoom];
        }
    </script>
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
            <li><a href="inscription.PHP">inscription</a></li>
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
    <form action="PHPremplir_reser.PHP" method="POST">
    <p class="text">Reservation</p>
    <label for="nom">Nom  ville:</label>
        <input type="text" id="ville" name="ville" placeholder="Entrez le nom de la ville" required><br><br>
    <label for="nom">Nom  hôtel:</label>
        <input type="text" id="hôtel" name="hôtel" placeholder="Entrez le nom de l'hôtel" required><br><br>
       
    <label for="nom_client">Nom du client:</label>
        <input type="text" id="nom_client" name="nom_client" placeholder="Entrez votre nom" required><br><br>
       
        <label for="prenom">Prénom du client:</label>
        <input type="text" id="prenom_client" name="prenom_client" placeholder="Entrez votre prénom" required><br><br>
       
        <label for="adresse">Adresse du client:</label>
        <input type="text" id="adresse_client" name="adresse_client" placeholder="Entrez votre adresse" required><br><br>
       
        <label for="numero">Numéro de téléphone_client:</label>
        <input type="text" id="numero_client" name="numero_client" required placeholder="format +XXX  XXXXXXXX..."><br><br>
       
        <label for="date_arrivee">Date d'arrivée_client:</label>
        <input type="date" id="date_arrivee" name="date_arrivee" required><br><br>
       
        <label for="date_depart">Date de départ_client:</label>
        <input type="date" id="date_depart" name="date_depart" required><br><br>
       
        <label for="room">Chambre:</label>
        <select id="room" name="room" onchange="updatePrice()" required>
            <option value="">💙💙Sélectionner chambre💙💙</option>
            <option value="chambre_standard">Chambre Standard</option>
            <option value="chambre_superieure">Chambre Supérieure</option>
            <option value="chambre_superieure">Chambre vip</option>
            <option value="suite">Suite standard</option>
            <option value="suite">Suite superieure</option>
            <option value="suite">Suite vip</option>
        </select><br><br>
       
        <label for="price">Nombres de personnes:</label>
        <input type="number" id="person" name="person" placeholder="nombre de personnes" required ><br><br>
       
        <!--boutton-->
        <input type="submit" value="Réserver">
    </form>
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
            <li><a href="index.PHP">Acceuil</a></li>
             <br>
             <li><a href="inscription.PHP">inscription</a></li>
              <br>
             <li><a href="reservation.PHP">Reservation</a></li>
             <br>
             <li><a href="contact.PHP">Contact</a></li>
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