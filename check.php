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
$sql="select * from login1 where username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1){
    echo "<h3>Login successfull";
    header("Location:display.html");
    exit();
}
else{
    echo "Login Failed";
}
$conn->close();
?>