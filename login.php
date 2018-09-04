<!DOCTYPE html>
<html>
<head>
	<title>Login & Signin</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="text-success text-center">Database Quiz World</h1>
		<div class="row"> 
			<div class="col-lg-6">
				<div class="card">
					<h2 class="card-header"> Login form</h2>
					<form action="validation.php" method="post">
						<div class="form-group">
							<label>username</label>
							<input type="text" name="user" class="form-control">
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
						</div>

						<button type="submit" class="btn btn-primary"> Login</button>

					</form>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="card">
					<h2 class="card-header"> Signin form</h2>
					<form action="registration.php" method="post">
						<div class="form-group">
							<label>username</label>
							<input type="text" name="user" class="form-control">
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
						</div>

						<button type="submit" class="btn btn-primary"> Signin</button>

					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>