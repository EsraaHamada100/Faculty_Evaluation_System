<?php
require_once "global.php";
require_once "classes/class_student.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Faculty Evaluation System</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
									<li><a class="dropdown-item" href="account.html">Account</a></li>

									<li><a class="dropdown-item" href="login.php">Log Out</a></li>								</ul>
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
					<a class="app-logo" href="index.html"><i class="fa fa-graduation-cap fa-2x"></i><span
							class="logo-text"> | STUDENT</span></a>

				</div>
				<!--//app-branding-->

				<nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
					<ul class="app-menu list-unstyled accordion" id="menu-accordion">
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link" href="student.php">
								<span class="nav-icon"><i class="fa fa-home"></i></span>
								<span class="nav-link-text">Dashboard</span>
							</a>
							<!--//nav-link-->
						</li>
						<!--//nav-item-->
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<!-- <a class="nav-link" href="student_evaluate_teacher.php">
								<span class="nav-icon"><i class="fa fa-book"></i></span>
								<span class="nav-link-text">Evaluate</span>
								<span class="submenu-arrow"><i class="fa fa-angle-down"></i></span> -->
								<a class="nav-link submenu-toggle" href="#" data-toggle="collapse" data-target="#submenu-2"
								aria-expanded="false" aria-controls="submenu-2">
								<span class="nav-icon"><i class="fa fa-users"></i></span>
								<span class="nav-link-text">Evaluate </span>
								<span class="submenu-arrow"><i class="fa fa-angle-down"></i></span>
							</a>
							<div id="submenu-2" class="collapse submenu submenu-2" data-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
								<li class="submenu-item"><a class="submenu-link" href="student_evaluate_teacher.php">Teacher
											</a></li>
								<li class="submenu-item"><a class="submenu-link" href="student_evaluate_co_teacher.php">Co-Teacher
											</a></li>
											
								</ul>
							</div>
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
	<!--//app-header-->

	<div class="app-wrapper">

		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">

				<h1 class="app-page-title"><span class="nav-icon"><i class="fa fa-home"></i></span> Dashboard</h1>


				<div class="row g-4 mb-4">
					<div class="col-6 col-lg-6">
						<div class="app-card app-card-stat shadow-sm h-100"><br>
							<span class="nav-icon"><i class="fa fa-users fa-5x text-info"></i></span>
							<div class="app-card-body p-3 p-lg-4">
								<h4 class="stats-type mb-1">Evaluated Faculty Members</h4>
								<div class="stats-figure">
									<?php
										$student1 = new Student();
										$student1->setId($_SESSION['id']);
										$result = $student1->numberOfFacultyMembersEvaluated();
										if($row = mysqli_fetch_array($result)){
											echo $row['faculty_member_evaluated'];
										}

									
									?>
								</div>
							</div>
							<!--//app-card-body-->
						</div>
						<!--//app-card-->
					</div>
					<!--//col-->
					<div class="col-6 col-lg-6">
						<div class="app-card app-card-stat shadow-sm h-100"><br>
							<span class="nav-icon"><i class="fa fa-comment fa-5x text-warning"></i></span>
							<div class="app-card-body p-3 p-lg-4">
								<h4 class="stats-type mb-1">Written Comments</h4>
								<div class="stats-figure">
									<?php
										$result = $student1->numberOfWrittenComments();
										if($row = mysqli_fetch_array($result)){
											echo $row['total_comments'];
										}
									?>
								</div>
							</div>
							<!--//app-card-body-->
						</div>
						<!--//app-card-->
					</div>
					<!--//col-->
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