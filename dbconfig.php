<?php
$servername = "localhost";
$username = "root";
$password = "mypassword";
$dbname = "bookform";

// $servername = "mysql1006.mochahost.com";
// $username = "lanandan_will_notification";
// $password = "2{}A(90f_%F5";
// $dbname = "lanandan_will_notification";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>