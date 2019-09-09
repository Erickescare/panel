<?php
// Incluir archivo de configuración
require_once "inc/config.php";
 
// Definir variables e inicializar con valores vacíos.
$titulo = $cuerpo = $ciudad = $publicacion = $creacion = "";
$titulo_err = $cuerpo_err = $ciudad_err = $publicacion_err = $creacion_err = "";
 
// Procesar datos del formulario cuando se envía el formulario
if(isset($_POST["id"]) && !empty($_POST["id"])){
	// Obtener valor de entrada oculto
	$id = $_POST["id"];
	
	// Nombre Validar
	$input_titulo = trim($_POST["titulo"]);
	if(empty($input_titulo)){
		$titulo_err = "Por favor, introduzca un nombre ";
	} elseif(!filter_var($input_titulo, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
		$titulo_err = "Por favor ingrese un nombre valido.";
	} else{
		$titulo = $input_titulo;
	}
	
	// Validar cuerpo
	$input_cuerpo = trim($_POST["cuerpo"]);
	if(empty($input_cuerpo)){
		$cuerpo_err = "Por favor, introduzca un apellido. ";
	} else{
		$cuerpo = $input_cuerpo;
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

	// Validar publicacion
	$input_publicacion = trim($_POST["publicacion"]);
	if(empty($input_publicacion)){
		$publicacion_err = "Por favor, introduzca un publicacion. ";
	} else{
		$publicacion = $input_publicacion;
	}

	// Validar creacion
	$input_creacion = trim($_POST["creacion"]);
	if(empty($input_creacion)){
		$creacion_err = "Por favor, introduzca un creacion. ";
	} else{
		$creacion = $input_creacion;
	}


	// Verifique los errores de entrada antes de insertar en la base de datos
	if(empty($titulo_err) && empty($cuerpo_err) && empty($ciudad_err) && empty($publicacion_err) && empty($creacion_err)){
		// Prepare una declaración de actualización
		$sql = "UPDATE noticias SET titulo=?, cuerpo=?, ciudad=?, publicacion=?, creacion=? WHERE id=?";
		 
		if($stmt = mysqli_prepare($link, $sql)){
			// Vincula las variables a la declaración preparada como parámetros
			mysqli_stmt_bind_param($stmt, "sssssi", $param_titulo, $param_cuerpo, $param_ciudad, $param_publicacion,  $param_creacion, $param_id);
			
			// Establecer parámetros
			$param_titulo = $titulo;
			$param_cuerpo = $cuerpo;
			$param_ciudad = $ciudad;
			$param_publicacion = $publicacion;
			$param_creacion = $creacion;
			$param_id = $id;
			
			// Intentar ejecutar la declaración preparada
			if(mysqli_stmt_execute($stmt)){
				// Registros actualizados con éxito. Redirigir a la página de destino
				header("location: noticias.php");
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
		$sql = "SELECT * FROM noticias WHERE id = ?";
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
					$titulo = $row["titulo"];
					$cuerpo = $row["cuerpo"];
					$ciudad = $row["ciudad"];
					$publicacion = $row["publicacion"];
					$creacion = $row["creacion"];
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
<?php $PageTitleMaster = 'Recursos Humanos'; $pageTitle = 'Noticias'; include('inc/head.php') ?>
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
									<h3 class="kt-subheader__title"><?php echo $pageTitle ?></h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<span class="kt-subheader__desc">Sub-Titulo</span>
								</div>
							</div>
							<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
								<!-- begin:: Content -->
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon-computer"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Noticias
										</h3>
									</div>
								</div>
								<div class="kt-portlet__body">
									<div class="row">
										<div class="col-xl-4">
											<!--begin:: Widgets/Blog-->
											<div class="kt-portlet kt-portlet--height-fluid kt-widget19">
												<div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
													<div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(./assets/media/blog/blog5.jpg)">
														<h3 class="kt-widget19__title kt-font-light">
															Ventjas de Google Chorme con G Suite
														</h3>
														<div class="kt-widget19__shadow"></div>
														<div class="kt-widget19__labels">
															<a href="./single.php" class="btn btn-label-light-o2 btn-bold btn-sm ">Reciente</a>
														</div>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="kt-widget19__wrapper">
														<div class="kt-widget19__content">
															<div class="kt-widget19__userpic">
																<img src="./assets/media//users/100_12.jpg" alt="">
															</div>
															<div class="kt-widget19__info">
																<a href="./single.php" class="kt-widget19__usertitulo">
																	Erick Escareño
																</a>
																<span class="kt-widget19__time">
																	UX/UI Designer, Google
																</span>
															</div>
															<div class="kt-widget19__stats">
																<span class="kt-widget19__number kt-font-brand">
																	18
																</span>
																<a href="./single.php" class="kt-widget19__comment">
																	Comentarios
																</a>
															</div>
														</div>
														<div class="kt-widget19__text">
															Lorem Ipsum is simply dummy text of the printing and typesetting scrambled a type specimen book text of the dummy text of the printing printing and typesetting industry scrambled dummy text of the printing.
														</div>
													</div>
													<div class="kt-widget19__action">
														<a href="./single.php" class="btn btn-sm btn-label-brand btn-bold">Leer más...</a>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Blog-->
										</div>
										<div class="col-xl-4">
											<!--begin:: Widgets/Blog-->
											<div class="kt-portlet kt-portlet--height-fluid kt-widget19">
												<div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
													<div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(./assets/media/blog/blog3.jpg)">
														<h3 class="kt-widget19__title kt-font-light">
															Slack, la nueva herramienta de comunicación
														</h3>
														<div class="kt-widget19__shadow"></div>
														<div class="kt-widget19__labels">
															<a href="./single.php" class="btn btn-label-light-o2 btn-bold btn-sm ">Reciente</a>
														</div>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="kt-widget19__wrapper">
														<div class="kt-widget19__content">
															<div class="kt-widget19__userpic">
																<img src="./assets/media//users/100_12.jpg" alt="">
															</div>
															<div class="kt-widget19__info">
																<a href="./single.php" class="kt-widget19__usertitulo">
																	Erick Escareño
																</a>
																<span class="kt-widget19__time">
																	UX/UI Designer, Google
																</span>
															</div>
															<div class="kt-widget19__stats">
																<span class="kt-widget19__number kt-font-brand">
																	18
																</span>
																<a href="./single.php" class="kt-widget19__comment">
																	Comentarios
																</a>
															</div>
														</div>
														<div class="kt-widget19__text">
															Lorem Ipsum is simply dummy text of the printing and typesetting scrambled a type specimen book text of the dummy text of the printing printing and typesetting industry scrambled dummy text of the printing.
														</div>
													</div>
													<div class="kt-widget19__action">
														<a href="./single.php" class="btn btn-sm btn-label-brand btn-bold">Leer más...</a>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Blog-->
										</div>
										<div class="col-xl-4">
											<!--begin:: Widgets/Blog-->
											<div class="kt-portlet kt-portlet--height-fluid kt-widget19">
												<div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
													<div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(./assets/media/blog/blog4.jpg)">
														<h3 class="kt-widget19__title kt-font-light">
															(CONSEJO) Ver los correos electrónicos nuevos | Modo Conversación
														</h3>
														<div class="kt-widget19__shadow"></div>
														<div class="kt-widget19__labels">
															<a href="./single.php" class="btn btn-label-light-o2 btn-bold btn-sm ">Reciente</a>
														</div>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="kt-widget19__wrapper">
														<div class="kt-widget19__content">
															<div class="kt-widget19__userpic">
																<img src="./assets/media//users/100_12.jpg" alt="">
															</div>
															<div class="kt-widget19__info">
																<a href="./single.php" class="kt-widget19__usertitulo">
																	Erick Escareño
																</a>
																<span class="kt-widget19__time">
																	UX/UI Designer, Google
																</span>
															</div>
															<div class="kt-widget19__stats">
																<span class="kt-widget19__number kt-font-brand">
																	18
																</span>
																<a href="./single.php" class="kt-widget19__comment">
																	Comentarios
																</a>
															</div>
														</div>
														<div class="kt-widget19__text">
															Lorem Ipsum is simply dummy text of the printing and typesetting scrambled a type specimen book text of the dummy text of the printing printing and typesetting industry scrambled dummy text of the printing.
														</div>
													</div>
													<div class="kt-widget19__action">
														<a href="./single.php" class="btn btn-sm btn-label-brand btn-bold">Leer más...</a>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Blog-->
										</div>
									</div>
								</div>
							</div>
						<!-- end:: Content -->
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