<html>
<head>
</head>
<body>
<?php
$server ="localhost";
$username ="test";
$password ="";
$dbname ="register";
$conn= mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['Register'])){
if(!empty($_POST['userid'])&& !empty($_POST['emailid'])&& !empty($_POST['password'])){
$userid =$_POST['userid'];
$emailid =$_POST['emailid'];
$password =$_POST['password'];
$query ="insert into register values('$userid','$emailid','$password')";
$run =mysqli_query($conn,$query) or die(mysqli_error());
if($run){
echo "data succesfully saved";
}
else {echo "data not saved";

}
else {echo "all fields required";
}
}
?>
</body>
</html>
