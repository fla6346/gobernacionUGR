<?php
try {
    $pdo = new PDO('pgsql:host=postgres;port=5432;dbname=bdGobUGR', 'postgress', '1236346');
    echo "Connected to PostgreSQL successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>