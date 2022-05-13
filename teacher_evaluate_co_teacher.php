<?php 
	require_once 'global.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Evaluate Faculty</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- select option -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	
	<script>
		$(document).ready(function(){
			$("select.form-select").change(function(){
				var selected_option = $('#basicSelect option:selected').text();
				alert("You have selected teacher :  " + selected_option);
			});

			
		});
	</script>


	<script>
		$(document).ready(function(){
			$("input[type='radio']").click(function(){
				var radioValue = $("input[name='rating11']:checked").val();
				if(radioValue){

					alert("Your are a - " + radioValue);
				}
	
			});
		});
	</script>
	<!-- FontAwesome JS-->
	<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

	


	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
	<link id="theme-style" rel="stylesheet" href="evaluation.css">

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
					<a class="app-logo" href="teacher.html"><i class="fa fa-graduation-cap fa-2x"></i><span
							class="logo-text"> FMS | TEACHER</span></a>

				</div>
				<!--//app-branding-->

				<nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				<ul class="app-menu list-unstyled accordion" id="menu-accordion">
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link" href="teacher.html">
								<span class="nav-icon"><i class="fa fa-home"></i></span>
								<span class="nav-link-text">Dashboard</span>
							</a>
							<!--//nav-link-->
						</li>
						<!-- nav item -->
						<!-- view rating -->
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link" href="teacher.html">
								<span class="nav-icon"><i class="fa fa-star"></i></span>
								<span class="nav-link-text">View Rating</span>
							</a>
							<!--//nav-link-->
						</li>
						<!-- See comments -->
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link" href="teacher_comments.php">
								<span class="nav-icon"><i class="fa fa-comment"></i></span>
								<span class="nav-link-text">See Comments</span>
							</a>
							<!--//nav-link-->
						</li>
						<!--//nav-item-->
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link" href="teacher_evaluate_co_teacher.php">
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
								<h1 class="app-page-title">Select Teacher</h1>
								<form class="settings-form">
									<div class="mb-3">
										<label for="setting-input-2" class="form-label">Faculty</label>
										<fieldset class="form-group">
											<select class="form-select" id="basicSelect">
												<?php 
													$result = co_teachersData();
													while($row = mysqli_fetch_array($result)){
														echo '<option value= "'.$row['id'].'">'.$row['username'].'</option>';
													}
												
												?>
											</select>
										</fieldset>

									</div>
									<!-- <button type="submit" class="btn app-btn-primary">Select</button> -->
								</form>
							</div>
							<!--//app-card-body-->

						</div>
						<!--//app-card-->
					</div>
					<div class="col-12 col-md-12">
						<div class="app-card app-card-settings shadow-sm p-4">
							<div class="app-card-body">
								<form class="settings-form" action= "add_answers.php">
									<div class="mb-3">
										
										<table class="table app-table-hover mb-0 text-left">
											<thead>
												<tr>
													<th class="cell">Questions</th>

													<th class="cell">answer</th>
												</tr>
											</thead>
											<tbody>

												<?php 
													$result = getQuestionForTeacher();
													$i = 0;
													while($row = mysqli_fetch_array($result) ){
														echo '<tr>
														<td class="cell">'.$row['content'].'</td>
														<span class="star-rating">
	
															<td>
															<ul class="rate-area">
															<input type="radio" id="5-star'.$row['number'].'" name="rating'.$row['number'].'" value="5" />
															<label for="5-star'.$row['number'].'" title="Amazing">5 stars</label>

															<input type="radio" id="4-star'.$row['number'].'" name="rating'.$row['number'].'" value="4" />
															<label for="4-star'.$row['number'].'" title="Good">4 stars</label>

															<input type="radio" id="3-star'.$row['number'].'" name="rating'.$row['number'].'" value="3" />
															<label for="3-star'.$row['number'].'" title="Average">3 stars</label>

															<input type="radio" id="2-star'.$row['number'].'" name="rating'.$row['number'].'" value="2" />
															<label for="2-star'.$row['number'].'" title="Not Good">2 stars</label>

															<input type="radio" id="1-star'.$row['number'].'" name="rating'.$row['number'].'" value="1" />
															<label for="1-star'.$row['number'].'" title="Bad">1 star</label>

														  </ul>
															</td>
														</span>
													</tr>';
							
													}
													// $_SESSION['array_name'] = $array_name;
													function getAnswers(){
														$result = getQuestionForTeacher();
														$answers = array();
														while($row = mysqli_fetch_array($result) ){
															$key = "'".$row['number']."'";
															
															echo '<script>
															$(document).ready(function(){
																$("input[type=\'radio\']").click(function(){
																	var radioValue = $("input[name=\'rating'.$row["number"].'\']:checked").val();
																	if(radioValue){

												
																		var text = """; 

																	
																		var key = text.concat($row["number"]," = ", text);

																		document.cookie = key + radioValue;
																		<?php $answers[$key] = $_COOKIE["radioValue"];?>
																		
																	}
													
																});
															});
															</script>';
															// $answers[$key] = $_COOKIE['radioValue'];
														}
														$_SESSION['answers'] = $answers;
														// header('Location: add_answers.php');
														exit();
													}

												?>
											</tbody>
										</table>
										<br><br>
										<button class="submit-button" type="submit"action="<?php getAnswers();?>">Submit</button>
									</div>
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