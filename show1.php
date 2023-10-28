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
<?php
if(isset($_GET['mobile_no'])) {
    $mobile_no = $_GET['mobile_no'];

$conn = new mysqli("localhost", "root",'', "user");
$sql = "SELECT * FROM images WHERE description='$mobile_no'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    echo'<br>';
    echo '<img src="uploads/' . $row["filename"] . '" alt="' . $row["description"] . '"><br>';
}

$conn->close();
}
}
?>
</section>
</body>
</html>