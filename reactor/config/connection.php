<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 13/09/2018
 * Time: 7:15 AM
 */

$server = HOST;
$database = DATABASE;
$username = DATABASE_USER;
$password = DATABASE_PWD;

// Create connection
$conn = new mysqli($server,  $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";