<?php
$dbHost ="localhost";
$dbUser="test";
$dbPassword ="";
$dbName ="register";
$conn =mysqli($dbHost,$dbUser,$dbPassword,$dbName);
if($conn->connect_error)
{die("connection failed :".$conn->connect_error);
}
$user-id=$_REQUEST['user-id'];
$email-id=$_REQUEST['email-id];
$password=$_REQUEST['password'];
$sql="insert into register values('$user-id','$email-id','$password')";
if ($conn->query($sql === TRUE){
echo"DATA SUCCESFULLY INSERTED";
}
else{
echo"ERROR CREATING TABLES: "..$conn->error;
}
$conn->close();
?>

