<!DOCTYPE html>
<html>
<head>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="afficher_client_reser.CSS">
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
           <div> 
            <li><a href="index.PHP">Accueil</a></li>
          </div>
            <li><a  href="prestation.PHP">prestations</a></li>
            <li><a href="reservation.PHP">reservation</a></li> 
            <li><a href="contact.PHP">contact</a></li>
            <li><a href="inscription.PHP">inscription</a></li>
    </ul>
    <!--image user-->
    <div class="img1">
      <a href="inscription.PHP">
        <img src="image\user.jpg">
      </a>
    </div>
</header>

<br>
<br>

<!-- formulaire -->
<div class="for">

     <h2 class="text">Verification reservation</h2>

     <div class="form-container">
        <form method="post" action="">
           <label for="email">Adresse email:</label><br>
           <input type="email" id="email" name="email" placeholder="Saisir votre adresse email ..." required><br><br>
           <label for="numero">Numéro de Téléphone:</label><br>
           <input type="text" id="numero" name="numero" placeholder="format +XXX  XXXXXXXX..." required><br><br>
           <input type="submit" value="Rechercher">
            <p class="a"><a href="remplir_reser.PHP">Faire une reservation</a></p>
            <br>
            <br>

        </form>
      </div>

</div>

<!--la partie php -->

 
<?php
$servername = "localhost";
$username = "root";  // nom d'utilisateur
$password = "";  //  mot de passe
$dbname = "hotel";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion :" . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $numero = $conn->real_escape_string($_POST['numero']);

$sql = "SELECT ville, id_chambre, hôtel, nom_client, prenom_client, adresse_client, numero_client, date_arrivee, date_depart, room, person, created_at FROM reservation WHERE adresse_client = '$email' AND numero_client = '$numero'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "
    <br>
    <br>
    <br>
      <h2> Voici le resultat de votre demande👇🏾:<h2>
    <br>
    <br>
    <h2>Ma reservations:</h2>
    <br>
  ";

    echo "<table>";
    echo "<tr>
            <th>Ville</th>
            <th>Hôtel</th>
            <th>numero Chambre</th>
            <th>Type de Chambre</th>
            <th>Nombre de Personnes</th>
            <th>Nom Client</th>
            <th>Prénom Client</th>
            <th>Adresse Client</th>
            <th>Numéro Client</th>
            <th>Date d'Arrivée</th>
            <th>Date de Départ</th>
            <th>Date de Reservation</th>
          </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["ville"]. "</td>
                <td>" . $row["hôtel"]. "</td>
                <td>" . $row["id_chambre"]. "</td>
                 <td>".$row["room"]. "</td>
                <td>" . $row["person"]. "</td>
                <td>" . $row["nom_client"]. "</td>
                <td>" . $row["prenom_client"]. "</td>
                <td>" . $row["adresse_client"]. "</td>
                <td>" . $row["numero_client"]. "</td>
                <td>" . $row["date_arrivee"]. "</td>
                <td>" . $row["date_depart"]. "</td>
                <td>" . $row["created_at"]. "</td>
              </tr>";
    }
    echo "</table>";
} else {
  echo "
           <br>
           <br>
           <br>
           <h2> Voici le resultat de votre demande👇🏾:<h2>
           <br>
           <br>
            ";
        echo "<h1>
                 Aucun résultat trouvé pour cet utilisateur.<br>
                 Ou les formats spécifier au niveau du formulaire n'ont pas été respecter.<br>
                 Merci🙏🏾 et à bientôt 😁!!!
              </h1>";
}
}
$conn->close();
?>

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

</body>
</html>