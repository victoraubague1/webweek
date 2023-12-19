<?php
include '../webweek/php/config.php'; 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT motdepasse FROM organisateur WHERE user = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result && $result['motdepasse'] === $password) {
            $_SESSION['user'] = $username;
            header("Location: ../webweek/php/admin.php"); 
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrect.";
        }
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
