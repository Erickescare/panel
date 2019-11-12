<?php  $PageTitleMaster = '.: Encuesta de Servicio  :.'; $pageTitle = 'TI Soporte'; include('inc/head.php') ?>
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
					alert('Debe seleccionar una calificaci�n');
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
					<?php include('inc/header.php') ?>
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