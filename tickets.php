<?php  $PageTitleMaster = 'Soporte'; $pageTitle = 'Mis tickets'; include('inc/head.php') ?>
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
									<!-- begin:: Content -->
									<div class="kt-portlet kt-portlet--mobile">
										<div class="kt-portlet__head kt-portlet__head--lg">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="kt-font-brand flaticon-lifebuoy"></i>
												</span>
												<h3 class="kt-portlet__head-title">
													Mis Tickets
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="kt-portlet__head-wrapper">
													<div class="kt-portlet__head-actions">
														<div class="dropdown dropdown-inline">
															<button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="la la-download"></i> Exportar
															</button>
															<div class="dropdown-menu dropdown-menu-right">
																<ul class="kt-nav">
																	<li class="kt-nav__section kt-nav__section--first">
																		<span class="kt-nav__section-text">Elige una opcion</span>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon la la-print"></i>
																			<span class="kt-nav__link-text">Impresión</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon la la-copy"></i>
																			<span class="kt-nav__link-text">Copiar</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon la la-file-excel-o"></i>
																			<span class="kt-nav__link-text">Excel</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon la la-file-text-o"></i>
																			<span class="kt-nav__link-text">CSV</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																			<span class="kt-nav__link-text">PDF</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
														&nbsp;
														<a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
															<i class="la la-plus"></i>
															Nuevo Ticket
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">

											<!--begin: Datatable -->
											<table class="table table-striped- table-bordered table-hover table-checkable kt_table_1">
												<thead>
													<tr>
														<th>Record ID</th>
														<th>Company Email</th>
														<th>Company Agent</th>
														<th>Company Name</th>
														<th>Status</th>
														<th>Type</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>nsailor0@livejournal.com</td>
														<td>Nixie Sailor</td>
														<td>Gleichner, Ziemann and Gutkowski</td>
														<td>3</td>
														<td>2</td>
														<td nowrap></td>
													</tr>
													<tr>
														<td>2</td>
														<td>egiraldez1@seattletimes.com</td>
														<td>Emelita Giraldez</td>
														<td>Rosenbaum-Reichel</td>
														<td>6</td>
														<td>3</td>
														<td nowrap></td>
													</tr>
													<tr>
														<td>3</td>
														<td>uluckin2@state.gov</td>
														<td>Ula Luckin</td>
														<td>Kulas, Cassin and Batz</td>
														<td>1</td>
														<td>2</td>
														<td nowrap></td>
													</tr>
													<tr>
														<td>4</td>
														<td>ecure3@trellian.com</td>
														<td>Evangeline Cure</td>
														<td>Pfannerstill-Treutel</td>
														<td>1</td>
														<td>3</td>
														<td nowrap></td>
													</tr>
													<tr>
														<td>5</td>
														<td>tst4@msn.com</td>
														<td>Tierney St. Louis</td>
														<td>Dicki-Kling</td>
														<td>2</td>
														<td>3</td>
														<td nowrap></td>
													</tr>
													<tr>
														<td>6</td>
														<td>greinhard5@instagram.com</td>
														<td>Gerhard Reinhard</td>
														<td>Gleason, Kub and Marquardt</td>
														<td>5</td>
														<td>3</td>
														<td nowrap></td>
													</tr>
													<tr>
														<td>7</td>
														<td>eshelley6@pcworld.com</td>
														<td>Englebert Shelley</td>
														<td>Jenkins Inc</td>
														<td>2</td>
														<td>3</td>
														<td nowrap></td>
													</tr>
													<tr>
														<td>8</td>
														<td>hkite7@epa.gov</td>
														<td>Hazlett Kite</td>
														<td>Streich LLC</td>
														<td>6</td>
														<td>1</td>
														<td nowrap></td>
													</tr>
													<tr>
														<td>9</td>
														<td>fmorby8@surveymonkey.com</td>
														<td>Freida Morby</td>
														<td>Haley, Schamberger and Durgan</td>
														<td>2</td>
														<td>1</td>
														<td nowrap></td>
													</tr>
												</tbody>
											</table>

											<!--end: Datatable -->
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
	<!--begin::Page Vendors(used by this page) -->
		<script src="./assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="./assets/js/pages/crud/datatables/advanced/column-rendering.js" type="text/javascript"></script>
	</body>
	<!-- end::Body -->
</html>