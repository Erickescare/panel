<?php $pageTitle = 'Mi Perfil';  include('inc/head.php');
require_once "inc/config.php";
$sql = "SELECT * FROM users";
?>
<?php date_default_timezone_set('America/Monterrey');  ?>
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
										<h3 class="kt-subheader__title">Mi Perfil</h3>
										<span class="kt-subheader__separator kt-subheader__separator--v"></span>
										<span class="kt-subheader__desc"></span>
									</div>
								</div>
								<!-- end:: Content Head -->
								<!-- begin:: Content -->
								<div class="kt-content kt-grid__item kt-grid__item--fluid" id="kt_content">

									<!--Begin::App-->
									<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

										<!--Begin:: App Aside Mobile Toggle-->
										<button class="kt-app__aside-close" id="kt_user_profile_aside_close">
											<i class="la la-close"></i>
										</button>

										<!--End:: App Aside Mobile Toggle-->

										<!--Begin:: App Aside-->
										<div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">

											<!--begin:: Widgets/Applications/User/Profile1-->
											<div class="kt-portlet kt-portlet--height-fluid-">
												<div class="kt-portlet__head  kt-portlet__head--noborder">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
															<i class="flaticon-more-1"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">
															<!--begin::Nav-->
															<ul class="kt-nav">
																<li class="kt-nav__head">
																	Opciones
																	<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Haga clic para obtener más información..."></i>
																</li>
																<li class="kt-nav__separator"></li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-drop"></i>
																		<span class="kt-nav__link-text">Actividad</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																		<span class="kt-nav__link-text">Preguntas frecuentes</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-link"></i>
																		<span class="kt-nav__link-text">Ajustes</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-new-email"></i>
																		<span class="kt-nav__link-text">Apoyo</span>
																		<span class="kt-nav__link-badge">
																			<span class="kt-badge kt-badge--success">5</span>
																		</span>
																	</a>
																</li>
																<li class="kt-nav__separator"></li>
																<li class="kt-nav__foot">
																	<a class="btn btn-label-danger btn-bold btn-sm" href="#">Reclamo</a>
																	<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Haga clic para obtener más información...">Saber más</a>
																</li>
															</ul>
															<!--end::Nav-->
														</div>
													</div>
												</div>
												<div class="kt-portlet__body kt-portlet__body--fit-y">
													<?php include ('inc/nav-perfil.php'); ?>
												</div>
											</div>
											<!--end:: Widgets/Applications/User/Profile1-->
										</div>
										<!--End:: App Aside-->
										<!--Begin:: App Content-->
										<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
											<div class="row">
												<div class="col-xl-12">

													<!--begin:: Widgets/Order Statistics-->
													<div class="kt-portlet kt-portlet--height-fluid">
														<div class="kt-portlet__head">
															<div class="kt-portlet__head-label">
																<h3 class="kt-portlet__head-title">
																	Mi hora de Salida
																</h3>
															</div>
															<div class="kt-portlet__head-toolbar">
																<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
																	Información
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<!--begin::Nav-->
																	<ul class="kt-nav">
																		<li class="kt-nav__head">
																			Opciones
																			<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Haga clic para obtener más información..."></i>
																		</li>
																		<li class="kt-nav__separator"></li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-drop"></i>
																				<span class="kt-nav__link-text">Actividad</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																				<span class="kt-nav__link-text">Preguntas frecuentes</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-link"></i>
																				<span class="kt-nav__link-text">Ajustes</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-new-email"></i>
																				<span class="kt-nav__link-text">Apoyo</span>
																				<span class="kt-nav__link-badge">
																					<span class="kt-badge kt-badge--success">5</span>
																				</span>
																			</a>
																		</li>
																		<li class="kt-nav__separator"></li>
																		<li class="kt-nav__foot">
																			<a class="btn btn-label-danger btn-bold btn-sm" href="#">Reclamo</a>
																			<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Haga clic para obtener más información...">Saber más</a>
																		</li>
																	</ul>
																	<!--end::Nav-->
																</div>
															</div>
														</div>
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget12">
																<div class="kt-widget12__content">
																	<div class="kt-widget12__item">
																		<div class="kt-widget12__info">
																			<span class="kt-widget12__desc">Hoy es:</span>
																			<span class="kt-widget12__value"><?php echo date('d M Y'); ?></span>
																		</div>
																		<div class="kt-widget12__info">
																			<span class="kt-widget12__desc">Mi ID</span>
																			<span class="kt-widget12__value">41444</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<?php
														// Attempt select query execution
														if($result = mysqli_query($link, $sql)){
																if(mysqli_num_rows($result) > 0){
																		echo "<table class='table table-bordered table-striped'>";
																				echo "<thead>";
																						echo "<tr>";
																								echo "<th>#</th>";
																								echo "<th>Num. Empleado</th>";
																								echo "<th>Nombre</th>";
																								echo "<th>Apellidos</th>";
																								echo "<th>Telefono</th>";
																								echo "<th>Email</th>";
																								echo "<th>Ciudad</th>";
																								echo "<th>Accion</th>";
																						echo "</tr>";
																				echo "</thead>";
																				echo "<tbody>";
																				while($row = mysqli_fetch_array($result)){
																						echo "<tr>";
																								echo "<td>" . $row['id'] . "</td>";
																								echo "<td>" . $row['numempleado'] . "</td>";
																								echo "<td>" . $row['name'] . "</td>";
																								echo "<td>" . $row['apellidos'] . "</td>";
																								echo "<td>" . $row['telefono'] . "</td>";
																								echo "<td>" . $row['email'] . "</td>";
																								echo "<td>" . $row['ciudad'] . "</td>";
																								echo "<td>";
																										echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'>R</a>";
																										echo "<a href='editar-perfil.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'>E</a>";
																										echo "<a href='borrar-perfil.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'>X</a>";
																								echo "</td>";
																						echo "</tr>";
																				}
																				echo "</tbody>";
																		echo "</table>";
																		// Free result set
																		mysqli_free_result($result);
																} else{
																		echo "<p class='lead'><em>No se encontraron registros.</em></p>";
																}
														} else{
																echo "ERROR: No se pudo ejecutar $sql. " . mysqli_error($link);
														}
				 
														// Close connection
														mysqli_close($link);
														?>
													</div>
													<!--end:: Widgets/Order Statistics-->
												</div>
											</div>
										</div>
										<!--End:: App Content-->
									</div>
									<!--End::App-->
								</div>
								<!-- end:: Content -->
							</div>
						</div>
					</div>
					<?php include('inc/footer.php') ?>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
		<?php include('inc/quick-panel.php') ?>
		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>
		<!-- end::Scrolltop -->
		<!--begin:: Global Mandatory Vendors -->
		<?php include('inc/mansoryjs.php') ?>
		<!--end:: Global Mandatory Vendors -->
		<?php include('inc/global-js.php') ?>
		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="./assets/js/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Global Theme Bundle -->
		<!--begin::Page Vendors(used by this page) -->
		<script src="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
		<script src="./assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>
		<!--end::Page Vendors -->
		<!--begin::Page Scripts(used by this page) -->
		<script src="./assets/js/pages/dashboard.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
	</body>
	<!-- end::Body -->
	</html>