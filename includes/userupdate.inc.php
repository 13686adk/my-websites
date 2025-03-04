<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 5;";

        $stmt = $pdo->prepare($query);

        $stmt->bindparam(":uesername", $username);
        $stmt->bindparam(":pwd", $pwd); 
        $stmt->bindparam(":email", $email);

        $stmt->execute();

        $pdo = null;
        $stmt = null;
        
        header("Location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getmessage());
    }
} else {
    header("Location: ../index.php");
}