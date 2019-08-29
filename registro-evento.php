<?php
// Incluir archivo de configuración
require_once "inc/config.php";
 
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
				$id = $row["id"];
				$name = $row["name"];
				$apellidos = $row["apellidos"];
				$ciudad = $row["ciudad"];
				$telefono = $row["telefono"];
				$email = $row["email"];
				$avatar = $row["avatar"];
				$puesto = $row["puesto"];
			} else{
				// La URL no contiene una identificación válida. Redireccionar a la página de error
				header("location: error.php");
				exit();
			}
			
		} else{
			echo "¡Uy! Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
		}
	}

	// Check input errors before inserting in database
    if(empty($id_evento_err) && empty($userid_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO registro_eventos (id_evento, userid) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_id_evento, $param_userid);
            
            // Establecer parámetros
						$param_id_evento = $id_evento;
						$param_userid = $userid;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: panel-rh.php");
                exit();
            } else{
                echo "Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
            }
        }
    }
	
	
	// Conexión cercana
	}  else{
	// La URL no contiene el parámetro id. Redireccionar a la página de error
	header("location: error.php");
	exit();
}
$pagina_anterior = basename($_SERVER['HTTP_REFERER']);
?>
<?php $pageTitle = 'Registrarse al Evento'; include('inc/head.php') ?>
	<body class="kt-page--loading-enabled kt-page--loading kt-page--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">
		<?php include('inc/header-mobile.php') ?>
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">
					<?php include('inc/header.php') ?>
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
						<div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
							<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
								<div class="kt-subheader   kt-grid__item" id="kt_subheader">
									<div class="kt-subheader__main">
										<h3 class="kt-subheader__title">Registrarse al Evento</h3>
										<span class="kt-subheader__separator kt-subheader__separator--v"></span>
										<span class="kt-subheader__desc">Registro de Evento</span>
									</div>
								</div>
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
								<button class="kt-app__aside-close" id="kt_user_profile_aside_close">
									<i class="la la-close"></i>
								</button>
								<div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">
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
								</div>
								<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-xl-12">
											<div class="kt-portlet">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">Información personal <small>Información para el evento</small></h3>
													</div>
												</div>
												<form class="kt-form kt-form--label-right" action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
													<div class="kt-portlet__body">
														<div class="kt-section kt-section--first">
															<div class="kt-section__body">
																<div class="row">
																	<label class="col-xl-3"></label>
																	<div class="col-lg-9 col-xl-6">
																		<h3 class="kt-section__title kt-section__title-sm">Pre-Llenado:</h3>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Evento</label>
																	<div class="col-lg-9 col-xl-6">
																		<input disabled="" type="text" name="id_evento" class="form-control" value="<?php echo $pagina_anterior; ?>">
																	</div>
																	<span class="help-block"></span>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Nombre</label>
																	<div class="col-lg-9 col-xl-6">
																		<input hidden="" type="text" name="userid" class="form-control" value="<?php echo $id; ?>">
																		<input disabled="" type="text" name="name" class="form-control" value="<?php echo $name; ?>">
																	</div>
																	<span class="help-block"></span>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Apellidos</label>
																	<div class="col-lg-9 col-xl-6">
																		<input disabled="" name="apellidos" class="form-control" value="<?php echo $apellidos; ?>">
																	</div>
																	<span class="help-block"></span>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Ciudad</label>
																	<div class="col-lg-9 col-xl-6">
																		<input disabled="" type="text" name="ciudad" class="form-control" value="<?php echo $ciudad; ?>">
																	</div>
																	<span class="help-block"></span>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Puesto</label>
																	<div class="col-lg-9 col-xl-6">
																		<input disabled="" type="text" name="puesto" class="form-control" value="<?php echo $puesto; ?>">
																	</div>
																	<span class="help-block"></span>
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
																			<input disabled="" type="tel" name="telefono" class="form-control" value="<?php echo $telefono; ?>" placeholder="Phone" aria-describedby="basic-addon1">
																		</div>
																		<span class="help-block"></span>
																		<span class="form-text text-muted">Llamaremos unicamente si no recibimos confirmación por email o dentro del panel.</span>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Dirección de correo electrónico</label>
																	<div class="col-lg-9 col-xl-6">
																		<div class="input-group">
																			<div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
																			<input disabled="" type="email" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Email" aria-describedby="basic-addon1">
																		</div>
																		<span class="help-block"></span>
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
																	<input type="submit" class="btn btn-primary" value="Registrarse">
																	<a href="javascript:window.history.back();" class="btn btn-default">Cancelar</a>
																	<a href="./editar-perfil.php?id=41444" class="btn btn-warning-line" style="float: right;">Editar Perfil</a>
																</div>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('inc/footer.php') ?>
	</div>
	<?php include('inc/quick-panel.php') ?>
	<div id="kt_scrolltop" class="kt-scrolltop">
	<i class="fa fa-arrow-up"></i>
	</div>
	<?php include('inc/mansoryjs.php') ?>
	<?php include('inc/global-js.php') ?>
	<script src="./assets/js/scripts.bundle.js" type="text/javascript"></script>
	<script src="./assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
	<script src="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
	<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
	<script src="./assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>
	<script src="./assets/js/pages/crud/datatables/basic/basic.js" type="text/javascript"></script>
	<script src="./assets/js/pages/dashboard.js" type="text/javascript"></script>
	</body>
</html>