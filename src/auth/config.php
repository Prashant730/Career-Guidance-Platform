<?php
// Database configuration for InfinityFree
$servername = "sql100.infinityfree.com";
$username = "if0_40564292";
$password = "7UpQ1wuLUUSkT";  // Replace with your actual password from InfinityFree
$dbname = "if0_40564292_careercompass";
$dbport = "3306";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $dbport);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Only create database if using localhost (local development)
if ($servername === "localhost" || $servername === "127.0.0.1") {
    // Create database if it doesn't exist (local development only)
    $createDbConn = new mysqli($servername, $username, $password);
    if (!$createDbConn->connect_error) {
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        $createDbConn->query($sql);
        $createDbConn->close();
    }

    // Select the database
    $conn->select_db($dbname);
}

// Create users table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    role ENUM('user', 'hr', 'admin') NOT NULL DEFAULT 'user'
)";

if ($conn->query($sql) !== TRUE) {
    die("Error creating table: " . $conn->error);
}
?>
