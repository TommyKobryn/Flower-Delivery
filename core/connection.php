
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "flowers";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "connection successful";

require_once $_SERVER['DOCUMENT_ROOT'] . '/Flower_delivery_php/config.php';

?>
