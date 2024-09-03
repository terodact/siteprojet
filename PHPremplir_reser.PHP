<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         h2{
            text-align: center;
            margin-top:2%;
            font-size:2.6rem;
         }
    </style>
</head>
<body>
<?php
// Parametres de connexion la base de donnges
$servername = "localhost";
$username = "root"; // nom d'utilisateur MySQL
$password = ""; // mot de passe MySQL
$dbname = "hotel"; // Nom de la base de données

// Cree une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifie la connexion
if ($conn->connect_error) {
    die("Echec de la connexion : " . $conn->connect_error);
}

// Recupere les données du formulaire
$ville = $_POST['ville'];
$hotel = $_POST['hôtel'];
$nom_client = $_POST['nom_client'];
$prenom_client = $_POST['prenom_client'];
$adresse_client = $_POST['adresse_client'];
$numero_client = $_POST['numero_client'];
$date_arrivee = $_POST['date_arrivee'];
$date_depart = $_POST['date_depart'];
$room = $_POST['room'];
$person = $_POST['person'];

// Vérifie si la date d'arrivée dépasse la date de départ
if (strtotime($date_arrivee) > strtotime($date_depart)) {
    echo " <h2>Nous avons remarque que la date d'arrivée dépasse la date de départ.<br> 
              Les informations saisient ne sont donc pas enregistrées.<br> 
               veuillez reésayer s'il vous plait 🙏🏾  merci 😁!!!!!!!!
              </h2>";
} else {
    // Prepare et execute la requete d'insertion
    $sql = "INSERT INTO reservation (ville,hôtel, nom_client, prenom_client, adresse_client, numero_client, date_arrivee, date_depart, room, person) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssss",$ville, $hotel, $nom_client, $prenom_client, $adresse_client, $numero_client, $date_arrivee, $date_depart, $room, $person);

    if ($stmt->execute()) {
        echo "  <h2> Reservation effectuee avec succes .<br>
                     Merci🙏🏾 et à bientôt 😁!!!!! </h2>";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    // Ferme la connexion
    $stmt->close();
}

$conn->close();
?>
</body>
</html>