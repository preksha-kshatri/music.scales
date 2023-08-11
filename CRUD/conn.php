<?php
$dsn = "mysql:host=localhost;dbname=music";
$user = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);
    if ($pdo) {
        echo "";
    }
} catch (PDOException $e) {
    echo "Failed" . $e->getMessage();
}
