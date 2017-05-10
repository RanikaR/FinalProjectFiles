<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=rmr29';
    $username = 'rmr29';
    $password = 'UEF6rZEE4';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
