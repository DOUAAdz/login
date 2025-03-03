<?php 
session_start();
include("connection.php");
include("login.php"); 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - PamPam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="wrapper">
        <h1><i>PamPam</i></h1>

        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>

        <form method="POST">
            <div class="input-group">
                <label for="user">Nom d'utilisateur :</label>
                <input type="text" id="user" name="user" placeholder="Entrez votre nom d'utilisateur" required>
            </div>
            
            <div class="input-group">
                <label for="pass">Mot de passe :</label>
                <input type="password" id="pass" name="pass" placeholder="Entrez votre mot de passe" required>
            </div>

            <div class="btn-container">
                <button type="submit">Se connecter</button>
            </div>
        </form>

        <p>Pas encore inscrit ? <a href="register.php">Créer un compte</a></p>
    </div>

</body>
</html>
