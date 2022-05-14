<?php require "global.php"; ?>
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Testimonials Section | CodingNepal</title>
    <link rel="stylesheet" href="teacher_comments.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    	<!-- FontAwesome JS-->
	<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
</head>

<body class="app">

<header class="app-header fixed-top">
		<div class="app-header-inner">
			<div class="container-fluid py-2">
				<div class="app-header-content">
					<div class="row justify-content-between align-items-center">

						<div class="col-auto">
							<a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
									role="img">
									<title>Menu</title>
									<path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
										stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
								</svg>
							</a>
						</div>
						<!--//col-->

						<div class="app-utilities col-auto">
							<div class="app-utility-item app-user-dropdown dropdown">
								<a class="dropdown-toggle" id="user-dropdown-toggle" data-toggle="dropdown" href="#"
									role="button" aria-expanded="false">
									<img src="assets/images/admin.png" alt="" srcset=""></a>
								<ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
									<li><a class="dropdown-item" href="teacher_dashboard.php">Account</a></li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="login.html">Log Out</a></li>
								</ul>
							</div>
							<!--//app-user-dropdown-->

						</div>
						<!--//app-utilities-->
					</div>
					<!--//row-->
				</div>
				<!--//app-header-content-->
			</div>
			<!--//container-fluid-->
		</div>
		<!--//app-header-inner-->
		<div id="app-sidepanel" class="app-sidepanel">
			<div id="sidepanel-drop" class="sidepanel-drop"></div>
			<div class="sidepanel-inner d-flex flex-column">
				<a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
				<div class="app-branding">
					<a class="app-logo" href="teacher_dashboard.php"><i class="fa fa-graduation-cap fa-2x"></i><span
							class="logo-text"> FMS | Co-Teacher</span></a>

				</div>
				<!--//app-branding-->

				<nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
					<ul class="app-menu list-unstyled accordion" id="menu-accordion">
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link" href="co-teacher_dashboard.php">
								<span class="nav-icon"><i class="fa fa-home"></i></span>
								<span class="nav-link-text">Dashboard</span>
							</a>
							<!--//nav-link-->
						</li>
						<!-- nav item -->
						<!-- view rating -->
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link" href="co-teacher_rating.php">
								<span class="nav-icon"><i class="fa fa-star"></i></span>
								<span class="nav-link-text">View Rating</span>
							</a>
							<!--//nav-link-->
						</li>
						<!-- See comments -->
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link" href="co-teacher_comments.php">
								<span class="nav-icon"><i class="fa fa-comment"></i></span>
								<span class="nav-link-text">See Comments</span>
							</a>
							<!--//nav-link-->
						</li>
						<!--//nav-item-->
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link" href="co-teacher_evaluate_teacher.php">
								<span class="nav-icon"><i class="fa fa-book"></i></span>
								<span class="nav-link-text">Evaluate</span>
							</a>
							<!--//nav-link-->
						</li>
						<!--//nav-item-->
					</ul>
					<!--//app-menu-->
				</nav>
				<!--//app-nav-->
			</div>
			<!--//sidepanel-inner-->
		</div>
		<!--//app-sidepanel-->
	</header>

	<div class="app-wrapper">

		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">

				<h1 class="app-page-title"><span class="nav-icon"><i class="fa fa-comment"></i></span> Comments</h1>

                <div class="wrapper">

				



					<?php
					$result = getTeacherComments();
					while($row = mysqli_fetch_array($result)){
					echo  '<div class="box">
					<i class="fas fa-quote-left quote"></i>
					<p>'.$row['content'].'</p>
					<div class="content">
					<div class="info">
					
					<div class="stars">
									<i class=""></i>
									<i class=""></i>
									<i class=""></i>
									<i class=""></i>
									<i class=""></i>
									
								</div>
								<div class="job">'.$row['username'].'</div>
							</div>
						</div>
						
					</div>';
					}
					?>

  </div>

				<!--//row-->
			</div>
			<!--//container-fluid-->
		</div>
		<!--//app-content-->

	</div>
	<!--//app-wrapper-->

	<!-- Javascript -->
	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Charts JS -->
	<script src="assets/plugins/chart.js/chart.min.js"></script>
	<script src="assets/js/index-charts.js"></script>

	<!-- Page Specific JS -->
	<script src="assets/js/app.js"></script>




</body>
</html>