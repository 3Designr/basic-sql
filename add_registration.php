<?php
include_once('config2.php');
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$file_name = $_FILES['fileToUpload']['name'];
$file_size = $_FILES['fileToUpload']['size'];
$file_type = $_FILES['fileToUpload']['type'];
$file_source = $_FILES['fileToUpload']['tmp_name'];
//$file_ext = strlower(end(explode('.',$_FILES['fileToUpload'],['name'])));



$sql = "INSERT INTO profile.users (`username`, `fullname`, `email`, `password`, `gender`, `file`) VALUES (:fullname, :username,  :email, :password, :gender, :file)";
$query = $conn->prepare($sql);
$query->bindParam(':fullname',$fullname);
$query->bindParam(':username',$username);
$query->bindParam(':email',$email);
$query->bindParam(':password',$password);
$query->bindParam(':gender',$gender);
$query->bindParam(':file',$file_name);
$query->execute();
move_uploaded_file($file_source,'img/'.$file_name);
session_start();
	$_SESSION['user'] = 'valid';
	header('location:userlist.php');
$conn = null;
//config for connection


?>