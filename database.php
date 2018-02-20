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

    function getOne($query, array $binds = [], $conn)
    {
        $statement = $conn->prepare($query);
        foreach($binds as $key => $value) {
            $statement->bindValue($key, $value);
        }
        $statement->execute();

        $result = $statement->fetch();

        $statement->closeCursor();

        return $result;
    }

    function getMany($query, array $binds = [], $conn)
    {
        $statement = $conn->prepare($query);
        foreach($binds as $key => $value) {
            $statement->bindValue($key, $value);
        }
        $statement->execute();

        $results = $statement->fetchAll();

        $statement->closeCursor();

        return $results;
    }

?>
