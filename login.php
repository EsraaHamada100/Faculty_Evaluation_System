
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- FontAwesome JS-->
	<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head>

<body class="app app-login p-0">
	<div class="row g-0 app-auth-wrapper">
		<div class="col-12 col-md-12 col-lg-12 auth-main-col text-center p-5">
			<div class="d-flex flex-column align-content-end">
				<div class="app-auth-body mx-auto">
					<div class="app-auth-branding mb-4"></div>
					<h2 class="auth-heading text-center mb-5">Log in</h2>
					<div class="auth-form-container text-left">
						<?php $checked = "index.php" ;?>
						<form class="auth-form login-form" action= 'check_login_data.php' method="post">
							<div class="email mb-3">
								<label class="sr-only" for="signin-email">Username</label>
								<input id="signin-email" name="userName" type="text"
									class="form-control signin-email" placeholder="Username">
							</div>
							<!--//form-group-->
							
							<div class="password mb-3">
								<label class="sr-only" for="signin-password">Password</label>
								<input id="signin-password" name="password" type="password"
									class="form-control signin-password" placeholder="Password">
								<div class="extra mt-3 row justify-content-between">

									<!-- //col-6

									<div class="d-flex justify-content-between"><!--forgot-password text-left-->
										<!-- <a href="teacher.html" >teacher</a>
										<a href="co_teacher.html" >co-teacher</a>
										<a href="student.html">Student</a> -->
										<!-- <div>
											<input id="option-one" name="radio" value="one" checked="checked" type="radio">
											<label for="option-one">student</label>
										</div>
										<div>
											<input id="option-two" name="radio" value="two" type="radio"> 
											<label for="option-two">teacher</label>
										</div>
										<div>
											<input id="option-three" name="radio" value="three" type="radio"> 
											<label for="option-three">co-teacher</label>
										</div>
										<div>
											<input id="option-four" name="radio" value="four" type="radio"> 
											<label for="option-four">admin</label>
										</div>

									</div> 
									<br><br> -->
									<!-- third row : remember me -->
									<div class="col-6">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value=""
												id="RememberPassword">
											<label class="form-check-label" for="RememberPassword">
												Remember me
											</label>
										</div>
									</div>

									<!--//col-6-->
								</div>
								<!--//extra-->
							</div>
							<!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary btn-block theme-btn mx-auto" >
									LogIn
								</button>
							</div>
						</form>
					</div>
					<!--//auth-form-container-->

				</div>
				<!--//auth-body-->
			</div>
			<!--//flex-column-->
		</div>
		<!--//auth-main-col-->

	</div>
	<!--//row-->


</body>

</html>