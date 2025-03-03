<?php
include("connection.php"); // Assure-toi que ce fichier contient une connexion correcte

$username = "admin";
$password = "admin123";

// Vérifier si l'utilisateur existe déjà
$query_check = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query_check);

if (mysqli_num_rows($result) > 0) {
    echo "⚠️ L'utilisateur '$username' existe déjà dans la base de données.";
} else {
    // Hachage sécurisé du mot de passe
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insérer le nouvel utilisateur
    $query_insert = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
    if (mysqli_query($conn, $query_insert)) {
        echo "✅ Utilisateur ajouté avec succès.";
    } else {
        echo "❌ Erreur : " . mysqli_error($conn);
    }
}
?>
