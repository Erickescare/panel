<?php include "admin/db.php"; $images = get_imgs(); $PageTitleMaster = 'Recursos Humanos'; $pageTitle = 'Recursos Humanos';  include('inc/head.php') ?>
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

											<!--begin:: Widgets/Applications/User/Profile3-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__body">
													<div class="kt-widget kt-widget--user-profile-3">
														<div class="kt-widget__top">
															<div class="kt-widget__media kt-hidden-">
																<img src="./assets/media/users/100_1.jpg" alt="image">
															</div>
															<div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
																EE
															</div>
															<div class="kt-widget__content">
																<div class="kt-widget__head">
																	<a href="#" class="kt-widget__username">
																		Erick Daniel Escareño López
																		<i class="flaticon2-correct"></i>
																	</a>
																	<div class="kt-widget__action">
																		<button type="button" class="btn btn-label-success btn-sm btn-upper">DM</button>&nbsp;
																		<button type="button" class="btn btn-brand btn-sm btn-upper">Informar</button>
																	</div>
																</div>
																<div class="kt-widget__subhead">
																	<a href="#"><i class="flaticon2-new-email"></i>erick.escareno@protexa.com.mx</a>
																	<a href="#"><i class="flaticon2-calendar-3"></i>Diseño Web </a>
																	<a href="#"><i class="flaticon2-placeholder"></i>Monterrey </a>
																</div>
																<div class="kt-widget__info">
																	<div class="kt-widget__desc">
																		I distinguish three main text objektive could be merely to inform people.
																		<br> A second could be persuade people.You want people to bay objective
																	</div>
																	<div class="kt-widget__progress">
																		<div class="kt-widget__text">
																			Progreso
																		</div>
																		<div class="progress" style="height: 5px;width: 100%;">
																			<div class="progress-bar kt-bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																		<div class="kt-widget__stats">
																			78%
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-widget__bottom">
															<div class="kt-widget__item">
																<div class="kt-widget__icon">
																	<i class="flaticon-confetti"></i>
																</div>
																<div class="kt-widget__details">
																	<span class="kt-widget__title">18 Servicios</span>
																	<a href="#" class="kt-widget__value kt-font-brand">Ver</a>
																</div>
															</div>
															<div class="kt-widget__item">
																<div class="kt-widget__icon">
																	<i class="flaticon-file-2"></i>
																</div>
																<div class="kt-widget__details">
																	<span class="kt-widget__title">73 Tareas</span>
																	<a href="#" class="kt-widget__value kt-font-brand">Ver</a>
																</div>
															</div>
															<div class="kt-widget__item">
																<div class="kt-widget__icon">
																	<i class="flaticon-pie-chart"></i>
																</div>
																<div class="kt-widget__details">
																	<span class="kt-widget__title">Crecer Creciendo</span>
																	<span class="kt-widget__value">80<span>%</span></span>
																</div>
															</div>
															<div class="kt-widget__item">
																<div class="kt-widget__icon">
																	<i class="flaticon-presentation-1"></i>
																</div>
																<div class="kt-widget__details">
																	<span class="kt-widget__title">Cursos</span>
																	<a href="#" class="kt-widget__value kt-font-brand">Ver Cursos</a>
																</div>
															</div>
															<div class="kt-widget__item">
																<div class="kt-widget__icon">
																	<i class="flaticon-event-calendar-symbol"></i>
																</div>
																<div class="kt-widget__details">
																	<span class="kt-widget__title">Calendario</span>
																	<a href="#" class="kt-widget__value kt-font-brand">Mis eventos</a>
																</div>
															</div>
															<div class="kt-widget__item">
																<div class="kt-widget__icon">
																	<i class="flaticon-network"></i>
																</div>
																<div class="kt-widget__details">
																	<div class="kt-section__content kt-section__content--solid">
																		<div class="kt-badge kt-badge__pics">
																			<a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
																				<img src="./assets/media/users/100_7.jpg" alt="image">
																			</a>
																			<a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
																				<img src="./assets/media/users/100_3.jpg" alt="image">
																			</a>
																			<a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
																				<img src="./assets/media/users/100_2.jpg" alt="image">
																			</a>
																			<a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Luke Walls">
																				<img src="./assets/media/users/100_13.jpg" alt="image">
																			</a>
																			<a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
																				<img src="./assets/media/users/100_4.jpg" alt="image">
																			</a>
																			<a href="#" class="kt-badge__pic kt-badge__pic--last kt-font-brand">
																				+7
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Applications/User/Profile3-->
										</div>
									</div>

									<!--End::Section-->

									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-4">

											<!--begin:: Widgets/Blog-->
											<div class="kt-portlet kt-portlet--height-fluid kt-widget19">
												<div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
													<div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(./assets/media//products/product6.jpg)">
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
													<div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(./assets/media//products/product13.jpg)">
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