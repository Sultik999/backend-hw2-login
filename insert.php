<?php 

	require_once("connection.php");

	if(isset($_POST['register'])){

		if(empty($_POST['name']) || empty($_POST['password']))
        {
            echo ' Please Fill in the Blanks ';
        } 
        else 
        {
        	$UserName = $_POST['name'];
        	$UserPassword = $_POST['password'];

        	$query = " INSERT into students(name, password) values('$UserName', '$UserPassword')";
        	$result = mysqli_query($con, $query);

        	if($result)
            {
                header("location:index.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }

	}else
	{
		header("location:index.php");
	}

?>