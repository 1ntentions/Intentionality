<?php
session_start();
include('db.php');

if (isset($_POST['login'])) {
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	//Cleans up username and password data
	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	if(empty($username)) {
		header("Location: login.php?error=Username is required");
	    exit();
	}else if(empty($password)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		//Gathers relevant rows from the database that match inputted username
        $stmt = $pdo->prepare("SELECT * FROM users WHERE user = '$username'");
        if ($stmt->execute()){
            $row = $stmt->fetch();
			//Checks if the password for the specified user matches the user's inputted password
            if($row['user'] === $username && password_verify($password, $row['pass'])) {
                $_SESSION['user'] = $row['user'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorrect username or password");
		        exit();
			}
        }else{
			header("Location: login.php?error=Incorrect username or password");
	        exit();
		}
	}
}else{
	header("Location: login.php");
	exit();
}
?>