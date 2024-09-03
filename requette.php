<?php
// Paramètre de connexion à la base de données
$db_host = "localhost";
$db_name = "hotel";
$db_user = "root";
$db_pass = "";

// Connexion à la base de données
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Vérifier la connexion à la base de données
if (!$conn) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}

// Récupérer les données du formulaire
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$message = $_POST["message"];

// Enregistrer les données dans la base de données
$sql = "INSERT INTO message_client (nom, prenom, email, message) VALUES ('$nom', '$prenom', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "Enregistrement réussi";
} else {
    echo "Échec de l'enregistrement : " . mysqli_error($conn);
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>