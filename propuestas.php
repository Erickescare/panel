<?php $pageTitle = 'Propuestas'; include('inc/head.php') ?>
	<!-- end::Head -->
	<!-- begin::Body -->
	<body class="kt-page--loading-enabled kt-page--loading kt-page--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">
		<!-- begin:: Page -->
		<!-- begin:: Header Mobile 
		<?php include('inc/header-mobile.php') ?>
		--><!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">
					<!-- begin:: Header -->
					<?php include('inc/header.php') ?>
					<!-- end:: Header -->
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
						<div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
							<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
								<!-- begin:: Content Head -->
								<div class="kt-subheader   kt-grid__item" id="kt_subheader">
									<div class="kt-subheader__main">
										<h3 class="kt-subheader__title">Propuestas</h3>
										<span class="kt-subheader__separator kt-subheader__separator--v"></span>
										<span class="kt-subheader__desc">Sub-Propuestas</span>
										<!-- <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10">
											Más
										</a> -->
									</div>
								</div>
								<!-- end:: Content Head -->
									<!-- begin:: Content -->
									<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
										<!--begin:: Widgets/Last Updates-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Propuestas
														</h3>
													</div>
												</div>
												<div class="kt-portlet__body">

													<!--begin::widget 12-->
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<span class="kt-widget4__icon">
																<i class="flaticon2-list-3 kt-font-success"></i>
															</span>
															<a href="./tabla.php" class="kt-widget4__title kt-widget4__title--light">
																Tabla
															</a>
															<span class="kt-widget4__number kt-font-success">98%</span>
														</div>
														<div class="kt-widget4__item">
															<span class="kt-widget4__icon">
																<i class="flaticon2-power kt-font-success"></i>
															</span>
															<a href="./login.php" class="kt-widget4__title kt-widget4__title--light">
																Login
															</a>
															<span class="kt-widget4__number kt-font-success">99%</span>
														</div>
														<div class="kt-widget4__item">
															<span class="kt-widget4__icon">
																<i class="flaticon2-hourglass-1 kt-font-info"></i>
															</span>
															<a href="./mi_salida.php" class="kt-widget4__title kt-widget4__title--light">
																Hora de Salida
															</a>
															<span class="kt-widget4__number kt-font-info">85%</span>
														</div>
														<div class="kt-widget4__item">
															<span class="kt-widget4__icon">
																<i class="flaticon2-user-1 kt-font-danger"></i>
															</span>
															<a href="./mi_salid.php" class="kt-widget4__title kt-widget4__title--light">
																Perfil
															</a>
															<span class="kt-widget4__number kt-font-danger">55%</span>
														</div>
														<div class="kt-widget4__item">
															<span class="kt-widget4__icon">
																<i class="socicon-google kt-font-primary"></i>
															</span>
															<a href="./soporte.php" class="kt-widget4__title kt-widget4__title--light">
																Soprte
															</a>
															<span class="kt-widget4__number kt-font-primary">75%</span>
														</div>
													</div>
													<!--end::Widget 12-->
												</div>
											</div>
											<!--end:: Widgets/Last Updates-->
									</div>
									<!-- end:: Content -->
							</div>
						</div>
					</div>
				</div>
			</div>

	<!-- begin:: Footer -->
	<?php include('inc/footer.php') ?>
	<!-- end:: Footer -->			
	</div>
	<!-- end:: Page -->
	<?php include('inc/quick-panel.php') ?>
	<!-- begin::Scrolltop -->
	<div id="kt_scrolltop" class="kt-scrolltop">
	<i class="fa fa-arrow-up"></i>
	</div>
	<!-- end::Scrolltop -->
	<!-- begin::Global Config(global config for global JS sciprts) -->
	<!-- end::Global Config -->
	<!--begin:: Global Mandatory Vendors -->
	<?php include('inc/mansoryjs.php') ?>
	<!--end:: Global Mandatory Vendors -->
	<?php include('inc/global-js.php') ?>
	<!--end:: Global Optional Vendors -->
	<!--begin::Global Theme Bundle(used by all pages) -->
	<script src="./assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
	<!--end::Global Theme Bundle -->
	<!--begin::Page Vendors(used by this page) -->
	<script src="./assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
	<!--end::Page Vendors -->
	<!--begin::Page Vendors(used by this page) -->
	<script src="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
	<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
	<script src="./assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>
	<!--end::Page Vendors -->
	<!--begin::Page Scripts(used by this page) -->
	<script src="./assets/js/demo1/pages/crud/datatables/basic/basic.js" type="text/javascript"></script>
	<!--end::Page Scripts -->
	<!--begin::Page Scripts(used by this page) -->
	<script src="./assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>
	<!--end::Page Scripts -->
	</body>
	<!-- end::Body -->
</html>