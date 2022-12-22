<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3" />
		<title>New Transaction</title>
		<link
			rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
			integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
			crossorigin="anonymous"
		/>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />

		<link href="../assets/dist/css/bootstrap.css" rel="stylesheet" id="bootstrap-css" />
		<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
		<link href="../assets/dist/css/bootstrap-reboot.css" rel="stylesheet" id="bootstrap-css" />
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />

		<link rel="stylesheet" href="../assets/css/sideMenu.css" />
		<style>
			#show-sidebar {
				top: 4em;
			}
			#sidebar {
				top: 3.5em;
				bottom: 0em;
				height: auto;
			}
			.page-wrapper {
				height: auto;
			}
		</style>

		<!------------------------------------------------------------------------------------------------------------>
		<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/offcanvas/" />
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
		<!-- Custom styles for this template -->
		<link href="./assets/css/offcanvas.css" rel="stylesheet" />
		<!------------------------------------------------------------------------------------------------------------>

		<script src="./scripts/sideMenu.js" defer></script>
		<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
		<script src="../assets/jquery-3.5.1.slim.min.js" defer></script>
		<script src="../assets/jquery-3.5.1.min.js" defer></script>
		<script src="../assets/dist/js/bootstrap.min.js" defer></script>
	</head>

	<body>
		<div class="page-wrapper chiller-theme toggled">
			<!-- ****************************************** SIDE MENU ************************************************ -->
			<?php include "../components/menu-side.php";?>
			<!-- ****************************************** TOP MENU ************************************************ -->
			<?php include "../components/menu-top.php";?>

			<!-- ****************************************** CONTENT  ************************************************ -->
			<main class="page-content">
				<div class="container-fluid">
					<main role="main" class="container">

						<!-- ************************************** TITLE INCLUDE ***************************************** -->
              <?php include "../components/title.php";?>
						<!-- ************************************** CONTENT INCLUDE *************************************** -->
						<?php include "../components/transaction-form.php";?>

						<script> window.jQuery || document.write('<script src="/assets/jquery-3.5.1.slim.min.js"><\/script');</script>
						<script src="./assets/dist/js/bootstrap.bundle.js"></script>
						<script src="./scripts/offcanvas.js"></script>
						<script defer>
							$(document).ready(function () {
								$('#userName').keyup(function () {
									var userName = $(this).val();
									if (userName !== '') {
										$.ajax({
											url: 'http://phpserver.cm/functions/autocomplete.php',
											method: 'POST',
											data: { userName: userName },
											success: function (data) {
												$('#userList').fadeIn();
												$('#userList').html(data);
											},
										});
									}
								});
							});

							$(document).on('click', 'li', function(){
								$('#userName').val($(this).text());
								$('#userId').val($(this).text().split('-')[0]);
								var userIdInput = document.getElementById('userId');
								console.log(userIdInput.value);
								$('#userList').fadeOut();
							});
						</script>
					</main>
				</div>
			</main>
		</div>
	</body>
</html>
