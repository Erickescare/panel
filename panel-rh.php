<?php include "admin/db.php"; $images = get_imgs(); $PageTitleMaster = 'Recursos Humanos'; $pageTitle = 'Recursos Humanos';  include('inc/head.php') ?>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
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
										<h3 class="kt-subheader__title"><?php echo "$pageTitle"; ?></h3>
										<span class="kt-subheader__separator kt-subheader__separator--v"></span>
										<span class="kt-subheader__desc">Principal</span>
										<!-- <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10">
											Más
										</a> -->
									</div>
								</div>
								<!-- end:: Content Head -->
									<!-- begin:: Content -->
								<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-12">
											<div class="kt-portlet kt-portlet--height-fluid">
												<?php if(count($images)>0):?>
												<!-- aqui insertaremos el slider -->
												<div id="carousel1" class="carousel slide" data-ride="carousel">
												  <!-- Indicatodores -->
												  <ol class="carousel-indicators">
													<?php $cnt=0; foreach($images as $img):?>
												    <li data-target="#carousel1" data-slide-to="0" class="<?php if($cnt==0){ echo 'active'; }?>"></li>
													<?php $cnt++; endforeach; ?>
												  </ol>

												  <!-- Contenedor de las imagenes -->
												  <div class="carousel-inner" role="listbox">
													<?php $cnt=0; foreach($images as $img):?>
												    <div class="item <?php if($cnt==0){ echo 'active'; }?>">
												      <img src="<?php echo 'admin/'.$img->folder.$img->src; ?>" alt="Imagen 1">
												      <div class="carousel-caption"><?php echo $img->title; ?></div>
												    </div>
													<?php $cnt++; endforeach; ?>
												  </div>

												  <!-- Controls -->
												  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
												    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
												    <span class="sr-only">Anterior</span>
												  </a>
												  <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
												    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
												    <span class="sr-only">Siguiente</span>
												  </a>

												</div>
												<?php else:?>
											  	<h4 class="alert alert-warning">No hay imagenes</h4>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<!--End::Section-->

									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-4">
											<!--begin:: Widgets/Blog-->
											<div class="kt-portlet kt-portlet--height-fluid kt-widget19">
												<div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
													<div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(./assets/media/products/product6.jpg)">
														<h3 class="kt-widget19__title kt-font-light">
															Filosofía y Valores
														</h3>
														<div class="kt-widget19__shadow"></div>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="kt-widget19__wrapper">
														<div class="kt-widget19__text">
															Cumplimiento eficaz de los proyectos que generen valor para los accionistas ejecutándolos con Seguridad, en Tiempo, Calidad y Competitividad. Ofreciendo soluciones anticipadas, integrales y de innovación tecnológica a nuestros clientes a través de un equipo Competente, enfocado y motivado. Dar soluciones de impacto y valor agregado para el sector energía.
														</div>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Blog-->
										</div>
										<div class="col-xl-4">
											<!--begin:: Widgets/Blog-->
											<div class="kt-portlet kt-portlet--height-fluid kt-widget19">
												<div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
													<div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(./assets/media/products/product13.jpg)">
														<h3 class="kt-widget19__title kt-font-light">
															Ética
														</h3>
														<div class="kt-widget19__shadow"></div>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="kt-widget19__wrapper">
														<div class="kt-widget19__text">
															Transformar nuestros negocios a generar una alta rentabilidad mediante el fortalecimiento de nuestro capital humano para promover la innovación en nuestra organización.
														</div>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Blog-->
										</div>
										<div class="col-xl-4">
											<!--begin:: Widgets/Announcements 1-->
											<div class="kt-portlet kt-bg-brand kt-portlet--skin-solid kt-portlet--height-fluid">
												<div class="kt-portlet__head kt-portlet__head--noborder">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Anuncios
														</h3>
													</div>
												</div>
												<div class="kt-portlet__body">
													<!--begin::Widget 7-->
													<div class="kt-widget7 kt-widget7--skin-light">
														<div class="kt-widget7__desc">
															Ultimas Noticias, se casa y no es por amor, hay en su mirada, dolor y resignación, Al oírlo yo sentí, que mi vida terminaba, el deseo de morir, se metió dentro de mi alma, que lastima me digo yooo
														</div>
														<div class="kt-widget7__content">
															<div class="kt-widget7__userpic">
																<img src="./assets/media//users/100_4.jpg" alt="">
															</div>
															<div class="kt-widget7__info">
																<h3 class="kt-widget7__username">
																	El Poder del Norte
																</h3>
																<span class="kt-widget7__time">
																	6 hours ago
																</span>
															</div>
														</div>
														<div class="kt-widget7__button">
															<a class="btn btn-success" href="#" role="button">Ver todos</a>
														</div>
													</div>
													<!--end::Widget 7-->
												</div>
											</div>
											<!--end:: Widgets/Announcements 1-->
										</div>
									</div>
									<!--End::Section-->
									<div class="row">
										<?php
										$uri = 'http://localhost/cursos/wp-json/wp/v2/posts?categories=105';
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
															<div class="kt-widget19__labels">
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
								<!--End::Section-->
							</div>
						<!-- end:: Content -->
						</div>
					</div>
				</div>
				<?php include('inc/footer.php') ?>
			</div>
		</div>
	</div>
	<!-- end:: Page -->
	<?php include('inc/quick-panel.php') ?>
	<!-- begin::Scrolltop -->
	<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
	</div>
	<!-- end::Scrolltop -->
	<!--begin:: Global Mandatory Vendors -->
	<?php include('inc/mansoryjs.php') ?>
	<!--end:: Global Mandatory Vendors -->
	<?php include('inc/global-js.php') ?>
	<!--begin::Global Theme Bundle(used by all pages) -->
	<script src="./assets/js/scripts.bundle.js" type="text/javascript"></script>
	<!--end::Global Theme Bundle -->
	<!--begin::Page Vendors(used by this page) -->
	<script src="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
	<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
	<script src="./assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>
	<!--end::Page Vendors -->
	<!--begin::Page Scripts(used by this page) -->
	<script src="./assets/js/pages/dashboard.js" type="text/javascript"></script>
	<!--end::Page Scripts -->
</body>
<!-- end::Body -->
</html>