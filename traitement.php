<?php
Recuperatipion des données du formulaire

$nom = htmlspecialchars($_POST['nom']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$sujet = htmlspecialchars($_POST['sujet']);
$message = htmlspecialchars($_POST['message']);

if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Email invalide");
}

Tester les données

echo "<h2>Message reçu : </h2>";
echo "<p>Nom : $nom</p>";
echo "<p>Email : $email</p>";
echo "<p>Sujet : $sujet</p>";
echo "<p>Message : $message</p>";
?>
