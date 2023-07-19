
<?php
$servername = "localhost";
$username = "root";
$password = "mypassword";
$dbname = "bookform";



$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$location = $_POST['location'];
$guests = $_POST['guests'];
// $guests = (int)$_POST['guests'];
$arrivals = $_POST['arrivals'];
$leaving = $_POST['leaving'];


//  $connection = mysqli_connect('mysql1006.mochahost.com','lanandan_will_notification', '2{}A(90f_%F5','lanandan_will_notification');


$conn = new mysqli($servername, $username, $password, $dbname);


if($connection == FALSE){
    die("server not connected".mysqli_connect_error());
}


$sql = "INSERT INTO tripform (name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";
//    echo $sql;
//      exit;
// echo $request;
if ($conn->query($sql) === TRUE) {
    echo "Form submitted and data inserted into the database successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>


  


