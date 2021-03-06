<?php
// Include config file
require_once "inc/config.php";
 
// Definir variables e inicializar con valores vacíos.
$evento = "";
$evento_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validar evento
    $input_evento = trim($_POST["evento"]);
    if(empty($input_evento)){
        $evento_err = "Por favor, introduzca un evento. ";
    } else{
        $evento = $input_evento;
    }
    
    
    // Check input errors before inserting in database
    if(empty($evento_err) && empty($evento_err) && empty($ciudad_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO eventos (evento) VALUES (?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_evento);
            
            // Establecer parámetros
						$param_evento = $evento;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: panel-rh.php");
                exit();
            } else{
                echo "Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
            }
        }
         
        // Close statement
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
	                                            <h3 class="kt-section__title kt-section__title-sm">Información del evento:</h3>
	                                        </div>
	                                    </div>
	                                    <div class="form-group form-group-last row<?php echo (!empty($evento_err)) ? 'has-error' : ''; ?>">
	                                        <label class="col-xl-3 col-lg-3 col-form-label">Nombre Evento</label>
	                                        <div class="col-lg-9 col-xl-6">
	                                            <div class="input-group">
	                                            		<div class="input-group-append"><span class="input-group-text">www.cc.protexa.com.mx/eventos/</span></div>
	                                                	<input name="evento" type="text" class="form-control" placeholder="arte-y-diseno" value="<?php echo $evento; ?>">
	                                                <div class="input-group-append"><span class="input-group-text">/</span></div>
	                                                <span class="help-block"><?php echo $evento_err;?></span>
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