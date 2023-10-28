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

    
<!-- header section starts  -->

<header>

    <a href="#" class="logo">TSPS</a>


    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#service">service</a>
        <a href="#team">team</a>
        <a href="#contact">contact</a>
        <a href="logout.php">Logout</a>

    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size (optional)
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // File uploaded successfully; now insert the record into the database
        $conn = new mysqli("localhost", "root", '', "user");

        $filename = $_FILES["fileToUpload"]["name"];
        $description = $_POST["mobile"];

        $sql = "INSERT INTO images (filename, description) VALUES ('$filename', '$description')";
        $conn->query($sql);
        $conn->close();

        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<br>
<a href="feedback.html"><input type="button" value="Exit"></a>
</section>
</body>
</html>