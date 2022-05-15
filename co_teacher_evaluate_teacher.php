<!DOCTYPE html>
<html lang="en">

<head>
	<title>Evaluate Faculty</title>

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
					<a class="app-logo" href="co-teacher_dashboard.php"><i class="fa fa-graduation-cap fa-2x"></i><span
							class="logo-text"> FMS | CO-TEACHER</span></a>

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
							<a class="nav-link" href="">
								<span class="nav-icon"><i class="fa fa-comment"></i></span>
								<span class="nav-link-text">See Comments</span>
							</a>
							<!--//nav-link-->
						</li>
						<!--//nav-item-->
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link" href="">
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
	<!--//app-header-->

	<div class="app-wrapper">

		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">

				<h1 class="app-page-title"><span class="nav-icon"><i class="fa fa-file"></i></span> Evaluation Form</h1>


				<div class="row g-4 mb-4">

					<div class="col-12 col-md-12">
						<div class="app-card app-card-settings shadow-sm p-4">
							<div class="app-card-body">
								<h1 class="app-page-title">Select Faculty</h1>
								<form class="settings-form">
									<div class="mb-3">
										<label for="setting-input-2" class="form-label">Faculty</label>
										<fieldset class="form-group">
											<select class="form-select" id="basicSelect">
												<option>John Doe</option>
												<option>Juan dela Cruz</option>
											</select>
										</fieldset>
									</div>
									<button type="submit" class="btn app-btn-primary">Select</button>
								</form>
							</div>
							<!--//app-card-body-->

						</div>
						<!--//app-card-->
					</div>
					<div class="col-12 col-md-12">
						<div class="app-card app-card-settings shadow-sm p-4">
							<div class="app-card-body">
								<form class="settings-form">
									<div class="mb-3">
										<fieldset class="border border-info p-2 w-100">
											<legend class="w-auto">Rating Legend</legend>
											<p>5 = Strongly Agree, 4 = Agree, 3 = Uncertain, 2 = Disagree, 1 = Strongly
												Disagree</p>
										</fieldset><br>
										<label for="setting-input-2" class="form-label bg-info">Category 1</label>
										<table class="table app-table-hover mb-0 text-left">
											<thead>
												<tr>
													<th class="cell">Questions</th>
													<th class="cell">5</th>
													<th class="cell">4</th>
													<th class="cell">3</th>
													<th class="cell">2</th>
													<th class="cell">1</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="cell">Question 1</td>
													<td>
														<input type="radio" name="answer" id="answer" value="yes"
															required>
													</td>
													<td>
														<input type="radio" name="answer" id="answer" value="yes"
															required>
													</td>
													<td>
														<input type="radio" name="answer" id="answer" value="yes"
															required>
													</td>
													<td>
														<input type="radio" name="answer" id="answer" value="yes"
															required>
													</td>
													<td>
														<input type="radio" name="answer" id="answer" value="yes"
															required>
													</td>
												</tr>
												<tr>
													<td class="cell">Question 2</td>
													<td>
														<input type="radio" name="answer1" id="answer1" value="yes"
															required>
													</td>
													<td>
														<input type="radio" name="answer1" id="answer1" value="yes"
															required>
													</td>
													<td>
														<input type="radio" name="answer1" id="answer1" value="yes"
															required>
													</td>
													<td>
														<input type="radio" name="answer1" id="answer1" value="yes"
															required>
													</td>
													<td>
														<input type="radio" name="answer1" id="answer1" value="yes"
															required>
													</td>
												</tr>
											</tbody>
										</table>
									</div><br>
									<div class="mb-3">
										<label for="setting-input-3" class="form-label bg-info">Category 2</label>
										<table class="table app-table-hover mb-0 text-left">
											<thead>
												<tr>
													<th class="cell">Questions</th>
													<th class="cell">5</th>
													<th class="cell">4</th>
													<th class="cell">3</th>
													<th class="cell">2</th>
													<th class="cell">1</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="cell">Question 1</td>
													<td>
														<input type="radio" name="answer2" id="answer2" value="yes"
															required>
													</td>
													<td>
														<input type="radio" name="answer2" id="answer2" value="yes"
															required>
													</td>
													<td>
														<input type="radio" name="answer2" id="answer2" value="yes"
															required>
													</td>
													<td>
														<input type="radio" name="answer2" id="answer2" value="yes"
															required>
													</td>
													<td>
														<input type="radio" name="answer2" id="answer2" value="yes"
															required>
													</td>
												</tr>
												<tr>
													<td class="cell">Question 2</td>
													<td>
														<input type="radio" name="answer4" id="answer4" value="yes"
															required>
													</td>
													<td>
														<input type="radio" name="answer4" id="answer4" value="yes"
															required>
													</td>
													<td>
														<input type="radio" name="answer4" id="answer4" value="yes"
															required>
													</td>
													<td>
														<input type="radio" name="answer4" id="answer4" value="yes"
															required>
													</td>
													<td>
														<input type="radio" name="answer4" id="answer4" value="yes"
															required>
													</td>
												</tr>
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