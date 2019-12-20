<?php
$host = 'localhost';
$dataname = 'profile';
$dbusername = 'root';
$dbpassword = '';

$conn = new PDO("mysql:host = $host;
				dbname: = $dataname",
				$dbusername,
				$dbpassword);
$sql = "SELECT * FROM `testing`";
$result = $conn->query($sql);
foreach($result as $row) {
var_dump($row);
}
?>