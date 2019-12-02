<?php
// Database configuration
$dbHost     = "50.23.105.186";
$dbUsername = "protexac_panel";
$dbPassword = "bR6cvWpVrw(s";
$dbName     = "protexac_temporal";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>