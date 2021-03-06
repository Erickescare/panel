<?php $PageTitleMaster = 'Recursos Humanos'; $pageTitle = 'Titulo'; include('inc/head.php') ?>
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
										<h3 class="kt-subheader__title">Titulo</h3>
										<span class="kt-subheader__separator kt-subheader__separator--v"></span>
										<span class="kt-subheader__desc">Sub-Titulo</span>
										<!-- <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10">
											Más
										</a> -->
									</div>
								</div>
								<!-- end:: Content Head -->
								<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
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
															Export Options
															<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
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
																<span class="kt-nav__link-text">Configuración</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Soporte</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success">5</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>
													<!--end::Nav-->
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit-y">
											<?php include ('inc/nav-perfil.php'); ?>
										</div>
											<!--end::Widget -->
									</div>
									<!--end:: Widgets/Applications/User/Profile1-->
								</div>
								<!--End:: App Aside-->
								<!--Begin:: App Content-->
								<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-xl-12">
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">Las notificaciones por correo electrónico<small>controlan cuándo y con qué frecuencia Protexa le envía correos electrónicos.</small></h3>
													</div>
												</div>
												<form class="kt-form kt-form--label-right">
													<div class="kt-portlet__body">
														<div class="kt-section kt-section--first">
															<div class="kt-section__body">
																<div class="row">
																	<label class="col-xl-3"></label>
																	<div class="col-lg-9 col-xl-6">
																		<h3 class="kt-section__title kt-section__title-sm">Configurar notificación por correo electrónico: </h3>
																	</div>
																</div>
																<div class="form-group form-group-sm row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Notificación por correo electrónico </label>
																	<div class="col-lg-9 col-xl-6">
																		<span class="kt-switch">
																			<label>
																				<input type="checkbox" checked="checked" name="email_notification_1">
																				<span></span>
																			</label>
																		</span>
																	</div>
																</div>
																<div class="form-group form-group-last row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Enviar copia a correo electrónico personal </label>
																	<div class="col-lg-9 col-xl-6">
																		<span class="kt-switch">
																			<label>
																				<input type="checkbox" name="email_notification_2">
																				<span></span>
																			</label>
																		</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
														<div class="kt-section kt-section--first">
															<div class="kt-section__body">
																<div class="row">
																	<label class="col-xl-3"></label>
																	<div class="col-lg-9 col-xl-6">
																		<h3 class="kt-section__title kt-section__title-sm">Correos electrónicos relacionados con la actividad: </h3>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Cuándo enviar un correo electrónico </label>
																	<div class="col-lg-9 col-xl-6">
																		<div class="kt-checkbox-list">
																			<label class="kt-checkbox">
																				<input type="checkbox"> Tienes nuevas notificaciones.
																				<span></span>
																			</label>
																			<label class="kt-checkbox">
																				<input type="checkbox"> Recibiste un mensaje directo
																				<span></span>
																			</label>
																			<label class="kt-checkbox">
																				<input type="checkbox" checked="checked"> Alguien te agrega como conexión
																				<span></span>
																			</label>
																		</div>
																	</div>
																</div>
																<div class="form-group form-group-last row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Cuándo escalar correos electrónicos </label>
																	<div class="col-lg-9 col-xl-6">
																		<div class="kt-checkbox-list">
																			<label class="kt-checkbox kt-checkbox--brand">
																				<input type="checkbox"> Sobre nuevo orden.
																				<span></span>
																			</label>
																			<label class="kt-checkbox kt-checkbox--brand">
																				<input type="checkbox"> Nueva aprobación de membresía
																				<span></span>
																			</label>
																			<label class="kt-checkbox kt-checkbox--brand">
																				<input type="checkbox" checked="checked"> Registro de miembro
																				<span></span>
																			</label>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
														<div class="kt-section kt-section--first">
															<div class="kt-section__body">
																<div class="row">
																	<label class="col-xl-3"></label>
																	<div class="col-lg-9 col-xl-6">
																		<h3 class="kt-section__title kt-section__title-sm">Actualizaciones de Protexa: </h3>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Enviarle un correo electrónico con </label>
																	<div class="col-lg-9 col-xl-6">
																		<div class="kt-checkbox-list">
																			<label class="kt-checkbox">
																				<input type="checkbox"> Noticias sobre los productos Prrotxa y actualizaciones de funciones
																				<span></span>
																			</label>
																			<label class="kt-checkbox">
																				<input type="checkbox"> Consejos para sacar más provecho de Prrotxa
																				<span></span>
																			</label>
																			<label class="kt-checkbox">
																				<input type="checkbox" checked="checked"> Cosas que te perdiste desde la última vez que iniciaste sesión en Prrotxa
																				<span></span>
																			</label>
																			<label class="kt-checkbox">
																				<input type="checkbox" checked="checked"> Noticias sobre Protexa sobre productos asociados y otros servicios
																				<span></span>
																			</label>
																			<label class="kt-checkbox">
																				<input type="checkbox" checked="checked"> Consejos sobre productos comerciales de Protexa
																				<span></span>
																			</label>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-portlet__foot">
														<div class="kt-form__actions">
															<div class="row">
																<div class="col-lg-3 col-xl-3">
																</div>
																<div class="col-lg-9 col-xl-9">
																	<button type="reset" class="btn btn-brand btn-bold">Guardar</button>&nbsp;
																	<button type="reset" class="btn btn-secondary">Cancelar</button>
																</div>
															</div>
														</div>
													</div>
												</form>
											</div>
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