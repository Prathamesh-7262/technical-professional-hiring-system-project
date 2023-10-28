<?php
        $servername="localhost";
        $username="root";
        $password='';
        $dbname="user";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error){
            die("connection failed:".$conn->connect_error);
        }
        $name= $_POST['Fname'];
        $surname= $_POST['Lname'];
        $mobile= $_POST['Mbnumber'];
        $email= $_POST['Email'];
        $address= $_POST['address'];
        $cost= $_POST['cost'];
        $sql="INSERT INTO carpenter(firstname,lastname,mobile_no,email,address,cost)VALUES('$name','$surname','$mobile','$email','$address','$cost')";
        if($conn->query($sql)===TRUE){
            
            header("Location:Us&Pass1.html");
            exit();
        }
        else{
            echo "Error:".$sql."<br>".$conn->error;
        }
        $conn->close();
        ?>