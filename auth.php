
<?php 
session_start();
include "apps/config.php";

if (isset($_POST['username']) && isset($_POST['password'])){
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data; 

	}
	$username 	= validate($_POST['username']);
	$password 	= validate($_POST['password']);

	if (empty($username)) {
		header("Location: index.php?error=Username is required ");
		exit();
	}else if(empty($password)){
		header("Location: index.php?error=Password is required ");
		exit(); 
	}else {
		$sql 	= "SELECT * FROM tb_akses WHERE username= '$username' AND password= '$password'";

		$result	= mysqli_query($link, $sql);

		if (mysqli_num_rows($result)=== 1) {
			$row = mysqli_fetch_assoc($result);
			if($row['username'] ===  $username && $row['password'] === $password){
			   $_SESSION['username'] = $row['username'];
			   $_SESSION['team'] = $row['team'];
			   header("Location: apps/index.php");
				exit();
			}
		}else {
			header("Location: index.php?error=Incorrect Username or Password");
			exit();
		}
	}

}else {
	header("Location:index.php");
	exit();
}