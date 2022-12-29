<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
		<meta name="generator" content="Jekyll v4.0.1" />
		<title>Signin</title>
		<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/" />

		<!-- Bootstrap core CSS -->
		<link href="../assets/dist/css/bootstrap.css" rel="stylesheet" />

		<style>
			.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}

			@media (min-width: 768px) {
				.bd-placeholder-img-lg {
					font-size: 3.5rem;
				}
			}
		</style>
	</head>
	<body>
		<div class="my-5 text-center">
			<img class="mb-4" src="./assets/brand/bootstrap-solid.svg" alt="" width="72" height="72" />
			<h1 class="mb-3 h3 font-weight-normal">TRANSACTION.COM</h1>
			<p>Welcome to our platform which will helps you to easyly perform <code>Transactions</code> to user that you will find in.</p>
		</div>

		<form class="m-auto form-signin w-25" method="POST" action="../functions/auth.php">
			<div class="mb-3 form-label-group">
				<label for="login">Login</label>
				<input type="text" id="login" name="login" class="form-control" placeholder="Login" required autofocus />
			</div>

			<div class="mb-3 form-label-group">
				<label for="password">Password</label>
				<input type="password" id="password" name="password" class="form-control" placeholder="Password" required />
			</div>

			<input type="text" hidden name="signin" value="signin" />

			<div class="mb-3 checkbox">
				<label> <input type="checkbox" value="remember-me" /> Remember me </label>
			</div>

			<p class="text-center text-muted"><a href="http://phpserver.cm/signup">Creer un compte.</a></p>

			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>

		<p class="mt-5 mb-3 text-center text-muted">&copy; 2017-2020</p>
	</body>
</html>
