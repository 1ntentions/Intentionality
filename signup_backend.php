<?php
function validate_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['signup'])){
	include ('db.php');

	//Cleans up username and password data
	$username = validate_input($_POST['username']);
	$password = validate_input($_POST['password']);

	if(empty($username)) {
		header("Location: signup.php?error=Username is required");
	}else if(empty($password)) {
		header("Location: signup.php?error=Password is required");
	}else {
        $stmt = $pdo->query("SELECT * FROM users WHERE user='$username'");
        if($stmt->rowCount() > 0){
		    header("Location: signup.php?error=This username has already been taken by another account");
        }else {
			//Hashes the password and adds the username and password to the database
        	$password = password_hash($password, PASSWORD_DEFAULT);
	        $stmt = $pdo->prepare("INSERT INTO users(user, pass) VALUES ('$username', '$password')");
	        $stmt->execute();

		    header("Location: signup.php?success=Successfully signed up!");
	    }
	}
}else {
	header("Location: signup.php");
}