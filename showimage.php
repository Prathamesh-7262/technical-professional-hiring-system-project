<!Doctype html>
<html>
    <body>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSPS</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

    
<!-- header section starts  -->

<header>

    <a href="#" class="logo">TSPS</a>


    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#service">service</a>
        <a href="#team">team</a>
        <a href="#contact">contact</a>
        <a href="Login.html">Sign-in</a>

    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->
<section class="home" id="home">
    <table style="text-align:center;border: 1px;">
        <tr>
            <td>
    <div style="dispaly:flex;margin: top 20px;">
    <h3>Scan QR code for online Payment</h3>
</div>
</td>
</tr>
<tr>
    <td>
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
            echo'<br>';
        }
    } else {
        // If there is no match, you can handle it accordingly
        echo "Sorry!!No Online Payment is Availeble for this Provider.";
    }

    // Close the connection
    $conn->close();
}
?>
</td>
</tr>
<tr>
    <td>
<br>
<div style="height=10%">
<a href="feedback.html"><input type="button" value="Exit" class="my-button" style="padding:20px;"></a>
</div>
</td>
</tr>
</table>
<br>
</section>
<div class="footer">

<div class="box-container">

    <div class="box">
        <h3>about us</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt veniam eum in libero delectus sit reprehenderit velit similique! Ad, ea!.</p>
    </div>

    <div class="box">
        <h3>quick links</h3>
        <a href="#home">home</a>
        <a href="#service">service</a>
        <a href="#team">team</a>
        <a href="#contact">contact</a>
    </div>

    <div class="box">
        <h3>category</h3>
        <a href="#">Electician</a>
        <a href="#">Plumber</a>
        <a href="#">Car Modification</a>
        <a href="#">Bike Modification</a>
    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href="#">facebook</a>
        <a href="#">twitter</a>
        <a href="#">instagram</a>
        <a href="#">linkedin</a>
    </div>

</div>



</div>
</body>
</html>