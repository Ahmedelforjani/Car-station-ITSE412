<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<?php include "layout/head.php" ?>

  <link  href="css/home-page-style.css" rel="stylesheet">

  <link href="css/uploadfile.css" rel="stylesheet">

	<link rel="stylesheet" href="css/viewbox.css">


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
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="index.php" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">Working Time</span>
										</a>
									</li>

								</ul>
							</div>

						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">
						<?php include "working-time-page_content.php"; ?>
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

		<script src="js/bootstrap-timepicker.js"></script>

		<script src="js/bootstrap-switch.js"></script>

    <script src="js/working-time-script.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
