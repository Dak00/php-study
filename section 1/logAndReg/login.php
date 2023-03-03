


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="auth.global.css">
	<link rel="stylesheet" media="screen and (min-width: 1440px)" href="assets/css/auth.desktop.css">
	<link rel="stylesheet" media="screen and (max-width: 1439px)" href="assets/css/auth.mobile.css">
</head>

<body class='d-flex align-items-center'>

	<main class='form-signin m-auto text-center'>
		<div class="form-logo gap-1 d-flex align-items-center"> <img src="assets/icons/logo.svg" alt="">
			<span class='fw-normal fs-2 lh-base'>To-Do</span>
		</div>
		<form method="post" action="scripts/login.php">
			<h2 class='fw-semibold lh-base'>Log in</h2>
			<h6 class='fw-normal lh-lg'>Log in to stay connected.</h6>
			 <div class="form-inputs text-start">
                <label for="username" class="form-label">Username:</label>
        <input type="text" class="form-control" name="username" required><br>
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" name="password" required><br>
			</div>
			<div class="text-forget d-flex justify-content-between">
				<div class="checkbox">
					<label>
						<input type="checkbox" value="remember-me"> Remember me
					</label>
				</div>
				<a href='#forget' class='text-decoration-none'>Forgot Password</a>
			</div>
            
        <input type="submit" name="submit" value="Login" class="btn btn-primary px-5 py-2">
        
			<p>or sign in with other accounts?</p>
			<div class="form-icons">
				<img src="assets/icons/Facebook.svg" alt="">
				<img src="assets/icons/Gmail.svg" alt="">
				<img src="assets/icons/Linkedin.svg" alt="">
				<img src="assets/icons/Instagram.svg" alt="">
			</div>
			<span>Don’t have an account?</span>
			<a href="#" class='text-decoration-none'>Click here to sign up.</a>
		</form>
	</main>

	<img src="assets/images/side.png" alt="">





	<!-- Bootstrap JS -->
</body>

</html>