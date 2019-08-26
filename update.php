<?php
// Incluir archivo de configuración
require_once "inc/config.php";
 
// Definir variables e inicializar con valores vacíos.
$name = $apellidos = $ciudad = "";
$name_err = $apellidos_err = $ciudad_err = "";
 
// Procesar datos del formulario cuando se envía el formulario
if(isset($_POST["id"]) && !empty($_POST["id"])){
	// Obtener valor de entrada oculto
	$id = $_POST["id"];
	
	// Nombre Validar
	$input_name = trim($_POST["name"]);
	if(empty($input_name)){
		$name_err = "Please enter a name.";
	} elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
		$name_err = "Please enter a valid name.";
	} else{
		$name = $input_name;
	}
	
	// Validar apellidos
	$input_apellidos = trim($_POST["apellidos"]);
	if(empty($input_apellidos)){
		$apellidos_err = "Please enter an apellidos.";     
	} else{
		$apellidos = $input_apellidos;
	}
	
	// Validar ciudad
	$input_ciudad = trim($_POST["ciudad"]);
	if(empty($input_ciudad)){
		$ciudad_err = "Please enter the ciudad amount.";     
	} elseif(!is_string($input_ciudad)){
		$ciudad_err = "Please enter a positive integer value.";
	} else{
		$ciudad = $input_ciudad;
	}
	
	// Verifique los errores de entrada antes de insertar en la base de datos
	if(empty($name_err) && empty($apellidos_err) && empty($ciudad_err)){
		// Prepare una declaración de actualización
		$sql = "UPDATE users SET name=?, apellidos=?, ciudad=? WHERE id=?";
		 
		if($stmt = mysqli_prepare($link, $sql)){
			// Vincula las variables a la declaración preparada como parámetros
			mysqli_stmt_bind_param($stmt, "sssi", $param_name, $param_apellidos, $param_ciudad, $param_id);
			
			// Establecer parámetros
			$param_name = $name;
			$param_apellidos = $apellidos;
			$param_ciudad = $ciudad;
			$param_id = $id;
			
			// Intentar ejecutar la declaración preparada
			if(mysqli_stmt_execute($stmt)){
				// Registros actualizados con éxito. Redirigir a la página de destino
				header("location: perfil.php");
				exit();
			} else{
				echo "Something went wrong. Please try again later.";
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
					$name = $row["name"];
					$apellidos = $row["apellidos"];
					$ciudad = $row["ciudad"];
				} else{
					// La URL no contiene una identificación válida. Redireccionar a la página de error
					header("location: error.php");
					exit();
				}
				
			} else{
				echo "Oops! Something went wrong. Please try again later.";
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
<?php $pageTitle = 'Editar mi perfil'; include('inc/head.php') ?>
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
										<h3 class="kt-subheader__title">Editar mi perfil</h3>
										<span class="kt-subheader__separator kt-subheader__separator--v"></span>
										<span class="kt-subheader__desc">Editar Perfil</span>
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
									<div class="kt-portlet ">
										<div class="kt-portlet__head  kt-portlet__head--noborder">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
													<i class="flaticon-more-1"></i>
												</a>
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
											<div class="kt-portlet">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">Información personal <small>actualice su información personal</small></h3>
													</div>
												</div>
												<form class="kt-form kt-form--label-right" action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
													<div class="kt-portlet__body">
														<div class="kt-section kt-section--first">
															<div class="kt-section__body">
																<div class="row">
																	<label class="col-xl-3"></label>
																	<div class="col-lg-9 col-xl-6">
																		<h3 class="kt-section__title kt-section__title-sm">Información de mi perfil:</h3>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
																	<div class="col-lg-9 col-xl-6">
																		<div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_apps_user_add_avatar">
																			<div class="kt-avatar__holder" style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/assets/media/users/100_1.jpg&quot;);"></div>
																			<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
																				<i class="fa fa-pen"></i>
																				<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
																			</label>
																			<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
																				<i class="fa fa-times"></i>
																			</span>
																		</div>
																	</div>
																</div>
																<div class="form-group row <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
																	<label class="col-xl-3 col-lg-3 col-form-label">Nombre</label>
																	<div class="col-lg-9 col-xl-6">
																		<input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
																	</div>
																	<span class="help-block"><?php echo $name_err;?></span>
																</div>
																<div class="form-group row <?php echo (!empty($apellidos_err)) ? 'has-error' : ''; ?>">
																	<label class="col-xl-3 col-lg-3 col-form-label">Apellidos</label>
																	<div class="col-lg-9 col-xl-6">
																		<input name="apellidos" class="form-control" value="<?php echo $apellidos; ?>">
																	</div>
																	<span class="help-block"><?php echo $apellidos_err;?></span>
																</div>
																<div class="form-group row <?php echo (!empty($ciudad_err)) ? 'has-error' : ''; ?>">
																	<label class="col-xl-3 col-lg-3 col-form-label">Ciudad</label>
																	<div class="col-lg-9 col-xl-6">
																		<input type="text" name="ciudad" class="form-control" value="<?php echo $ciudad; ?>">
																	</div>
																	<span class="help-block"><?php echo $ciudad_err;?></span>
																</div>
																<div class="row">
																	<label class="col-xl-3"></label>
																	<div class="col-lg-9 col-xl-6">
																		<h3 class="kt-section__title kt-section__title-sm">Datos de contacto:</h3>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Teléfono de contacto</label>
																	<div class="col-lg-9 col-xl-6">
																		<div class="input-group">
																			<div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
																			<input type="text" class="form-control" value="+8121071332" placeholder="Phone" aria-describedby="basic-addon1">
																		</div>
																		<span class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</span>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Dirección de correo electrónico</label>
																	<div class="col-lg-9 col-xl-6">
																		<div class="input-group">
																			<div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
																			<input type="text" class="form-control" value="erick.escareno@protexa.com.mx" placeholder="Email" aria-describedby="basic-addon1">
																		</div>
																	</div>
																</div>
																<div class="form-group form-group-last row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Sitio de la compañía</label>
																	<div class="col-lg-9 col-xl-6">
																		<div class="input-group">
																			<input type="text" class="form-control" placeholder="Username" value="protexa">
																			<div class="input-group-append"><span class="input-group-text">.com.mx</span></div>
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
																	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
																	<input type="submit" class="btn btn-primary" value="Guardar">
																	<a href="perfil.php" class="btn btn-default">Cancelar</a>
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