<?php
// Database configuration details
$host = "localhost";
$username = "root";
$password = ""; // XAMPP mein default password khali hota hai
$database = "skillswap_db";

// MySQL connection create karna (PDO ka use karke)
try {
    $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $username, $password);
    
    // Error mode set karna taaki agar koi error aaye toh pata chale
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
    // Agar connection fail ho jaye
    die("Connection failed: " . $e->getMessage());
}
?>