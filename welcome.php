<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue - PamPam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="wrapper">
        <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION["username"]); ?> !</h1>
        <a href="logout.php">Déconnexion</a>
    </div>

</body>
</html>
