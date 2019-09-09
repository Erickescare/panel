<?php $PageTitleMaster = 'Recursos Humanos'; $pageTitle = 'Aplicar a un Puesto'; include('inc/head.php') ?>
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
										<span class="kt-subheader__desc">Vacantes Recientes</span>
										<!-- <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10">
											Más
										</a> -->
									</div>
								</div>
								<!-- end:: Content Head -->
								<!-- begin:: Content -->
								<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
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
									    $rss->load('http://localhost/trabajos/?feed=job_feed'); // <-- Change feed to your site
									    $feed = array();
									    foreach ($rss->getElementsByTagName('item') as $node) {
									        $item = array ( 
									            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
									            'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
									            'type' => $node->getElementsByTagName('type')->item(0)->nodeValue,
									            'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
									            'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
									        );
									        array_push($feed, $item);
									    }

									    $limit = 4; // <-- Change the number of posts shown
									    for ($x=0; $x<$limit; $x++) {
									        $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
									        $link = $feed[$x]['link'];
									        $type = $feed[$x]['type'];
									        $description = $feed[$x]['desc'];
									        $description = substrwords($description, 150);
									        $date = date('l F d, Y', strtotime($feed[$x]['date']));
									        echo '<div class="col-xl-4">
													<div class="kt-portlet kt-portlet--height-fluid kt-widget19">
														<div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
															<div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(http://localhost/trabajos/wp-content/uploads/2019/06/page-title-background.jpg)">
																<h3 class="kt-widget19__title kt-font-light">
																	<strong><a href="'.$link.'" target="_blank" title="'.$title.'">'.$title.'</a></strong>
																</h3>
																<div class="kt-widget19__shadow"></div>
																<div class="kt-widget19__labels">
																	<a href="'.$link.'" class="btn btn-label-light-o2 btn-bold btn-sm ">'.$type.'</a>
																</div>
															</div>
														</div>
														<div class="kt-portlet__body">
															<div class="kt-widget19__wrapper">
																<div class="kt-widget19__content">
																	<div class="kt-widget19__userpic">
																		<img src="http://localhost/trabajos/wp-content/uploads/2019/06/ico72-60x60.png" alt="">
																	</div>
																	<div class="kt-widget19__info">
																		<h3 class="kt-widget19__title kt-font-light">
																			<strong><a href="'.$link.'" target="_blank" title="'.$title.'">'.$title.'</a></strong>
																		</h3>
																		<span class="kt-widget19__time">
																			<small><em>Publicado en '.$date.'</em></small>
																		</span>
																	</div>
																</div>
																<div class="kt-widget19__text">
																	'.$description.'
																</div>
															</div>
															<div class="kt-widget19__action">
																<a href="'.$link.'" target="_blank" class="btn btn-sm btn-label-brand btn-bold">Aplicar</a>
															</div>
														</div>
													</div>
												  </div>';
							    		    }
									?>
									</div>
									<div class="row">
										<div class="col-xl-4"></div><div class="col-xl-4"><center><a href="http://localhost/trabajos/vacantes/" target="_blank"><span class="btn btn-primary btn-wide">Ver todas las Vacantes</span></a></center></div><div class="col-xl-4"></div>
									</div>
								<!-- end:: Content -->
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