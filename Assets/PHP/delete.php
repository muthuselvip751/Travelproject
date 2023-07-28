<?php

require_once "./Assets/PHP/dbconfig.php";




if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM tripform WHERE id='$id'";
    //$sql = "DELETE FROM bookform WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ./Assets/PHP/display.php"); 
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>
