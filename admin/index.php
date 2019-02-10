<?php

	include "Classes/Car.php";
	include "Classes/Employee.php";
	include "Classes/Category.php";

	$carsManager = new CarsManager();
	$categoriesManager = new CategoriesManager();
	$emplyeesManager = new EmployeeManager();

	$carsManager->loadAllCars();
	$newCars = $carsManager->loadCarsByCondition("New");
	$usedCars = $carsManager->loadCarsByCondition("Used");
	$cars = $carsManager->getAllCars();

	$categoriesManager->loadAllCategories();
	$categories = $categoriesManager->getAllCategories();

	$emplyeesManager->loadEmployees();
	$employees = $emplyeesManager->getAllEmployees();

?>

<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<?php include "layout/head.php" ?>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<?php include "layout/header.php" ?>

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

				<!-- BEGIN: Left Aside -->
				<?php include "layout/aside_menu.php" ?>

				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">Dashboard</h3>
							</div>
						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">

						<!--begin:: Widgets/Stats-->
						<div class="m-portlet  m-portlet--unair">
							<div class="m-portlet__body  m-portlet__body--no-padding">
								<div class="row m-row--no-padding m-row--col-separator-xl">
									<div class="col-md-12 col-lg-4 col-xl-4">

										<!--begin::Total Profit-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													Total Employees
												</h4><br>
												<span class="m-widget24__desc">
													Number Of Our Emplyees
												</span>
												<span class="m-widget24__stats m--font-brand">
													<?php echo count($employees); ?>
												</span>
												<div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<br />
											</div>
										</div>

										<!--end::Total Profit-->
									</div>
									<div class="col-md-12 col-lg-4 col-xl-4">

										<!--begin::New Feedbacks-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													Total Cars
												</h4><br>
												<span class="m-widget24__desc">
													Number Of Our Cars
												</span>
												<span class="m-widget24__stats m--font-info">
													<?php echo count($cars); ?>
												</span>
												<input type="hidden" value="<?php echo count($usedCars); ?>" id="used-cars" />
												<input type="hidden" value="<?php echo count($newCars); ?>" id="new-cars" />
												<div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-info" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<br />
											</div>
										</div>

										<!--end::New Feedbacks-->
									</div>
									<div class="col-md-12 col-lg-4 col-xl-4">

										<!--begin::New Orders-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													Total Categories
												</h4><br>
												<span class="m-widget24__desc">
													Cars Categories
												</span>
												<span class="m-widget24__stats m--font-danger">
													<?php echo count($categories); ?>
												</span>
												<div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<br />
											</div>
										</div>

										<!--end::New Orders-->
									</div>

								</div>

								<br />
								<br />
								<br />

								<div class="row">

									<div class="col-sm-12 text-center">
										<h1>Cars Ratios</h1>
									</div>

									<br />

									<div class="col-sm"></div>

									<div class="col-sm">

										<canvas id="myChart" width="400" height="400"></canvas>
									</div>

									<div class="col-sm"></div>

								</div>
								<br />
								<br />

							</div>
						</div>

						<!--end:: Widgets/Stats-->
					</div>
				</div>
			</div>

			<!-- end:: Body -->

			<!-- begin::Footer -->
			<?php include "layout/footer.php" ?>

			<!-- end::Footer -->
		</div>

		<!-- end:: Page -->

		<?php include "layout/tail.php" ?>

		<!--begin::Page Scripts -->
		<script src="assets/app/js/dashboard.js" type="text/javascript"></script>

		<script src="js/Chart.min.js"></script>
		<!-- Start Charts -->
		<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'pie',
		    data: {
		        labels: ["New Cars", "Used Cars"],
		        datasets: [{
		            label: '# of Votes',
		            data: [$("#new-cars").val(), $("#used-cars").val()],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)'
		            ],
		            borderWidth: 1
		        }]
		    }
		});
		</script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
