<?php
$dsn = "mysql:host=localhost;dbname=dndatabase";
$username = 'root';
$password = null;
$conn = new PDO($dsn, $username, $password);

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }

?>
