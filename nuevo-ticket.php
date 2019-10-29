<?php  $PageTitleMaster = 'Soporte'; $pageTitle = 'Nuevo Ticket'; include('inc/head.php') ?>
	<!-- end::Head -->
	<!-- begin::Body -->
	<body class="kt-page--loading-enabled kt-page--loading kt-page--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">
		<!-- begin:: Page -->
		<!-- begin:: Header Mobile -->
		<?php include('inc/header-mobile.php') ?>
		<!-- end:: Header Mobile -->
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
										<h3 class="kt-subheader__title"><?php echo $pageTitle; ?></h3>
										<span class="kt-subheader__separator kt-subheader__separator--v"></span>
										<span class="kt-subheader__desc"><?php echo $PageTitleMaster; ?></span>
										<!-- <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10">
											Más
										</a> -->
									</div>
								</div>
								<!-- end:: Content Head -->
								<!-- begin:: Content -->
								<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
									<div class="row">
										<div class="col-md-6">
											<!--begin::Portlet-->
											<div class="kt-portlet">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Nuevo Ticket de Soporte
														</h3>
													</div>
												</div>
												<!--begin::Form-->
												<form class="kt-form kt-form--label-right">
													<div class="kt-portlet__body">
														<div class="form-group row">
															<label for="example-text-input" class="col-2 col-form-label">Nombre</label>
															<div class="col-10">
																<input class="form-control" type="text" value="Frist name" id="example-text-input">
															</div>
														</div>
														<div class="form-group row">
															<label for="example-text-input" class="col-2 col-form-label">Apellido</label>
															<div class="col-10">
																<input class="form-control" type="text" value="Last name" id="example-text-input2">
															</div>
														</div>
														<div class="form-group row">
															<label for="example-search-input" class="col-2 col-form-label">Buscar</label>
															<div class="col-10">
																<input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
															</div>
														</div>
														<div class="form-group row">
															<label for="example-email-input" class="col-2 col-form-label">Email</label>
															<div class="col-10">
																<input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
															</div>
														</div>
														<div class="form-group row">
															<label for="example-url-input" class="col-2 col-form-label">URL</label>
															<div class="col-10">
																<input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
															</div>
														</div>
														<div class="form-group row">
															<label for="example-tel-input" class="col-2 col-form-label">Teléfono</label>
															<div class="col-10">
																<input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
															</div>
														</div>
														<div class="form-group row">
															<label for="example-password-input" class="col-2 col-form-label">Contraseña</label>
															<div class="col-10">
																<input class="form-control" type="password" value="hunter2" id="example-password-input">
															</div>
														</div>
														<div class="form-group row">
															<label for="example-number-input" class="col-2 col-form-label">Número</label>
															<div class="col-10">
																<input class="form-control" type="number" value="42" id="example-number-input">
															</div>
														</div>
														<div class="form-group row">
															<label for="example-datetime-local-input" class="col-2 col-form-label">Fecha y hora</label>
															<div class="col-10">
																<input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
															</div>
														</div>
														<div class="form-group row">
															<label for="example-date-input" class="col-2 col-form-label">Fecha</label>
															<div class="col-10">
																<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
															</div>
														</div>
														<div class="form-group row">
															<label for="example-month-input" class="col-2 col-form-label">Mes</label>
															<div class="col-10">
																<input class="form-control" type="month" value="2011-08" id="example-month-input">
															</div>
														</div>
														<div class="form-group row">
															<label for="example-week-input" class="col-2 col-form-label">Semana</label>
															<div class="col-10">
																<input class="form-control" type="week" value="2011-W33" id="example-week-input">
															</div>
														</div>
														<div class="form-group row">
															<label for="example-time-input" class="col-2 col-form-label">Hora</label>
															<div class="col-10">
																<input class="form-control" type="time" value="13:45:00" id="example-time-input">
															</div>
														</div>
														<div class="form-group row">
															<label for="example-color-input" class="col-2 col-form-label">Color</label>
															<div class="col-10">
																<input class="form-control" type="color" value="#563d7c" id="example-color-input">
															</div>
														</div>
														<div class="form-group row">
															<label>File Browser</label>
															<div></div>
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="customFile">
																<label class="custom-file-label" for="customFile" style="text-align: left;"><i>Adjuntar algún archivo...</i></label>
															</div>
														</div>
													</div>
													<div class="kt-portlet__foot">
														<div class="kt-form__actions">
															<div class="row">
																<div class="col-2">
																</div>
																<div class="col-10">
																	<button type="reset" class="btn btn-primary">Enviar</button>
																	<button type="reset" class="btn btn-secondary">Cancelar</button>
																</div>
															</div>
														</div>
													</div>
												</form>
											</div>
											<!--end::Portlet-->
										</div>
										<div class="col-md-6">
											<!--begin::Portlet-->
											<div class="kt-portlet">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Custom Controls
														</h3>
													</div>
												</div>
												<!--begin::Form-->
												<form class="kt-form">
													<div class="kt-portlet__body">
														<div class="form-group form-group-last">
															<div class="alert alert-secondary" role="alert">
																<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
																<div class="alert-text">
																	For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.
																</div>
															</div>
														</div>
														<div class="form-group">
															<label>Custom Range</label>
															<div></div>
															<input type="range" class="custom-range" min="0" max="5" id="customRange2">
														</div>
														<div class="form-group">
															<label>Custom Select</label>
															<div></div>
															<select class="custom-select form-control">
																<option selected>Open this select menu</option>
																<option value="1">One</option>
																<option value="2">Two</option>
																<option value="3">Three</option>
															</select>
														</div>
													</div>
												</form>
												<!--end::Form-->
											</div>
											<!--end::Portlet-->
										</div>
									</div>
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
	<script src="./assets/js/scripts.bundle.js" type="text/javascript"></script>
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
	<script src="./assets/js/pages/crud/datatables/basic/basic.js" type="text/javascript"></script>
	<!--end::Page Scripts -->
	<!--begin::Page Scripts(used by this page) -->
	<script src="./assets/js/pages/dashboard.js" type="text/javascript"></script>
	<!--end::Page Scripts -->
	</body>
	<!-- end::Body -->
</html>