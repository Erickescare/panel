<?php $PageTitleMaster = 'Recursos Humanos'; $pageTitle = 'Eventos'; include('inc/head.php') ?>
<style type="text/css">
	.borderevetos{
	    border-bottom-style: inset;
	    margin-top: 15px;
	    padding-top: 5px;
	    padding-bottom: 20px;
	    text-align: justify;
	    align-content: center;
	    vertical-align: middle;
	}
</style>
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
										<h3 class="kt-subheader__title"><?php echo $pageTitle; ?></h3>
										<span class="kt-subheader__separator kt-subheader__separator--v"></span>
										<span class="kt-subheader__desc">Eventos Crecer Creciendo</span>
										<!-- <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10">
											Más
										</a> -->
									</div>
								</div>
								<!-- end:: Content Head -->
								<!-- begin:: Content -->
								<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
									<div class="row">
										<div class="col-lg-12">
											<!--begin::Portlet-->
											<div class="kt-portlet" id="kt_portlet">
												<div class="kt-portlet__body">
													<div class="row">
													<?php
													    global $text, $maxchar, $end;
													    function substrwords($text, $maxchar, $end='...') {
													        if (strlen($text) > $maxchar || $text == '') {
													            $words = preg_split('/\s/', $text);      
													            $output = '';
													            $i      = 0;
													            while (1) {
													                $length = strlen($output)+strlen($words[$i]);
													                if ($length > $maxchar) {
													                    break;
													                } else {
													                    $output .= " " . $words[$i];
													                    ++$i;
													                }
													            }
													            $output .= $end;
													        } else {
													            $output = $text;
													        }
													        return $output;
													    }

													    $rss = new DOMDocument();
													    $rss->load('http://localhost/cursos/eventos/feed/'); // <-- Change feed to your site
													    $feed = array();
													    foreach ($rss->getElementsByTagName('item') as $node) {
													        $item = array ( 
													            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
													            'description' => $node->getElementsByTagName('description')->item(0)->nodeValue,
													            'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
													            'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
													            'date2' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
													        );
													        array_push($feed, $item);
													    }

													    $limit = 2; // <-- Change the number of posts shown
													    for ($x=0; $x<$limit; $x++) {
													    	setlocale(LC_ALL,"es_MX");
													        $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
													        $link = $feed[$x]['link'];
													        $description = $feed[$x]['description'];
													        $description = substrwords($description, 250);
													        $date = strftime('%A %d', strtotime($feed[$x]['date']));
													        $date2 = strftime('%B, %Y', strtotime($feed[$x]['date']));
													        echo '<div class="col-lg-12">
																	<div class="kt-portlet">
																		<div class="kt-portlet__head kt-portlet__head--right kt-portlet__head--noborder  kt-ribbon kt-ribbon--clip kt-ribbon--left kt-ribbon--info">
																			<div class="kt-ribbon__target" style="top: 12px;">
																				<span class="kt-ribbon__inner"></span><span class="fec-gr">'. $date .'<br>'. $date2 .'
																			</div>
																			<hr>
																			<div class="kt-portlet__head-label" style="align-self: center;">
																				<h3 class="kt-portlet__head-title">
																					<br>'. $title .'
																				</h3>
																			</div>
																		</div>
																		<div class="kt-portlet__body kt-portlet__body--fit-top">
																			<br>'. $description .'
																		</div>
																		<div class="kt-callout__action">
																			<a href="'. $link .'" class="btn btn-custom btn-bold btn-upper btn-font-sm btn-brand" style="margin-left: 20px;margin-bottom: 20px;">Acerca del Evento</a><button type="button" class="btn btn-custom btn-bold btn-upper btn-font-sm btn-brand" style="margin-left: 20px;margin-bottom: 20px;" data-toggle="modal" data-target="#kt_modal_6">Registro Rapido</button>
																		</div>
																	</div>
																</div>
																<hr>';
														    }
														?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
									<!-- Modal -->
									<div class="modal fade" id="kt_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<form action="registro-eventos.php" method="POST">
													  <h2><em>Formulario de Registro</em></h2>  
													     
													      <label for="nombre">Nombre <span><em>(requerido)</em></span></label>
													      <input type="text" name="name" class="form-input" required/>   
													      <br>
													      <label for="apellido">Apellido <span><em>(requerido)</em></span></label>
													      <input type="text" name="apellidos" class="form-input" required/>         
													      <br>
													      <label for="email">Email <span><em>(requerido)</em></span></label>
													      <input type="email" name="email" class="form-input" />
													      <label for="email">Evento <span><em>(requerido)</em></span></label>
													      <input type="email" name="email" class="form-input" />
													     <center> <input class="form-btn" name="submit" type="submit" value="Suscribirse" /></center>
													    </p>
												  	</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
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
	<!--begin::Page Vendors(used by this page) -->
	<script src="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

	<!--end::Page Vendors -->

	<!--begin::Page Scripts(used by this page) -->
	<script src="./assets/js/pages/components/calendar/list-view.js" type="text/javascript"></script>
	</body>
	<!-- end::Body -->
</html>