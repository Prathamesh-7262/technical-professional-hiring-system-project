<?php
$servername="localhost";
$username="root";
$password='';
$dbname="user";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
$name= $_POST['name'];
$email= $_POST['email'];
$message=$_POST['message'];
$sql="INSERT INTO feedback(name,email,message)VALUES('$name','$email','$message')";
if($conn->query($sql)===TRUE){
    
    header("Location:index.html");
    exit();
}
else{
    echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();
?>