<?php

// TODO 1 : SETUP & CONNECT DATABASE
$host = 'localhost';
$user = 'root';
$password = ''; // Update this with your actual password
$dbname = 'responsipbp'; // Update this with your actual database name

// Create connection
$db = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
