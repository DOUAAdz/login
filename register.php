<?php
include("connection.php");
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["user"]);
    $password = trim($_POST["pass"]);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashed_password);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        $error = "Erreur : Nom d'utilisateur déjà pris !";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - PamPam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="wrapper">
        <h1>Inscription</h1>
        <?php if ($error) echo "<p class='error'>$error</p>"; ?>

        <form method="POST">
            <div class="input-group">
                <label for="user">Nom d'utilisateur :</label>
                <input type="text" id="user" name="user" required>
            </div>

            <div class="input-group">
                <label for="pass">Mot de passe :</label>
                <input type="password" id="pass" name="pass" required>
            </div>

            <div class="btn-container">
                <button type="submit">S'inscrire</button>
            </div>
        </form>

        <p>Déjà un compte ? <a href="index.php">Se connecter</a></p>
    </div>

</body>
</html>
