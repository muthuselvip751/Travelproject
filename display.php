<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <style>
        
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}


table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    /* border:2px solid red; */
}

th, td {
    padding: 10px;
    border-bottom: 1px solid #ccc;
}

th {
    background-color: #f2f2f2;
    text-align: left;
}

tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

td[colspan='8'] {
    text-align: center;
    padding: 20px;
    font-style: italic;
    color: #888;
    /* border:2px solid red; */
}
td:last-child {
    text-align: center;
}


td:last-child a {
    display: inline-block;
    padding: 5px 10px;
    margin: 5px;
    color: #fff;
    text-decoration: none;
    border-radius: 3px;
}


td:last-child a:nth-child(1) {
    background-color: #007bff;
}

td:last-child a:nth-child(2) {
    background-color: #dc3545;
}


td:last-child a:hover {
    background-color: #6c757d;
}

 /* media queries */
@media (max-width: 768px) {
    table {
        font-size: 14px;
    }

    th, td {
        padding: 8px;
    }
}

@media (max-width: 576px) {
    table {
        font-size: 12px;
    }

    th, td {
        padding: 6px;
    }
    th {
        display: none;
    }

  td:last-child {
        text-align: center;
    }

   
    tbody tr {
        display: block;
        margin-bottom: 10px;
    }

    td {
        display: block;
        padding: 6px;
        /* background-color:gray; */
    }

    td:last-child {
        float: right;
    }
}

    </style>
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
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "mypassword";
            $dbname = "bookform";

// ========================== sql connection ======================================
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

//==================================== Fetch data from the database============================
            $sql = "SELECT * FROM tripform";
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
                            <a href='update.php?id=" . $row["id"] . "'>Update</a>
                            <a href='delete.php?id=" . $row["id"] . "'>Delete</a>
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
