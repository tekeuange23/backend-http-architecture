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
			<h1 class="mb-3 h3 font-weight-normal">PHPSERVER.COM</h1>
			<p>Welcome to our platform which will helps you to easyly perform <code>Transactions</code> to user that you will find in.</p>
		</div>

		<div class="row">
			<form method="POST" action="../functions/auth.php" class="needs-validation" novalidate style="width: 100%">
				<div class="row">
					<div class="col-md-6 offset-md-5 order-md-1">
						<h3 class="mb-3">Sign Up</h3>
					</div>
				</div>

				<!-- ERROR MESSAGE -->
				<?php if ($_GET['message']) {echo "<p class=\"mt-1  text-danger mb-3 text-center text-muted\">" . $_GET['message'] . "</p>";}?>

				<div class="row" style="width: 100%">
					<div class="col-md-10 offset-md-1 order-md-1">
						<!-- NOM -->
						<div class="row">
							<div class="mb-3 col-md-6">
								<label for="nom">Nom</label>
								<input type="text" class="form-control" id="nom" placeholder="Nom" value="" name="nom" required />
								<div class="invalid-feedback">Un nom valide est requis.</div>
							</div>
							<div class="mb-3 col-md-6">
								<label for="nom">Prenom</label>
								<input type="text" class="form-control" id="prenom" placeholder="prenom" value="" name="prenom" required />
								<div class="invalid-feedback">Un prenom valide est requis.</div>
							</div>
						</div>

						<!-- LOGIN & PASSWORD -->
						<div class="row">
							<div class="mb-3 col-md-6">
								<label for="username">Login</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">@</span>
									</div>
									<input type="text" class="form-control" id="username" placeholder="Login" name="login" required />
								</div>
							</div>

							<div class="mb-3 col-md-6">
								<label for="password">Password</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">@</span>
									</div>
									<input type="text" class="form-control" id="password" placeholder="Mot de passe" name="password" required />
								</div>
							</div>
						</div>

						<!-- DATE & VILLE -->
						<div class="row">
							<div class="mb-3 col-md-4">
								<label for="date_naissance">Date de naissance</label>
								<div class="input-group">
									<input type="date" class="form-control" id="date_naissance" name="date_naissance" required />
								</div>
							</div>

							<div class="mb-3 col-md-4">
								<label for="ville">Ville</label>
								<div class="input-group">
									<select class="custom-select d-block w-100" id="ville" name="ville" required>
										<option value="">Choose...</option>
										<option value="Douala">Douala</option>
										<option value="Dschang">Dschang</option>
										<option value="New York">New York</option>
										<option value="Buea">Buea</option>
										<option value="Lagos">Lagos</option>
									</select>
								</div>
							</div>

							<div class="mb-3 col-md-4">
								<label for="pays">Pays</label>
								<div class="input-group">
									<select class="custom-select d-block w-100" id="pays" name="pays" required>
										<option value="">Choose...</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Nigeria">Nigeria</option>
										<option value="USA">USA</option>
										<option value="Rwanda">Rwanda</option>
										<option value="France">France</option>
										<option value="Royaume Uni">Royaume Uni</option>
									</select>
								</div>
							</div>
						</div>

						<input type="text" hidden name="signup" value="signup" />
					</div>
				</div>

				<p class="text-center text-muted"><a href="http://phpserver.cm/signin">Se connecter.</a></p>

				<div class="row" style="width: 100%">
					<div class="col-md-10 offset-md-1 order-md-1">
						<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
					</div>
				</div>
			</form>
		</div>

		<p class="mt-5 mb-3 text-center text-muted">&copy; 2017-2020</p>
	</body>
</html>
