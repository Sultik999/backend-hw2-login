<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title>hw2-registration-page</title>
</head>
<body class="bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 m-auto">
				<div class="card bg-light mt-5 mb-5">
					<div class="card-title">
						<h4 class="bg-success text-white text-center py-2">Registration</h4>
					</div>
					<div class="card-body">

						<form action="insert.php" method="post">

							<div class="row mb-3 ml-auto mr-auto">

								<div class="col-3">
									<label class="form-label form-label-left form-label-auto" for=""><b>Name</b></label>
								</div>

								<div class="name-surname col-9 position-sticky">
									<input type="text" class="form-control" placeholder="" name="name">
								</div>

							</div>							

							<div class="row mb-3 ml-auto mr-auto">

								<div class="col-3">
									<label class="form-label form-label-left form-label-auto" for=""><b>Password</b></label>
								</div>

								<div class="name-surname col-9 position-sticky">
									<input type="password" class="form-control mb-4" placeholder="" name="password">
								</div>

							</div>
							
							<div class="text-center">
								<button class="btn btn-primary text-center" name="register">To register</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>