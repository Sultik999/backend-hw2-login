<?php

	$UserName = $_POST['name'];
	$UserPassword = $_POST['password'];

	$con = mysqli_connect("localhost", "root", "", "hw2");

	$query = "SELECT * from students where name='$UserName' AND password='$UserPassword'";

	$result = mysqli_query($con, $query);

	$data = mysqli_fetch_assoc($result);

	if ($data) {
		session_start();
		$_SESSION['user_id'] = $data['id'];
		echo "Welcome, " . $data['name'] . "<br />";
		echo "Session started: user_id = " . $data['id'];
	} else {
		echo "Wrong username or password";
	}

	mysqli_close($con); 
?>