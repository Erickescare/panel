<?php
// Incluir archivo de configuración
require_once "inc/config.php";
 
// Definir variables e inicializar con valores vacíos
$id = $name = $apellidos = $email =  $password = $confirm_password = "";
$id_err = $name_err = $apellidos_err = $email_err = $password_err = $confirm_password_err = "";
 
// Procesando datos del formulario cuando se envía el formulario
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
	// Validar id
	if(empty(trim($_POST["id"]))){
		$id_err = "Por favor, introduzca una identificación.";
	} else{
		// Prepara una declaración select
		$sql = "SELECT id FROM users WHERE id = ?";
		
		if($stmt = mysqli_prepare($link, $sql)){
			// Vincula las variables a la declaración preparada como parámetros
			mysqli_stmt_bind_param($stmt, "s", $param_id);
			
			// Establecer parámetros
			$param_id = trim($_POST["id"]);
			
			// Intento de ejecutar la declaración preparada
			if(mysqli_stmt_execute($stmt)){
				/* store result */
				mysqli_stmt_store_result($stmt);
				
				if(mysqli_stmt_num_rows($stmt) == 1){
					$id_err = "Ya existe este usuario.";
				} else{
					$id = trim($_POST["id"]);
				}
			} else{
				echo "¡Uy! Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
			}
		}
		 
		// Cerrar declaración
		mysqli_stmt_close($stmt);
	}

	// Nombre Validar
	$input_name = trim($_POST["name"]);
	if(empty($input_name)){
		$name_err = "Por favor, introduzca un nombre ";
	} elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
		$name_err = "Por favor ingrese un nombre valido.";
	} else{
		$name = $input_name;
	}
	
	// Validar apellidos
	$input_apellidos = trim($_POST["apellidos"]);
	if(empty($input_apellidos)){
		$apellidos_err = "Por favor, introduzca un apellido. ";
	} else{
		$apellidos = $apellidos = $input_apellidos;
	}
	
	// Validar contraseña
	if(empty(trim($_POST["password"]))){
		$password_err = "Please enter a password.";     
	} elseif(strlen(trim($_POST["password"])) < 4){
		$password_err = "La contraseña debe tener al menos 4 caracteres.";
	} else{
		$password = trim($_POST["password"]);
	}

	// Validar email
	$input_email = trim($_POST["email"]);
	if(empty($input_email)){
		$email_err = "Por favor, introduzca un email. ";
	} else{
		$email = $input_email;
	}
	
	// Validar confirmar contraseña
	if(empty(trim($_POST["confirm_password"]))){
		$confirm_password_err = "Please confirm password.";     
	} else{
		$confirm_password = trim($_POST["confirm_password"]);
		if(empty($password_err) && ($password != $confirm_password)){
			$confirm_password_err = "La contraseña no coincidió.";
		}
	}
	
	// Verificar errores de entrada antes de insertar en la base de datos
	if(empty($id_err) && empty($name_err)  && empty($apellidos_err)  && empty($password_err) && empty($confirm_password_err)){
		
		// Prepara una declaración de inserción
		$sql = "INSERT INTO users (id, name, apellidos, email, password) VALUES (?, ?, ?, ?, ?)";
		 
		if($stmt = mysqli_prepare($link, $sql)){
			// Vincula las variables a la declaración preparada como parámetros
			mysqli_stmt_bind_param($stmt, "sssss", $param_id, $param_name, $param_apellidos, $param_email, $param_password);
			
			// Establecer parámetros
			$param_id = $id;
			$param_name = $name;
			$param_apellidos = $apellidos;
			$param_email = $email;
			$param_password = password_hash($password, PASSWORD_DEFAULT); // Crea un hash de contraseña
			
			// Intento de ejecutar la declaración preparada
			if(mysqli_stmt_execute($stmt)){
				// Redirigir a la página de inicio de sesión
				header("location: login.php");
			} else{
				echo "Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
			}
		}
		 
		// Cerrar declaración
		mysqli_stmt_close($stmt);
	}
}
?>
<?php $PageTitleMaster = 'Recursos Humanos'; $pageTitle = 'Editar mi perfil'; include('inc/head.php') ?>
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
										<h3 class="kt-subheader__title">Editar mi perfil</h3>
										<span class="kt-subheader__separator kt-subheader__separator--v"></span>
										<span class="kt-subheader__desc">Editar Perfil</span>
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
														<h3 class="kt-portlet__head-title">Información personal <small>actualice su información personal</small></h3>
													</div>
												</div>
												<form class="kt-form kt-form--label-right" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
																			<div class="kt-avatar__holder" style="background-image: url(http://localhost/panel/assets/media/users/default.jpg); "> </div>
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
																<div class="form-group row <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
																	<label class="col-xl-3 col-lg-3 col-form-label">Num. Empleado</label>
																	<div class="col-lg-9 col-xl-6">
																		<input type="text" placeholder="Num. Emplieado" name="id" class="form-control" value="<?php echo $id; ?>">
																		<span class="help-block"><?php echo $id_err; ?></span>
																	</div>
																	<span class="help-block"><?php echo $id_err;?></span>
																</div>
																<div class="form-group row <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
																	<label class="col-xl-3 col-lg-3 col-form-label">Correo Electronico</label>
																	<div class="col-lg-9 col-xl-6">
																		<input type="email" placeholder="Correo Electronico" name="email" class="form-control" value="<?php echo $email; ?>">
																		<span class="help-block"><?php echo $email_err; ?></span>
																	</div>
																	<span class="help-block"><?php echo $id_err;?></span>
																</div>
																<div class="form-group row <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
																	<label class="col-xl-3 col-lg-3 col-form-label">Nombre</label>
																	<div class="col-lg-9 col-xl-6">
																		<input type="text" placeholder="Nombres" name="name" class="form-control" value="<?php echo $name; ?>">
																		<span class="help-block"><?php echo $name_err; ?></span>
																	</div>
																	<span class="help-block"><?php echo $id_err;?></span>
																</div>
																<div class="form-group row <?php echo (!empty($apellidos_err)) ? 'has-error' : ''; ?>">
																	<label class="col-xl-3 col-lg-3 col-form-label">Apellido</label>
																	<div class="col-lg-9 col-xl-6">
																		<input type="text" placeholder="Apellidos" name="apellidos" class="form-control" value="<?php echo $apellidos; ?>">
																		<span class="help-block"><?php echo $apellidos_err; ?></span>
																	</div>
																</div>
																<div class="form-group row <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
																	 <label class="col-xl-3 col-lg-3 col-form-label">Password</label>
																		 <div class="col-lg-9 col-xl-6">
																		<input type="password" placeholder="Contraseña" name="password" class="form-control" value="<?php echo $password; ?>">
																		<span class="help-block"><?php echo $password_err; ?></span>
																	</div>
																</div>
																<div class="form-group row <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
																	 <label class="col-xl-3 col-lg-3 col-form-label">Confirm Password</label>
																		 <div class="col-lg-9 col-xl-6">
																		<input type="password" placeholder="Confirmar Contraseña" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
																		<span class="help-block"><?php echo $confirm_password_err; ?></span>
																	</div>
																</div>
																<div class="kt-portlet__foot">
																	<div class="kt-form__actions">
																		<div class="row">
																			<div class="col-lg-3 col-xl-3">
																			</div>
																			<div class="col-lg-9 col-xl-9">
																				<input type="submit" class="btn btn-primary" value="Guardar">
																				<a href="perfil.php" class="btn btn-default">Cancelar</a>
																			</div>
																		</div>
																	</div>
																</div>
															   <!--  <p>Already have an account? <a href="login.php">Login here</a>.</p> -->
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
	<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type ="text/javascript"></script>
	<script src="./assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>
	<script src="./assets/js/pages/crud/datatables/basic/basic.js" type="text/javascript"></script>
	<script src="./assets/js/pages/dashboard.js" type="text/javascript"></script>
	</body>
</html>