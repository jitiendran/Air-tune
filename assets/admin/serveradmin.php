<?php
    session_start();
	$username = "";
	$email    = "";
	$errors = array();
    $_SESSION['success'] = "";
    if(isset($_POST['english'])){
        // echo "hi";
            $db = mysqli_connect('localhost','root','','english');
            $name = mysqli_real_escape_string($db,$_POST['name']);
            if (empty($name)) { array_push($errors, "Name is required"); }
            if(count($errors) == 0){
                $query = "CREATE TABLE $name(
                    sid INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    sname varchar(255) NOT NULL,
                    song varchar(255) NOT NULL,
                    composer varchar(255) NOT NULL
                )";
                mysqli_query($db,$query);
                echo "From english";
                header('location: admin-albums.php');
            }
    }
    if(isset($_POST['tamil'])){
            $db = mysqli_connect('localhost','root','','tamil');
            $name = mysqli_real_escape_string($db,$_POST['name']);
            if (empty($name)) { array_push($errors, "Name is required"); }
            if(count($errors) == 0){
                $query = "CREATE TABLE $name(
                    sid INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    sname varchar(255) NOT NULL,
                    song varchar(255) NOT NULL,
                    composer varchar(255) NOT NULL
                )";
                mysqli_query($db,$query);
                echo "From tamil";
                header('location: admin-albums.php');
            }
    }
?>