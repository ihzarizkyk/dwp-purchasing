<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<title>E-purchasing</title>
</head>
<style>
	body{
		background-color: gray;
	}
</style>
<body>

	<div class="container-fluid">

		<div class="row mt-3 mb-3">

			<div class="col-md-6 col-12">

     			<div class="card">
     				<div class="card-body">

     					<h1>E-Purchasing for DWP</h1>

		     			<form name="fLogin" action="/postlogin" method="POST">

							<div class="mb-3">
								<label class="form-label" for="username">
									Username
								</label>
								<input class="form-control" type="text" name="name" placeholder="Your Username">
							</div>

							<div class="mb-3">
								<label class="form-label" for="password">
									Password
								</label>
								<input class="form-control" type="password" name="name" placeholder="Your Password">
							</div>

							<div class="mb-3">
		                        <input type="submit" class="btn btn-md btn-primary" value="Login">
							</div>
						</form>

     				</div>
     			</div>

			</div>

		</div>

	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>