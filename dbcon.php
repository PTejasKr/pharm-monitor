<?php
/**
 * Database connection optimized for Railway.app
 */

// Railway provides these variables by default for its MySQL service
$host     = getenv('MYSQLHOST') ?: "localhost";
$user     = getenv('MYSQLUSER') ?: "root";
$password = getenv('MYSQLPASSWORD') ?: "";
$dbname   = getenv('MYSQLDATABASE') ?: "pharm_monitor";
$port     = getenv('MYSQLPORT') ?: "3306";

// Create connection
$con = mysqli_connect($host, $user, $password, $dbname, $port);

// Check connection
if (!$con) {
    die("Database Connection Error: " . mysqli_connect_error());
}
?>