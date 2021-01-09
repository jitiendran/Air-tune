<?php
	session_start();
	$username = "";
	$email    = "";
	$errors = array();
	$_SESSION['success'] = "";
	$db = mysqli_connect('localhost','root','','air-tunes');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
        $name = mysqli_real_escape_string($db, $_POST['name']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

        if (empty($name)) { array_push($errors, "Name is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		if (count($errors) == 0) {
			// $password = md5($password_1);
			$query = "INSERT INTO users (names,username,email,passwords)
					VALUES('$name','$username', '$email', '$password_1')";
			mysqli_query($db, $query);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: assets/user.html');
		}

	}
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['name']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		if($username == "admin" && $password == "Jitiendran@2000"){
			header('location: assets/admin/admin.php');
		}
		else if (count($errors) == 0) {
			// $password = md5($password);
			$query = "SELECT * FROM users WHERE names ='$username' AND passwords='$password'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: assets/users/user.html');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
?>