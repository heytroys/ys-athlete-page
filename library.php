<?php

function get_db_connection() {
    $host_name = "sports.local";
    $user_name = "root";
    $password = "yst3139";
    $db_name = "stats_sp";

    try {
        $pdo = new PDO("mysql:host=$host_name;dbname=$db_name;charset=utf8", $user_name, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}




?>