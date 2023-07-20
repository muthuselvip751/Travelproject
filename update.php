<?php
$servername = "localhost";
$username = "root";
$password = "mypassword";
$dbname = "bookform";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $location = $_POST["location"];
    $guests = $_POST["guests"];
    $arrivals = $_POST["arrivals"];
    $leaving = $_POST["leaving"];
// connection
    $sql = "UPDATE tripform
    SET name='$name', email='$email', phone='$phone', address='$address', location='$location',
    guests='$guests', arrivals='$arrivals', leaving='$leaving'
    WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
header("Location: display.php"); 
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}
?>