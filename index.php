

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>hw2-login-page</title>
</head>
<body class="bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 m-auto">
				<div class="card bg-light mt-5 mb-5">
					<div class="card-title">
						<h4 class="bg-success text-white text-center py-2">Log in</h4>
					</div>
					<div class="card-body text-center">
						<form action="login.php" method="post">
							
							<input type="text" class="form-control mb-3" placeholder="Phone number or Email" name="name" required>

							<input type="password" class="form-control mb-3" placeholder="Password" name="password" required>

	
							
							<div class="register mb-3">
								<h7 >Don't have an account?</h7>
								<h7 class="register"><a href="registration.php">To register</a></h7>
							</div>

							<button class="btn btn-primary" name="login">Log in</button>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>