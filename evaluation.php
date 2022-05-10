<!DOCTYPE html>
<html lang="en">

<head>
	<title>Evaluation</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link id="theme-style" rel="stylesheet" href="dataTables/jquery.dataTables.min.css">
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
									<!-- <li><a class="dropdown-item" href="account.php">Account</a></li> -->
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="login.php">Log Out</a></li>
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
					<a class="app-logo" href="index.php"><i class="fa fa-graduation-cap fa-2x"></i><span
							class="logo-text"> | ADMIN</span></a>

				</div>
				<!--//app-branding-->

				<nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
					<ul class="app-menu list-unstyled accordion" id="menu-accordion">
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link" href="index.php">
								<span class="nav-icon"><i class="fa fa-home"></i></span>
								<span class="nav-link-text">Dashboard</span>
							</a>
							<!--//nav-link-->
						</li>
						<!--//nav-item-->
						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-toggle="collapse" data-target="#submenu-2"
								aria-expanded="false" aria-controls="submenu-2">
								<span class="nav-icon"><i class="fa fa-users"></i></span>
								<span class="nav-link-text">Student</span>
								<span class="submenu-arrow"><i class="fa fa-angle-down"></i></span>
								<!--//submenu-arrow-->
							</a>
							<!--//nav-link-->
							<div id="submenu-2" class="collapse submenu submenu-2" data-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="add_student.php">Add
											Student</a></li>
									<li class="submenu-item"><a class="submenu-link" href="manage_student.php">Manage
											Student</a></li>
								</ul>
							</div>
						</li>
						<!--//nav-item-->
						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-toggle="collapse" data-target="#submenu-4"
								aria-expanded="false" aria-controls="submenu-4">
								<span class="nav-icon"><i class="fa fa-users"></i></span>
								<span class="nav-link-text">Teacher</span>
								<span class="submenu-arrow"><i class="fa fa-angle-down"></i></span>
								<!--//submenu-arrow-->
							</a>
							<!--//nav-link-->
							<div id="submenu-4" class="collapse submenu submenu-4" data-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="add_teacher.php">Add
											Teacher</a></li>
									<li class="submenu-item"><a class="submenu-link" href="manage_teacher.php">Manage
											Teacher</a></li>
								</ul>
							</div>
							<!--//co_teacher-->
						</li>
						<!--//nav-item-->
						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-toggle="collapse" data-target="#submenu-3"
								aria-expanded="false" aria-controls="submenu-3">
								<span class="nav-icon"><i class="fa fa-users"></i></span>
								<span class="nav-link-text">Co_Teacher</span>
								<span class="submenu-arrow"><i class="fa fa-angle-down"></i></span>
								<!--//submenu-arrow-->
							</a>
							<!--//nav-link-->
							<div id="submenu-3" class="collapse submenu submenu-3" data-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="add_co-teacher.php">Add
											Co_Teacher</a></li>
									<li class="submenu-item"><a class="submenu-link" href="mange_co-teacher.php">Manage
											Co_Teacher</a></li>
								</ul>
							</div>
						</li>
						<!--//nav-item-->
						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-toggle="collapse" data-target="#submenu-5"
								aria-expanded="false" aria-controls="submenu-5">
								<span class="nav-icon"><i class="fa fa-question"></i></span>
								<span class="nav-link-text">Questionaires</span>
								<span class="submenu-arrow"><i class="fa fa-angle-down"></i></span>
								<!--//submenu-arrow-->
							</a>
							<!--//nav-link-->
							<div id="submenu-5" class="collapse submenu submenu-5" data-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="category.php">Manage
											Category</a></li>
									<li class="submenu-item"><a class="submenu-link" href="add_questionaire.php">Manage
											Questionaire</a></li>
								</ul>
							</div>
						</li>
						<!--//nav-item-->
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link" href="evaluation.php">
								<span class="nav-icon"><i class="fa fa-table"></i></span>
								<span class="nav-link-text">Evaluation</span>
							</a>
							<!--//nav-link-->
						</li>
						<!--//nav-item-->
						
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
				<h1 class="app-page-title text-success"><span class="nav-icon"><i class="fa fa-book"></i></span> Manage
					Evaluation</h1>
				<hr class="mb-4">
				<div class="row g-4 settings-section">
					<div class="col-12 col-md-12">
						<div class="app-card app-card-settings shadow-sm p-4">
							<div class="app-card-body">
								<form class="settings-form">
									<div class="mb-3">
										<table id="myTable" class="table app-table-hover mb-0 text-left">
											<thead>
												<tr>
													<th class="cell">Instructor Name</th>
													<th class="cell">Score</th>
												</tr>
												<tr>
													<th class="cell">nada alaa</th>
													<th class="cell">25</th>
												</tr>
												<tr>
													<th class="cell">nada alaa</th>
													<th class="cell">25</th>
												</tr>
											</thead>
											<tbody>
											
											
												
											</tbody>
										</table>
									</div>
								</form>
							</div>
							<!--//app-card-body-->

						</div>
						<!--//app-card-->
					</div>
				</div>
				<!--//row-->

				<hr class="my-4">
			</div>
			<!--//container-fluid-->
		</div>
		<!--//app-content-->

	</div>
	<!--//app-wrapper-->


	<!-- Javascript -->
	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Page Specific JS -->
	<script src="assets/js/app.js"></script>

	<!-- Datatables -->
	<!-- <script src="dataTables/jquery-3.5.1.js"></script>
	<script src="dataTables/jquery.dataTables.min.js"></script> -->
	<script>
		$(document).ready(function () {
			$('#myTable').DataTable();
		});
	</script>
</body>

</html>