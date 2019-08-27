<?php
// Include config file
require_once "inc/config.php";
 
// Definir variables e inicializar con valores vacíos.
$name = $apellidos = $ciudad = $telefono = $email = "";
$name_err = $apellidos_err = $ciudad_err = $telefono_err = $email_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
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
        $apellidos = $input_apellidos;
    }
    
    // Validar ciudad
    $input_ciudad = trim($_POST["ciudad"]);
    if(empty($input_ciudad)){
        $ciudad_err = "Por favor ingrese el monto de la ciudad. ";
    } elseif(!is_string($input_ciudad)){
        $ciudad_err = "Ingrese un valor entero positivo ";
    } else{
        $ciudad = $input_ciudad;
    }

    // Validar Telefono
    $input_telefono = trim($_POST["telefono"]);
    if(empty($input_telefono)){
        $telefono_err = "Por favor, introduzca un Telefono. ";
    } else{
        $telefono = $input_telefono;
    }

    // Validar email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Por favor, introduzca un email. ";
    } else{
        $email = $input_email;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($apellidos_err) && empty($ciudad_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO users (name, apellidos, ciudad, telefono, email) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_apellidos, $param_ciudad, $param_telefono,  $param_email);
            
            // Establecer parámetros
			$param_name = $name;
			$param_apellidos = $apellidos;
			$param_ciudad = $ciudad;
			$param_telefono = $telefono;
			$param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: crear-perfil.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}

// Definir variables e inicializar con valores vacíos.
$name = $apellidos = $ciudad = $telefono = $email = "";
$name_err = $apellidos_err = $ciudad_err = $telefono_err = $email_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
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
        $apellidos = $input_apellidos;
    }
    
    // Validar ciudad
    $input_ciudad = trim($_POST["ciudad"]);
    if(empty($input_ciudad)){
        $ciudad_err = "Por favor ingrese el monto de la ciudad. ";
    } elseif(!is_string($input_ciudad)){
        $ciudad_err = "Ingrese un valor entero positivo ";
    } else{
        $ciudad = $input_ciudad;
    }

    // Validar Telefono
    $input_telefono = trim($_POST["telefono"]);
    if(empty($input_telefono)){
        $telefono_err = "Por favor, introduzca un Telefono. ";
    } else{
        $telefono = $input_telefono;
    }

    // Validar email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Por favor, introduzca un email. ";
    } else{
        $email = $input_email;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($apellidos_err) && empty($ciudad_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO registros_eventos (name, apellidos, ciudad, telefono, email) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_apellidos, $param_ciudad, $param_telefono,  $param_email);
            
            // Establecer parámetros
			$param_name = $name;
			$param_apellidos = $apellidos;
			$param_ciudad = $ciudad;
			$param_telefono = $telefono;
			$param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: crear-perfil.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<?php $pageTitle = 'Editar mi perfil'; include('inc/head.php') ?>
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
						                                                <div class="kt-avatar__holder" style="background-image: url(http://localhost/panel/assets/media/users/default.jpg);"></div>
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
						                                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Nombre">
						                                        </div>
						                                        <span class="help-block"><?php echo $name_err;?></span>
						                                    </div>
						                                    <div class="form-group row <?php echo (!empty($apellidos_err)) ? 'has-error' : ''; ?>">
						                                        <label class="col-xl-3 col-lg-3 col-form-label">Apellidos</label>
						                                        <div class="col-lg-9 col-xl-6">
						                                            <input name="apellidos" class="form-control" value="<?php echo $apellidos; ?>" placeholder="Apellido">
						                                        </div>
						                                        <span class="help-block"><?php echo $apellidos_err;?></span>
						                                    </div>
						                                    <div class="form-group row <?php echo (!empty($ciudad_err)) ? 'has-error' : ''; ?>">
						                                        <label class="col-xl-3 col-lg-3 col-form-label">Ciudad</label>
						                                        <div class="col-lg-9 col-xl-6">
						                                            <input type="text" name="ciudad" class="form-control" value="<?php echo $ciudad; ?>" placeholder="Ciudad">
						                                        </div>
						                                        <span class="help-block"><?php echo $ciudad_err;?></span>
						                                    </div>
						                                    <div class="row">
						                                        <label class="col-xl-3"></label>
						                                        <div class="col-lg-9 col-xl-6">
						                                            <h3 class="kt-section__title kt-section__title-sm">Datos de contacto:</h3>
						                                        </div>
						                                    </div>
						                                    <div class="form-group row <?php echo (!empty($telefono_err)) ? 'has-error' : ''; ?>">
						                                        <label class="col-xl-3 col-lg-3 col-form-label">Teléfono de contacto</label>
						                                        <div class="col-lg-9 col-xl-6">
						                                            <div class="input-group">
						                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
						                                                <input type="tel" name="telefono" class="form-control" value="<?php echo $telefono; ?>" placeholder="Phone" aria-describedby="basic-addon1">
						                                            </div>
						                                            <span class="help-block"><?php echo $telefono_err;?></span>
						                                            <span class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</span>
						                                        </div>
						                                    </div>
						                                    <div class="form-group row <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
						                                        <label class="col-xl-3 col-lg-3 col-form-label">Dirección de correo electrónico</label>
						                                        <div class="col-lg-9 col-xl-6">
						                                            <div class="input-group">
						                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
						                                                <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>" placeholder="Email" aria-describedby="basic-addon1">
						                                            </div>
						                                            <span class="help-block"><?php echo $email_err;?></span>
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