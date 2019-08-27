<?php
// Incluir archivo de configuración
require_once "inc/config.php";
 
// Definir variables e inicializar con valores vacíos.
$password = "";
$password_err = "";
 
// Procesar datos del formulario cuando se envía el formulario
if(isset($_POST["id"]) && !empty($_POST["id"])){
	// Obtener valor de entrada oculto
	$id = $_POST["id"];
	
	// Nombre Validar
	$input_password = trim($_POST["password"]);
	if(empty($input_password)){
		$password_err = "Por favor, introduzca un nombre ";
	} elseif(!filter_var($input_password, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
		$password_err = "Por favor ingrese un nombre valido.";
	} else{
		$password = $input_password;
	}
	


	// Verifique los errores de entrada antes de insertar en la base de datos
	if(empty($password_err)){
		// Prepare una declaración de actualización
		$sql = "UPDATE users SET password=? WHERE id=?";
		 
		if($stmt = mysqli_prepare($link, $sql)){
			// Vincula las variables a la declaración preparada como parámetros
			mysqli_stmt_bind_param($stmt, "si", $param_password);
			
			// Establecer parámetros
			$param_password = $password;

			
			// Intentar ejecutar la declaración preparada
			if(mysqli_stmt_execute($stmt)){
				// Registros actualizados con éxito. Redirigir a la página de destino
				header("location: perfil.php");
				exit();
			} else{
				echo "Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
			}
		}
		 
		// Declaración cerrada
		mysqli_stmt_close($stmt);
	}
	
	// Conexión cercana
} else{
	// Verifique la existencia del parámetro id antes de seguir procesando
	if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
		// Obtener parámetro de URL
		$id =  trim($_GET["id"]);
		
		// Prepare una declaración de selección
		$sql = "SELECT * FROM users WHERE id = ?";
		if($stmt = mysqli_prepare($link, $sql)){
			// Vincula las variables a la declaración preparada como parámetros
			mysqli_stmt_bind_param($stmt, "i", $param_id);
			
			// Establecer parámetros
			$param_id = $id;
			
			// Intentar ejecutar la declaración preparada
			if(mysqli_stmt_execute($stmt)){
				$result = mysqli_stmt_get_result($stmt);
	
				if(mysqli_num_rows($result) == 1){
					/* Fetch result row as an associative array. Since the result set
					contains only one row, we don't need to use while loop */
					$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
					
					// Recuperar valor de campo individual
					$password = $row["password"];
				} else{
					// La URL no contiene una identificación válida. Redireccionar a la página de error
					header("location: error.php");
					exit();
				}
				
			} else{
				echo "¡Uy! Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
			}
		}
		
		// Declaración cerrada
		mysqli_stmt_close($stmt);
		
		// Conexión cercana
		}  else{
		// La URL no contiene el parámetro id. Redireccionar a la página de error
		header("location: error.php");
		exit();
	}
}
?>
<?php $pageTitle = 'Titulo'; include('inc/head.php') ?>
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
														<h3 class="kt-portlet__head-title">Cambiar contraseña<small>cambia o restablece la contraseña de tu cuenta</small></h3>
													</div>
													<div class="kt-portlet__head-toolbar kt-hidden">
														<div class="kt-portlet__head-toolbar">
															<div class="dropdown dropdown-inline">
																<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="la la-sellsy"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__section kt-nav__section--first">
																			<span class="kt-nav__section-text">Acciones rápidas</span>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-graph-1"></i>
																				<span class="kt-nav__link-text">Estadísticas</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																				<span class="kt-nav__link-text">Eventos</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-layers-1"></i>
																				<span class="kt-nav__link-text">Informes</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-bell-1o"></i>
																				<span class="kt-nav__link-text">Notificaciones</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-file-1"></i>
																				<span class="kt-nav__link-text">Archivos</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
												<form class="kt-form kt-form--label-right" action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
													<div class="kt-portlet__body">
														<div class="kt-section kt-section--first">
															<div class="kt-section__body">
																<div class="alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert">
																	<div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
																	<div class="alert-text">Configure las contraseñas de los usuarios para que caduquen periódicamente. Los usuarios necesitarán una advertencia de que sus contraseñas caducarán, o podrían bloquearse inadvertidamente. Fuera del sistema!</div>
																	<div class="alert-close">
																		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																			<span aria-hidden="true"><i class="la la-close"></i></span>
																		</button>
																	</div>
																</div>
																<div class="row">
																	<label class="col-xl-3"></label>
																	<div class="col-lg-9 col-xl-6">
																		<h3 class="kt-section__title kt-section__title-sm">Cambie o recupere su contraseña:</h3>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Contraseña actual</label>
																	<div class="col-lg-9 col-xl-6">
																		<input type="password" name="password" class="form-control" value="" placeholder="Contraseña actual">
																		<a href="#" class="kt-link kt-font-sm kt-font-bold kt-margin-t-5">¿Olvidó su contraseña?</a>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Nueva contraseña</label>
																	<div class="col-lg-9 col-xl-6">
																		<input type="password" name="password" class="form-control" value="" placeholder="Nueva contraseña">
																	</div>
																</div>
																<div class="form-group form-group-last row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Verificar contraseña</label>
																	<div class="col-lg-9 col-xl-6">
																		<input type="password" name="password" class="form-control" value="" placeholder="Verificar contraseña">
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
																	<button type="submit" class="btn btn-brand btn-bold">Guardar</button>&nbsp;
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