<?php

	include "Classes/Category.php";

?>

<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<?php include "layout/head.php" ?>
    <link href="css/viewbox.css" rel="stylesheet" type="text/css"/>

		<!-- Loading Buttons plugin for making buttons spin -->
		<link rel="stylesheet" type="text/css" href="css/loading.css"/>
		<link rel="stylesheet" type="text/css" href="css/loading-btn.css"/>

    <link href="css/categories-style.css" rel="stylesheet" type="text/css"/>

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
								<h3 class="m-subheader__title m-subheader__title--separator">Car Cateogries</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="index.php" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="categories.php" class="m-nav__link">
											<span class="m-nav__link-text">Car Cateogries</span>
										</a>
									</li>

								</ul>
							</div>
							
						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">
						<?php include "categories_content.php" ?>
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
        <script src="assets/app/js/dropzone.js" type="text/javascript"></script>
        <script src="js/jquery.viewbox.min.js" type="text/javascript"></script>
        <script src="js/categories.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
