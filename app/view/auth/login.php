<!--	<div>-->
	<!--		<input type="text" name="username">-->
	<!--	</div>-->
	<!--	<div>-->
	<!--		<input type="text" name="password">-->
	<!--	</div>-->
	<!--	<div>-->
	<!--		<input type="submit" name="submit">-->
	<!--	</div>-->
	<!--</form>-->

<!DOCTYPE html>
<html>
<head>
	<title>Masuk - Verpush</title>
	<!-- Material icons font -->
	<link href="<?= URL; ?>css/material-icons.css" rel="stylesheet">
	<!-- Materialize style-sheet -->
	<link href="<?= URL; ?>css/materialize.min.css" rel="stylesheet">
	<!-- Styles -->
	<style>
		.card-panel {
			margin-top: 100px;
		}
		.card-title {
			margin-bottom: 30px;
		}
		.login-input {
			margin-bottom: 0;
		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<main class="container">
	<div class="row">
		<div class="col s12 m5 offset-m3">
			<div class="card-panel">
				<h5 class="card-title center-align grey-text">Masuk ke <strong>Verpush</strong></h5>
				<form action="<?= URL ?>auth/login" method="post">
					<div class="row login-input">
						<div class="input-field col s10 offset-s1">
							<input type="text" name="username" class="validate">
							<label for="email">Username</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s10 offset-s1">
							<input type="password" name="password" class="validate">
							<label for="password">Password</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6 center-align">
							<button class="btn waves-effect waves-light" type="submit" name="login">Masuk</button>
						</div>
						<div class="input-field col s6 center-align">
							<button class="btn waves-effect grey" type="reset">Reset</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
<!-- jQuery 2.1.1 -->
<script type="text/javascript" src="<?php echo URL; ?>js/jquery-2.1.1.min.js"></script>
<!-- Materialize CSS scripts file -->
<script type="text/javascript" src="<?php echo URL; ?>js/materialize.min.js"></script>
<!-- Scripts -->
<script type="text/javascript" src="<?php echo URL; ?>js/scripts.js"></script>
</body>
</html>
