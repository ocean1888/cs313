<?php
	session_start();
	if (isset($_SESSION['username'])) {
		header("Location: photos.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Fotobase</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<script src="JS/less.js" type="text/javascript"></script>
	<script src="JS/jquery.js" type="text/javascript"></script>
	<script type="text/javascript">
		function checkPasswords() {
			var pass1 = $("input[name=password1]").val();
			var pass2 = $("input[name=password2]").val();
			if (pass1 != pass2) {
				return false;
			} else if(pass1.length >= 7) {
				var pattern = /[0-9]/;
				var result = pass1.match(pattern);
				if (result.length == 0);
					return false;
				return true;
			} else {
				return false;
			}
		}
	</script>
</head>
<body style="background-color:darkgrey;">
<h1 style="margin-left:10%;"> Log In to Fotobase </h1>
		<div class="container" style="margin-left:10%;margin-right:10%;margin-top:20px;">
			<div class="container" style="float: left; width:300px; background-color:lightgrey;
                                                   border-style:solid; border-width:2px; 
                                                   border-radius:5px;padding:5px;">
				<h1>Administrator Login</h1>
				<?php
					if (isset($_GET['error']) && $_GET['error'] == 1) {
						echo '<p class="error">Username and password did not match our records.</p>';
					}
				?>
				<form method="post" action="verify.php">
					<input type="text" name="username" placeholder="Username"><br />
					<input type="password" name="password" placeholder="Password"><br />
                                   <br />
					<button class="btn btn-sm btn-primary btn-block" 
                                    type="submit"> Sign In </button>
				</form>
			</div>
                     <div class="spacer" style="float:left; width:100px;height:300px;">
                     </div>
			<div class="container" style="float: left; width:300px; background-color:lightgrey;
                                                   border-style:solid; border-width:2px; 
                                                   border-radius:5px;padding:5px;">
				<h1>Sign In</h1>
				<?php
					if (isset($_GET['error']) && $_GET['error'] == 2) {
						echo '<p class="error">User not Found.</p>';
					}
				?>
				<form method="post" action="signin.php">
					<input type="password" name="password1" placeholder="Passcode"><br />
                                   <br />
					<button class="btn btn-sm btn-primary btn-block" 
                                    type="submit"> Sign In </button>
				</form>
			</div>
		</div>
</body>
</html>