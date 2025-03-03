<?php
$error = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["user"]);
    $password = trim($_POST["pass"]);

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["username"] = $row["username"];
            header("Location: welcome.php");
            exit();
        } else {
            $error = "Mot de passe incorrect !";
        }
    } else {
        $error = "Nom d'utilisateur non trouvé !";
    }
}
?>
