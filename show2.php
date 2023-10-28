<?php
if(isset($_GET['mobile_no'])) {
    $mobile_no = $_GET['mobile_no'];
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "user";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the query
    $sql = "SELECT * FROM images WHERE description = '$mobile_no'";
    $result = $conn->query($sql);

    // Check if there is a match
    if ($result->num_rows > 0) {
        // If there is a match, you can fetch the data or perform any other actions here
        while ($row = $result->fetch_assoc()) {
            echo'<br>';
            echo '<img src="uploads/' . $row["filename"] . '" alt="' . $row["description"] . '"><br>';
        }
    } else {
        // If there is no match, you can handle it accordingly
        echo "No results found for the provided mobile number.";
    }

    // Close the connection
    $conn->close();
}
?>
