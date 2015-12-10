<?php
include_once('user.php');
if(isset($_POST['submit'])){
	
	$name  = $_POST['user'];
	$password =$_POST['password'];

	$user= new User();
	$user->Login($name, $password);
}else{
	//print_r($_POST);
	echo "string";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="index.php">
		Username:<input type="text" name="user"><br>
		Password:<input type="text" name="password">
		<input type="submit" value="Submit" name="submit" />
	</form>
</body>
</html>