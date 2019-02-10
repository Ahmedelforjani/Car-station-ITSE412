<?php
    if(!isset($_GET['carid'])){
        header('car_inventory.php');
    }

    include 'Classes/Category.php';
    include 'Classes/Car.php';

    $car = new Car($_GET['carid']);
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
								<h3 class="m-subheader__title m-subheader__title--separator">Edit Car</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="index.php" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="car_inventory.php" class="m-nav__link">
											<span class="m-nav__link-text">Car Inventory</span>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="editcar.php" class="m-nav__link">
											<span class="m-nav__link-text">Edit Car</span>
										</a>
									</li>
								</ul>
							</div>
							
						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">
						<?php include "editcar_content.php" ?>
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
		<script src="assets/app/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="assets/app/js/dropzone.js" type="text/javascript"></script>
		<script src="js/editcar.js" type="text/javascript"></script>

		<script>
			$(document).ready(function(){
				$('.m-menu__item a[href="car_inventory.php"]').parent().addClass('m-menu__item--active');
			});
		</script>
		
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>