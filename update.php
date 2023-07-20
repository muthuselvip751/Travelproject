<?php
// $servername = "localhost";
// $username = "root";
// $password = "mypassword";
// $dbname = "bookform";


$servername = "mysql1006.mochahost.com";
$username = "lanandan_will_notification";
$password = "2{}A(90f_%F5";
$dbname = "lanandan_will_notification";



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

    // $sql = "UPDATE tripform
    //         SET name='$name', email='$email', phone='$phone', address='$address', location='$location',
    //         guests='$guests', arrivals='$arrivals', leaving='$leaving'
    //         WHERE id='$id'";


    $sql = "UPDATE bookform
            SET name='$name', email='$email', phone='$phone', address='$address', location='$location',
            guests='$guests', arrivals='$arrivals', leaving='$leaving'
            WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: display.php"); 
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
} else {
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // $sql = "SELECT * FROM tripform WHERE id='$id'";
        $sql = "SELECT * FROM bookform WHERE id='$id'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
         
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <style>
        body{
            font-family:Arial, sans-serif;
            line-height:1.6;
            padding:0;
            margin:0;
        }
        .container{
            max-width:960px;
            padding:20px;
            margin:0 auto;
            /* border:2px solid red; */
        }
        h1{
            text-align:center;
            margin-bottom:20px;
        }
form{
    max-width:600px;
    margin:0 auto;
    /* border:2px solid red; */
    background-color:gray;
    
}
label{
    display:block;
    margin-bottom:5px;
}
input{
    width:95%;
    border:2px solid black;
    padding-bottom:10px;
    border-radius:5px;
    padding:10px;
}
button{
    padding:10px 20px;
    background-color:#007BFF;
    color:#fff;
    border:none;
    border-radius:5px;
    cursor:pointer;
/* border:2px solid red; */
top:0;
bottom:10px;
margin-top:20px;
margin-left:250px;
}
button:hover{
    background-color:#0056b3;
}
/* media queries */
@media (max-width:768px){
    form{
        font-size:14px;
    }
    input{
        padding:8px;
    }
    button{
        padding:8px 16px;
    }
}
@media (max-width:576px){
    form{
        font-size:12px;
    }
    input{
        padding:6px;
    }
}


    </style>
   
</head>
<body>

    <h1>Update Data</h1>

    <form method="post">
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $row["name"]; ?>"><br>
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $row["email"]; ?>"><br>
        <label>Phone:</label>
        <input type="text" name="phone" value="<?php echo $row["phone"]; ?>"><br>
        <label>Address:</label>
        <input type="text" name="address" value="<?php echo $row["address"]; ?>"><br>
        <label>Location:</label>
        <input type="text" name="location" value="<?php echo $row["location"]; ?>"><br>
        <label>Guests:</label>
        <input type="text" name="guests" value="<?php echo $row["guests"]; ?>"><br>
        <label>Arrivals:</label>
        <input type="text" name="arrivals" value="<?php echo $row["arrivals"]; ?>"><br>
        <label>Leaving:</label>
        <input type="text" name="leaving" value="<?php echo $row["leaving"]; ?>"><br>
        <button type="submit">Update</button>
    </form>

</body>
</html>
<?php
        } else {
            echo "Record not found.";
        }

        $conn->close();
    } else {
        echo "Invalid request.";
    }
}
?>

