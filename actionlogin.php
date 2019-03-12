<?php
include 'koneksi.php';
session_start();
$conn = mysqli_connect("localhost","root","","septii");

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($conn,"SELECT * FROM user where username='$username' and password ='$password'");
$data = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result)>0) {
//login
	$_SESSION['username'] = $username;
	$_SESSION['id'] = $data['ID'];
	header('location:home2.php');
}else{
	echo "salah password";
}



?>