<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <link rel="stylesheet" href="./Assets/CSS/display.css">
   
  </head>
<body>

    <h1>Data from the Database</h1>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Location</th>
                <th>Guests</th>
                <th>Arrivals</th>
                <th>Leaving</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            
            <!-- // $servername = "localhost";
            // $username = "root";
            // $password = "mypassword";
            // $dbname = "bookform";  -->

            <?php
            require_once "./Assets/PHP/dbconfig.php";


        //   $servername = "mysql1006.mochahost.com";
        //   $username = "lanandan_will_notification";
        //   $password = "2{}A(90f_%F5";
        //   $dbname = "lanandan_will_notification";



// ========================== sql connection ======================================
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

//==================================== Fetch data from the database============================

            $sql = "SELECT * FROM tripform";

            // $sql = "SELECT * FROM bookform";
            
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["location"] . "</td>";
                    echo "<td>" . $row["guests"] . "</td>";
                    echo "<td>" . $row["arrivals"] . "</td>";
                    echo "<td>" . $row["leaving"] . "</td>";
                    echo "<td>
                            <a href='./Assets/PHP/update.php?id=" . $row["id"] . "'>Update</a>
                            <a href='./Assets/PHP/delete.php?id=" . $row["id"] . "'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='10'>No data found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>

    <div style="text-align: center; margin-top: 20px;">
        <a href="index.php" 
        style="padding: 10px 20px; background-color: #28a745; color: #fff; text-decoration: none; 
        border-radius: 5px;">
        Back to Book Form</a>
    </div>
    
    

</body>
</html>
