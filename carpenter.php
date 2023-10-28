<!Doctype html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="style2.css">
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
        <body>
            <div>
            <section class="home" id="home">
                <table border="1">
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Address</th>
                        <th>Mobile_no</th>
                        <th>Cost Per Hour</th>
                        <th>Online Payment</th>
                    </tr>
                    <?php
                    $servername="localhost";
                    $username="root";
                    $password='';
                    $dbname="user";
                    $conn=new mysqli($servername,$username,$password,$dbname);
                    if($conn->connect_error){
                        die("connection failed:".$conn->connect_error);
                    }
                    $sql="select firstname,lastname,address,mobile_no,cost from carpenter order by cost asc";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Step 3: Display the data in an HTML table
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["firstname"] . "</td>";
                            echo "<td>" . $row["lastname"] . "</td>";
                            echo "<td>" . $row["address"] . "</td>";
                            echo "<td>" . $row["mobile_no"] . "</td>";
                            echo "<td>" . $row["cost"] . "</td>";
                            echo "<td>" . "<a href='showimage.php?mobile_no=" . $row["mobile_no"] . "'>View</a>" . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "0 results";
                    } 
                    $conn->close();
                    ?>
                </table>
                </section>
            </div>
        </body>
</html>