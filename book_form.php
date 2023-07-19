
<?php

// $connection = mysqli_connect('mysql1006.mochahost.com','lanandan_will_notification', '2{}A(90f_%F5','lanandan_will_notification');

$connection = mysqli_connect('localhost','root','mypassword','bookform');

if($connection == FALSE){
    die("server not connected".mysqli_connect_error());
}



if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    // $guests = (int)$_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

try{
    $request = "insert into tripform(name, email, phone, address,location,guests,arrivals,leaving)
     values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";
    // echo $request;
    // exit;
    if(mysqli_query($connection,$request)){
        header('location:index.php');
        exit();
    

}else{
    throw new Exception(mysqli_error($connection));
}
}
catch (Exception $e) {
    $error_message = $e->getMessage();
    echo 'Error: ' . $error_message;

}
}
mysqli_close($connection);
?>
