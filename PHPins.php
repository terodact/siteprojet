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
// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root"; // Remplacez par votre nom d'utilisateur MySQL
$password = ""; // Remplacez par votre mot de passe MySQL
$dbname = "hotel"; // Nom de votre base de données

// Crée une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifie la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Récupère les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$numero = $_POST['numero'];

// Prépare et exécute la requête d'insertion
$sql = "INSERT INTO inscription (nom, prenom, adresse, numero) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $nom, $prenom, $adresse, $numero);

if ($stmt->execute()) {
    echo " <h2>Nouvel inscription éffectuer avec succès <br>
               Merci🙏🏾 et à bientôt 😁!!!
           </h2>";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

// Ferme la connexion
$stmt->close();
$conn->close();
?>
</body>
</html>