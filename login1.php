<?php
$servername="localhost";
$username="root";
$password='';
$dbname="user";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
$username= $_POST['username'];
$password= $_POST['password'];
$sql="INSERT INTO login1(username,password)VALUES('$username','$password')";
if($conn->query($sql)===TRUE){
    
    header("Location:confirm.html");
    exit();
}
else{
    echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();
?>