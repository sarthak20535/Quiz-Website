<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
</html>
<body>
	<div class="container">
        <br><h1 class = "text-center text-success">Welcome to Quiz World</h1></h1><br>
		<div class="row">
			<div class="col-lg-6">
				<div class="card" >
				<h2 class = "text-center card-header">Login form</h2>

				<form action="validation.php" method ="post">

					<div class ="form-group">
						<label>username</label>
						<input type="text" name="user" class ="form-control">
					</div>

					<div class ="form-group">
						<label>Password</label>
						<input type="Password" name="password" class ="form-control">
					</div>

					<button type ="submit" class ="btn btn-primary">Login</button>
				</form>
			</div>
            </div>

				<div class="col-lg-6">
					<div class="card" >
				<h2 class = "text-center card-header">Signin form</h2>

				<form action="registration.php" method ="post">

					<div class ="form-group">
						<label>username</label>
						<input type="text" name="user" class ="form-control">
					</div>

					<div class ="form-group">
						<label>Password</label>
						<input type="Password" name="password" class ="form-control">
					</div>

					<button type ="submit" class ="btn btn-primary">Signin</button>
				</form>
			</div>


			</div>
		</div>
    </div>

       

</body>
</html>