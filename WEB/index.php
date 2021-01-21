<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bejelentkezés</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
</head>
<body>
<nav class="main-nav">
	<ul>
		<li><a class="signin" href="#0">Bejelentkezés</a></li>
	</ul>
</nav>

<div class="user-modal">
		<div class="user-modal-container">
			<div id="login">
				<form class="form" action="signin.php" method="POST">
					<p class="fieldset">
						<label class="image-replace username" for="signin-username">Felhasználónév</label>
						<input class="full-width has-padding has-border" id="signin-username" type="text" name="username" placeholder="Felhasználónév" required>
					</p>

					<p class="fieldset">
						<label class="image-replace password" for="signin-password">Jelszó</label>
						<input class="full-width has-padding has-border" id="signin-password" type="password"  name="password" placeholder="Jelszó">
						<a href="#0" class="hide-password">Mutat</a>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Bejelentkezés">
					</p>
				</form>
			</div>
		</div>
	</div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
