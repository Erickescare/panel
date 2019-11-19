<!DOCTYPE html>
<html lang="mx">
	<head>
		<base href="./">
		<meta charset="UTF-8">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

		<title>Encuesta de Servicio | Panel Protexa</title>
		<meta name="description" content="Panel Protexa">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="google-signin-client_id" content="610188305605-pi5hc2lvbpg843c4tfk0iitjk64ldqtb.apps.googleusercontent.com">
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>
		<link href="./assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css">
		<link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
		<link href="./assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="./assets/css/pages/general/login/login-1.css" rel="stylesheet" type="text/css" />
		<link rel="icon" type="image/png" href="./assets/media/protexa/ico72.png" />
		<style>
		.disabled{
		    pointer-events:none;
		    opacity:0.7;
		}
		</style>

		<?php 
		$activePage = basename($_SERVER['PHP_SELF'], ".php");
		//$pagina_anterior = basename($_SERVER['HTTP_REFERER']);
		?>
	</head>
<style>
	/****************** Estilos Especiales Sección *****************************/
	.kt-header__bottom{
		display: none !important;
	}
</style>
	<!-- end::Head -->
	<!-- begin::Body -->
	<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
	<script type="text/javascript">
	function validateRadio (radios)
	{
			for (i = 0; i < radios.length; ++ i)
			{
					if (radios [i].checked) return true;
			}
			return false;
	}

	function validar()
	{
			if(validateRadio (document.forms["form1"]["serv_califica"]))
			{
					return true;
			}
			else
			{
					alert('Debe seleccionar una calificación');
					return false;
			}
	}
	</script>
		
	<script type="text/javascript">
	<!--
	function MM_reloadPage(init) {  //reloads the window if Nav4 resized
		if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
			document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
		else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
	}
	MM_reloadPage(true);
	//-->
	</script>
	<!-- <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script> -->
	<body class="kt-page--loading-enabled kt-page--loading kt-page--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">
		<!-- begin:: Page -->
		<!-- begin:: Header Mobile -->
		<?php include('inc/header-mobile.php') ?>
		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">
					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
						<div class="kt-header__top">
							<div class="kt-container">
								<!-- begin:: Brand -->
								<div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
									<div class="kt-header__brand-logo">
										<a href="./index.php">
											<img alt="Logo" src="./assets/media/protexa/LogoFB.png" width="125px" class="kt-header__brand-logo-default" />
											<img alt="Logo" src="./assets/media/protexa/ico72.png" width="45px" class="kt-header__brand-logo-sticky" />
										</a>
									</div>
									<div class="kt-header__brand-nav">
										<div class="dropdown">
											<h3 class="kt-font-warning">.: Encuesta de Servicio :.</h3>
										</div>
									</div>
								</div>
								<!-- end:: Brand -->
								<!-- begin:: Header Topbar -->
								<!-- end:: Header Topbar -->
							</div>
						</div>
					</div>
					<!-- end:: Header -->
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
						<div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
							<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
								<br>
								<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Servicio 120027
												</h3>
											</div>
										</div>
										<!--begin::Form-->
										<form class="kt-form kt-form--label-right" id="kt_form_1" novalidate="novalidate">
											<div class="kt-portlet__body">
												<div class="form-group row">
													<label class="col-form-label col-lg-3 col-sm-12">Descripción</label>
													<div class="col-lg-7 col-md-9 col-sm-12">
														<textarea class="form-control" disabled="disabled" rows="5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</textarea>
														
													</div>
												</div>
												<div class="form-group row">
													<label class="col-form-label col-lg-3 col-sm-12">Como calificar&iacute;a el servicio recibido *</label>
													<div class="col-lg-9 col-md-9 col-sm-12">
														<div class="kt-radio-inline">
															<label class="kt-radio">
																<input type="radio" value="1" name="serv_califica"> 1
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" value="2" name="serv_califica"> 2 
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" value="3" name="serv_califica"> 3
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" value="4" name="serv_califica"> 4
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" value="5" name="serv_califica"> 5
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" value="6" name="serv_califica"> 6
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" value="7" name="serv_califica"> 7
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" value="8" name="serv_califica"> 8
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" value="9" name="serv_califica"> 9
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" value="10" name="serv_califica"> 10
																<span></span>
															</label>
														</div>
														<span class="form-text text-muted">Porfavor marque una casilla</span>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-form-label col-lg-3 col-sm-12">Comentarios</label>
													<div class="col-lg-7 col-md-9 col-sm-12">
														<textarea name="markdown" class="form-control" data-provide="markdown" rows="10"></textarea>
														<span class="form-text text-muted">Ingrese comentarios acerca de:</span>
													</div>
												</div>
											</div>
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<div class="row">
														<div class="col-lg-9 ml-lg-auto">
															<button type="submit" class="btn btn-brand">Enviar</button>
															<button type="reset" class="btn btn-secondary">Cancelar</button>
														</div>
													</div>
												</div>
											</div>
										</form>
										<!--end::Form-->
									</div>
									<br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- begin:: Footer -->
	<!-- begin:: Footer -->
	<div class="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer">
		<div class="kt-footer__bottom">
			<div class="kt-container">
				<div class="kt-footer__wrapper">
					<div class="kt-footer__logo">
						<a href="./index.php">
							<img alt="Logo" src="./assets/media/protexa/ico57.png">
						</a>
						<div class="kt-footer__copyright">
							2019&nbsp;&copy;&nbsp;
							<a style="color: #ffb822;" href="#">Grupo Protexa</a>
						</div>

					</div>
					<div class="kt-footer__menu">
						<a href="https://protexa.com.mx">Sitio Protexa</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end:: Footer -->
	<!-- end:: Footer -->     
	</div>
	<!-- end:: Page -->
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