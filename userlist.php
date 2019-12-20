<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>

<body>
<?php
session_start();
	if (isset ($_SESSION['user'])) {
	include_once('config2.php');
		
$stmt = $conn->query("select * from profile.users");
		$result = $stmt->fetchAll();
	
		
?>
<div class="container">
	<h1>Welcome to homepage</h1>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">User name</th>
      <th scope="col">Full name</th>
      <th scope="col">Email address</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
<?php
	foreach ($result as $row) {
?>
    <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['username']?></td>
      <td><?php echo $row['fullname']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['gender']?></td>
      <td><img width="50px" height="50px" style="border-radius:25px" src="img/<?php echo $row['file'] ?>"
			   class="rounded-circle"></td>
    </tr>
<?php
	}
?>
  </tbody>
</table>

<?php
	}else{
?>
	<div class="alert alert-danger">
    <strong>Danger!</strong> You should <a href="#" class="alert-link">read this message</a>.
  </div>
<?php
	}
?>

</body>
</html>