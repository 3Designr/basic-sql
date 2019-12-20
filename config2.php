<?php
$host = 'localhost';
$dataname = 'profile';
$dbusername = 'root';
$dbpassword = '';
try{
	$conn = new PDO("mysql:host=$host;
				dbname:=$dataname",
				$dbusername,
				$dbpassword);

	
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo'Connection is made';	


	
}catch(PDOException $e) {
	echo'connection is failed:'.$e->getMessage();
}
?>