<?php
include("conexion.php");

$search            = isset( $_GET['search'] ) ? $_GET['search'] : '';
$paged             = isset( $_GET['cpage'] ) ? $_GET['cpage'] : '1';
$status            = isset( $_GET['status'] ) ? $_GET['status'] : '';
$job_id            = isset( $_GET['job-id'] ) ? $_GET['job-id'] : '';
?>
<?php $pageTitle = 'Tablas'; include('inc/head.php') ?>
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
										<h3 class="kt-subheader__title">Dashboard</h3>
										<span class="kt-subheader__separator kt-subheader__separator--v"></span>
										<span class="kt-subheader__desc">DETALLE POR LINEA DE NEGOCIO % DE AVANCE DE LOS PROYECTOS</span>
										<!-- <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10">
											Más
										</a> -->
									</div>
									<div class="kt-subheader__toolbar">
										<div class="kt-subheader__wrapper">
											<a href="javascript:;" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="Seleccione el rango de fechas" data-placement="left">
												<span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Hoy</span>&nbsp;
												<span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date"><?php echo date('d M Y'); ?></span>
												<i class="flaticon2-calendar-1"></i>
											</a>
											<div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="left">
												<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
															<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" id="Combined-Shape" fill="#000000" />
														</g>
													</svg>
													<!--<i class="flaticon2-plus"></i>-->
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
															Opciones de exportación:
															<i class="flaticon2-correct kt-font-warning" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Pedidos</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Miembros</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--brand kt-badge--rounded">15</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">Informes</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-link"></i>
																<span class="kt-nav__link-text">Financiar</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-brand btn-bold btn-sm" href="#">More options</a>
															<a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>
													<!--end::Nav-->
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- end:: Content Head -->
						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Avance de Proyectos
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
																<span class="kt-nav__section-text">Elija una opción</span>
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
																	<span class="kt-nav__link-text">Dupdo</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-excel-o"></i>
																	<span class="kt-nav__link-text">Sobresalir</span>
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
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">
									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<tr>
											<th></th>
	                    <th>ID</th>
	                    <th>user_login</th>
	                    <th>user_nicename</th>
	                    <th>user_email</th>
	                    <th>user_registered</th>
	                    <th>user_status</th>
	                    <th>display_name</th>
										</tr>
										<?php
										if($filter){ 
											$sql = mysqli_query($con, "SELECT * FROM wp_users ORDER BY ID ASC");
										}else{
											$sql = mysqli_query($con, "SELECT * FROM wp_users ORDER BY ID ASC");
										}
										if(mysqli_num_rows($sql) == 0){
											echo '<tr><td colspan="8">No hay datos.</td></tr>';
										}else{
											$no = 1;
											while($row = mysqli_fetch_assoc($sql)){
												echo '
												<tr>
													<td>'.$no.'</td>
													<td>'.$row['ID'].'</td>
	                        <td>'.$row['user_login'].'</td>
	                        <td>'.$row['user_nicename'].'</td>
	                        <td>'.$row['user_email'].'</td>
	                        <td>'.$row['user_registered'].'</td>
	                        <td>'.$row['user_status'].'</td>
	                        <td>'.$row['display_name'].'</td>
												</tr>
												';
												$no++;
											}
										}
										?>
									</table>
									<!--end: Datatable -->
								</div>
							</div>
						</div>
						<!-- end:: Content -->
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
		<script src="./assets/js/demo2/scripts.bundle.js" type="text/javascript"></script>
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
		<script src="./assets/js/demo2/pages/crud/datatables/basic/basic.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
		<!--begin::Page Scripts(used by this page) -->
		<script src="./assets/js/demo2/pages/dashboard.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
	</body>
	<!-- end::Body -->
	</html>