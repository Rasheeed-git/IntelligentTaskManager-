<?php

// Database configuration settings
$host = 'localhost';        // Replace with your database host
$dbname = 'task_manager';   // Replace with your database name
$username = 'root';         // Replace with your database username
$password = 'root';             // Replace with your database password

try {
    // Create a new PDO instance for database connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set PDO attributes for error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle database connection errors
    echo "Database Connection Failed: " . $e->getMessage();
    die();
}
