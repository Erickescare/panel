<?php $PageTitleMaster = 'Recursos Humanos'; $pageTitle = 'Noticias Crecer Creciendo'; include('inc/head.php') ?>		
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
										<h3 class="kt-subheader__title"><?php echo $pageTitle; ?></h3>
										<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									</div>
								</div>																
								<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
									<div class="row">
										<?php
										$uri = 'http://localhost/cursos/wp-json/wp/v2/posts';
										$json = file_get_contents($uri);
										$posts= json_decode($json);
										foreach ($posts as $post) {
										echo '<div class="col-xl-4">
												<div class="kt-portlet kt-portlet--height-fluid kt-widget19">
													<div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
														<div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url('. $post->better_featured_image->source_url .')">
															<h3 class="kt-widget19__title kt-font-light">
																<strong><a href="'. $post->link .'" target="_blank" title="'. $post->title->rendered .'">'. $post->title->rendered .'</a></strong>
															</h3>
															<div class="kt-widget19__shadow"></div>
															<div style="display:none;" class="kt-widget19__labels">
																<a href="'. $post->link .'" class="btn btn-label-light-o2 btn-bold btn-sm ">'.$post->type.'</a>
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
																		<strong><a href="'. $post->link .'" target="_blank" title="'. $post->title->rendered .'">'. $post->title->rendered .'</a></strong>
																	</h3>
																	<span class="kt-widget19__time">
																		<small><em>Publicado en '.$post->date.'</em></small>
																	</span>
																</div>
															</div>
															<div class="kt-widget19__text">
																'.$post->excerpt->rendered.'
															</div>
														</div>
														<div class="kt-widget19__action">
															<a href="'. $post->link .'" target="_blank" class="btn btn-sm btn-label-brand btn-bold">Ver Nota</a>
														</div>
													</div>
												</div>
											</div>';
										 }
										?>
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