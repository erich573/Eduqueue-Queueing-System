<?php
// Ensure sessions work across all paths in the project
if (session_status() === PHP_SESSION_NONE) {
    // Set cookie path to project root so session persists across subfolders
    ini_set('session.cookie_path', '/');
    session_start();
}

$host = "localhost";
$username = "root";
$database = "queue_db";
$password = "";

try{
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("Connection failed: " . $e->getMessage());
}
?>