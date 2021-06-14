<?php
session_start();
$con = mysqli_connect('localhost','root',' ','userregistration');
$name = $_POST['user'];
$_SESSION['name']= $name;
$pass = $_POST['password'];
$s = "select * from user where name = '$name' && password = '$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
	$r = mysqli_query($con,"select * from details where name ='$name'");
	$n = mysqli_num_rows($r);
	if($n == 1){
		echo"<script> location.href='home.php?user1=1'</script>";
	}else{
		echo"<script> location.href='home.php'</script>";

	}

		
}else{
    header('localhost:login.php');
}

?>