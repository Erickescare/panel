<?php $pageTitle = 'Inicio';  include('inc/head.php') ?>
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
										<h3 class="kt-subheader__title">Dashboard</h3>
										<span class="kt-subheader__separator kt-subheader__separator--v"></span>
										<span class="kt-subheader__desc">#GPX-0001</span>
										<a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10">
											Add New
										</a>
									</div>
									<div class="kt-subheader__toolbar">
										<div class="kt-subheader__wrapper">
											<a href="javascript:void(0);" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="Seleccione el rango de fechas" data-placement="left">
												<span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
												<span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">Aug 16</span>
												<i class="flaticon2-calendar-1"></i>
											</a>
											<a href="#" class="btn kt-subheader__btn-primary btn-icon">
												<i class="flaticon2-file"></i>
											</a>
											<a href="#" class="btn kt-subheader__btn-primary btn-icon">
												<i class="flaticon-download-1"></i>
											</a>
											<a href="#" class="btn kt-subheader__btn-primary btn-icon">
												<i class="flaticon2-fax"></i>
											</a>
											<a href="#" class="btn kt-subheader__btn-primary btn-icon">
												<i class="flaticon2-settings"></i>
											</a>
											<div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="left">
												<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
															<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" id="Combined-Shape" fill="#000000" />
														</g>
													</svg>
													<!--<i class="flaticon2-plus"></i>-->
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
															Opciones de exportación:
															<i class="flaticon2-correct kt-font-warning" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Pedidos</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Miembros</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--brand kt-badge--rounded">15</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">Informes</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-link"></i>
																<span class="kt-nav__link-text">Finanzas</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-brand btn-bold btn-sm" href="#">More options</a>
															<a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>
													<!--end::Nav-->
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- end:: Content Head -->
								<!-- begin:: Content -->
								<div class="kt-content kt-grid__item kt-grid__item--fluid">
									<!--Begin::Dashboard 2-->
									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-4">
											<!--begin:: Widgets/Daily Sales-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-widget14">
													<div class="kt-widget14__header kt-margin-b-30">
														<h3 class="kt-widget14__title">
															Ventas diarias
														</h3>
														<span class="kt-widget14__desc">
															Echa un vistazo a cada columna para más detalles
														</span>
													</div>
													<div class="kt-widget14__chart" style="height:120px;">
														<canvas id="kt_chart_daily_sales"></canvas>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Daily Sales-->
										</div>
										<div class="col-xl-4">
											<!--begin:: Widgets/Profit Share-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-widget14">
													<div class="kt-widget14__header">
														<h3 class="kt-widget14__title">
															División de ganancias
														</h3>
														<span class="kt-widget14__desc">
															Reparto de beneficios entre clientes
														</span>
													</div>
													<div class="kt-widget14__content">
														<div class="kt-widget14__chart">
															<div class="kt-widget14__stat">45</div>
															<canvas id="kt_chart_profit_share" style="height: 140px; width: 140px;"></canvas>
														</div>
														<div class="kt-widget14__legends">
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-success"></span>
																<span class="kt-widget14__stats">37% Entradas Deportivas</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-warning"></span>
																<span class="kt-widget14__stats">47% de eventos empresariales</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-brand"></span>
																<span class="kt-widget14__stats">19% otros</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Profit Share-->
										</div>
										<div class="col-xl-4">
											<!--begin:: Widgets/Revenue Change-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-widget14">
													<div class="kt-widget14__header">
														<h3 class="kt-widget14__title">
															Cambio de Ingresos
														</h3>
														<span class="kt-widget14__desc">
															Desglose del cambio de ingresos por ciudades
														</span>
													</div>
													<div class="kt-widget14__content">
														<div class="kt-widget14__chart">
															<div id="kt_chart_revenue_change" style="height: 150px; width: 150px;"></div>
														</div>
														<div class="kt-widget14__legends">
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-success"></span>
																<span class="kt-widget14__stats">+ 10% Nueva York</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-warning"></span>
																<span class="kt-widget14__stats">-7% Londres</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-brand"></span>
																<span class="kt-widget14__stats">+ 20% California</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Revenue Change-->
										</div>
									</div>
									<!--End::Section-->
									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-8">
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
												<div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Exclusivo complemento de datos
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<div class="dropdown dropdown-inline">
															<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="flaticon-more-1"></i>
															</button>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-md dropdown-menu-fit">
																<!--begin::Nav-->
																<ul class="kt-nav">
																	<li class="kt-nav__head">
																		Opciones de exportación
																		<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
																	</li>
																	<li class="kt-nav__separator"></li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-drop"></i>
																			<span class="kt-nav__link-text">Actividad</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																			<span class="kt-nav__link-text">Preguntas frecuentes</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-link"></i>
																			<span class="kt-nav__link-text">Ajustes</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-new-email"></i>
																			<span class="kt-nav__link-text">Apoyo</span>
																			<span class="kt-nav__link-badge">
																				<span class="kt-badge kt-badge--success">5</span>
																			</span>
																		</a>
																	</li>
																	<li class="kt-nav__separator"></li>
																	<li class="kt-nav__foot">
																		<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
																		<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
																	</li>
																</ul>
																<!--end::Nav-->
															</div>
														</div>
													</div>
												</div>
												<div class="kt-portlet__body kt-portlet__body--fit">
													<!--begin: Datatable -->
													<div class="kt-datatable" id="kt_datatable_latest_orders"></div>
													<!--end: Datatable -->
												</div>
											</div>
										</div>
										<div class="col-xl-4">
											<!--begin:: Widgets/Inbound Bandwidth-->
											<div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid-half">
												<div class="kt-portlet__head kt-portlet__space-x">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Ancho de banda de entrada
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<a href="#" class="btn btn-label-success btn-sm btn-bold dropdown-toggle" data-toggle="dropdown">
															Export
														</a>
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																		<span class="kt-nav__link-text">Informes</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-send"></i>
																		<span class="kt-nav__link-text">Mensajes</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																		<span class="kt-nav__link-text">Gráficos</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-avatar"></i>
																		<span class="kt-nav__link-text">Miembros</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-settings"></i>
																		<span class="kt-nav__link-text">Ajustes</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget20">
														<div class="kt-widget20__content kt-portlet__space-x">
															<span class="kt-widget20__number kt-font-brand">670+</span>
															<span class="kt-widget20__desc">Successful transactions</span>
														</div>
														<div class="kt-widget20__chart" style="height:130px;">
															<canvas id="kt_chart_bandwidth1"></canvas>
														</div>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Inbound Bandwidth-->
											<div class="kt-space-20"></div>
											<!--begin:: Widgets/Outbound Bandwidth-->
											<div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid-half">
												<div class="kt-portlet__head kt-portlet__space-x">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Ancho de banda de salida
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<a href="#" class="btn btn-label-warning btn-sm  btn-bold dropdown-toggle" data-toggle="dropdown">
															Download
														</a>
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																		<span class="kt-nav__link-text">Informes</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-send"></i>
																		<span class="kt-nav__link-text">Mensajes</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																		<span class="kt-nav__link-text">Gráficos</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-avatar"></i>
																		<span class="kt-nav__link-text">Miembros</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-settings"></i>
																		<span class="kt-nav__link-text">Ajustes</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget20">
														<div class="kt-widget20__content kt-portlet__space-x">
															<span class="kt-widget20__number kt-font-danger">1340+</span>
															<span class="kt-widget20__desc">Completed orders</span>
														</div>
														<div class="kt-widget20__chart" style="height:130px;">
															<canvas id="kt_chart_bandwidth2"></canvas>
														</div>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Outbound Bandwidth-->
										</div>
									</div>
									<!--End::Section-->
									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-4">
											<!--begin:: Widgets/Download Files-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Descargar archivos
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
															Latest
														</a>
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
															<!--begin::Nav-->
															<ul class="kt-nav">
																<li class="kt-nav__head">
																	Opciones de exportación
																	<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="kt-nav__separator"></li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-drop"></i>
																		<span class="kt-nav__link-text">Actividad</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																		<span class="kt-nav__link-text">Preguntas frecuentes</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-link"></i>
																		<span class="kt-nav__link-text">Ajustes</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-new-email"></i>
																		<span class="kt-nav__link-text">Apoyo</span>
																		<span class="kt-nav__link-badge">
																			<span class="kt-badge kt-badge--success">5</span>
																		</span>
																	</a>
																</li>
																<li class="kt-nav__separator"></li>
																<li class="kt-nav__foot">
																	<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
																	<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
																</li>
															</ul>
															<!--end::Nav-->
														</div>
													</div>
												</div>
												<div class="kt-portlet__body">
													<!--begin::k-widget4-->
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--icon">
																<img src="./assets/media/files/doc.svg" alt="">
															</div>
															<a href="#" class="kt-widget4__title">
																Metronic Documentation
															</a>
															<div class="kt-widget4__tools">
																<a href="#" class="btn btn-clean btn-icon btn-sm">
																	<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
																</a>
															</div>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--icon">
																<img src="./assets/media/files/jpg.svg" alt="">
															</div>
															<a href="#" class="kt-widget4__title">
																Project Launch Event
															</a>
															<div class="kt-widget4__tools">
																<a href="#" class="btn btn-clean btn-icon btn-sm">
																	<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
																</a>
															</div>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--icon">
																<img src="./assets/media/files/pdf.svg" alt="">
															</div>
															<a href="#" class="kt-widget4__title">
																Full Developer Manual For 4.7
															</a>
															<div class="kt-widget4__tools">
																<a href="#" class="btn btn-clean btn-icon btn-sm">
																	<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
																</a>
															</div>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--icon">
																<img src="./assets/media/files/javascript.svg" alt="">
															</div>
															<a href="#" class="kt-widget4__title">
																Make JS Great Again
															</a>
															<div class="kt-widget4__tools">
																<a href="#" class="btn btn-clean btn-icon btn-sm">
																	<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
																</a>
															</div>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--icon">
																<img src="./assets/media/files/zip.svg" alt="">
															</div>
															<a href="#" class="kt-widget4__title">
																Download Ziped version OF 5.0
															</a>
															<div class="kt-widget4__tools">
																<a href="#" class="btn btn-clean btn-icon btn-sm">
																	<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
																</a>
															</div>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--icon">
																<img src="./assets/media/files/pdf.svg" alt="">
															</div>
															<a href="#" class="kt-widget4__title">
																Finance Report 2016/2017
															</a>
															<div class="kt-widget4__tools">
																<a href="#" class="btn btn-clean btn-icon btn-sm">
																	<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
																</a>
															</div>
														</div>
													</div>
													<!--end::Widget 9-->
												</div>
											</div>
											<!--end:: Widgets/Download Files-->
										</div>
										<div class="col-xl-4">
											<!--begin:: Widgets/New Users-->
											<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Usuarios nuevos
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content" role="tab">
																	Hoy
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content" role="tab">
																	Mes
																</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="tab-content">
														<div class="tab-pane active" id="kt_widget4_tab1_content">
															<div class="kt-widget4">
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="./assets/media/users/100_4.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Anna Strong
																		</a>
																		<p class="kt-widget4__text">
																			Visual Designer,Google Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-brand btn-bold">Follow</a>
																</div>
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="./assets/media/users/100_14.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Milano Esco
																		</a>
																		<p class="kt-widget4__text">
																			Product Designer, Apple Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-warning btn-bold">Follow</a>
																</div>
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="./assets/media/users/100_11.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Nick Bold
																		</a>
																		<p class="kt-widget4__text">
																			Web Developer, Facebook Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-danger btn-bold">Follow</a>
																</div>
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="./assets/media/users/100_1.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Wiltor Delton
																		</a>
																		<p class="kt-widget4__text">
																			Project Manager, Amazon Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-success btn-bold">Follow</a>
																</div>
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="./assets/media/users/100_5.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Nick Stone
																		</a>
																		<p class="kt-widget4__text">
																			Visual Designer, Github Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-primary btn-bold">Follow</a>
																</div>
															</div>
														</div>
														<div class="tab-pane" id="kt_widget4_tab2_content">
															<div class="kt-widget4">
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="./assets/media/users/100_2.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Kristika Bold
																		</a>
																		<p class="kt-widget4__text">
																			Product Designer,Apple Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-success">Follow</a>
																</div>
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="./assets/media/users/100_13.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Ron Silk
																		</a>
																		<p class="kt-widget4__text">
																			Release Manager, Loop Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-brand">Follow</a>
																</div>
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="./assets/media/users/100_9.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Nick Bold
																		</a>
																		<p class="kt-widget4__text">
																			Web Developer, Facebook Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-danger">Follow</a>
																</div>
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="./assets/media/users/100_2.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Wiltor Delton
																		</a>
																		<p class="kt-widget4__text">
																			Project Manager, Amazon Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-success">Follow</a>
																</div>
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="./assets/media/users/100_8.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Nick Bold
																		</a>
																		<p class="kt-widget4__text">
																			Web Developer, Facebook Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-info">Follow</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end:: Widgets/New Users-->
										</div>
										<div class="col-xl-4">
											<!--begin:: Widgets/Last Updates-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Últimas actualizaciones
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
															Today
														</a>
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
															<!--begin::Nav-->
															<ul class="kt-nav">
																<li class="kt-nav__head">
																	Opciones de exportación
																	<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="kt-nav__separator"></li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-drop"></i>
																		<span class="kt-nav__link-text">Actividad</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																		<span class="kt-nav__link-text">Preguntas frecuentes</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-link"></i>
																		<span class="kt-nav__link-text">Ajustes</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-new-email"></i>
																		<span class="kt-nav__link-text">Apoyo</span>
																		<span class="kt-nav__link-badge">
																			<span class="kt-badge kt-badge--success">5</span>
																		</span>
																	</a>
																</li>
																<li class="kt-nav__separator"></li>
																<li class="kt-nav__foot">
																	<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
																	<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
																</li>
															</ul>
															<!--end::Nav-->
														</div>
													</div>
												</div>
												<div class="kt-portlet__body">
													<!--begin::widget 12-->
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<span class="kt-widget4__icon">
																<i class="flaticon-pie-chart-1 kt-font-info"></i>
															</span>
															<a href="#" class="kt-widget4__title kt-widget4__title--light">
																Metronic v6 has been arrived!
															</a>
															<span class="kt-widget4__number kt-font-info">+500</span>
														</div>
														<div class="kt-widget4__item">
															<span class="kt-widget4__icon">
																<i class="flaticon-safe-shield-protection  kt-font-success"></i>
															</span>
															<a href="#" class="kt-widget4__title kt-widget4__title--light">
																Metronic community meet-up 2019 in Rome.
															</a>
															<span class="kt-widget4__number kt-font-success">+1260</span>
														</div>
														<div class="kt-widget4__item">
															<span class="kt-widget4__icon">
																<i class="flaticon2-line-chart kt-font-danger"></i>
															</span>
															<a href="#" class="kt-widget4__title kt-widget4__title--light">
																Metronic Angular 7 version will be landing soon...
															</a>
															<span class="kt-widget4__number kt-font-danger">+1080</span>
														</div>
														<div class="kt-widget4__item">
															<span class="kt-widget4__icon">
																<i class="flaticon2-pie-chart-1 kt-font-primary"></i>
															</span>
															<a href="#" class="kt-widget4__title kt-widget4__title--light">
																ale! Purchase Metronic at 70% off for limited time
															</a>
															<span class="kt-widget4__number kt-font-primary">70% Off!</span>
														</div>
														<div class="kt-widget4__item">
															<span class="kt-widget4__icon">
																<i class="flaticon2-rocket kt-font-brand"></i>
															</span>
															<a href="#" class="kt-widget4__title kt-widget4__title--light">
																Metronic VueJS version is in progress. Stay tuned!
															</a>
															<span class="kt-widget4__number kt-font-brand">+134</span>
														</div>
														<div class="kt-widget4__item">
															<span class="kt-widget4__icon">
																<i class="flaticon2-notification kt-font-warning"></i>
															</span>
															<a href="#" class="kt-widget4__title kt-widget4__title--light">
																Black Friday! Purchase Metronic at ever lowest 90% off for limited time
															</a>
															<span class="kt-widget4__number kt-font-warning">70% Off!</span>
														</div>
														<div class="kt-widget4__item">
															<span class="kt-widget4__icon">
																<i class="flaticon2-file kt-font-success"></i>
															</span>
															<a href="#" class="kt-widget4__title kt-widget4__title--light">
																Metronic React version is in progress.
															</a>
															<span class="kt-widget4__number kt-font-success">+13%</span>
														</div>
													</div>
													<!--end::Widget 12-->
												</div>
											</div>
											<!--end:: Widgets/Last Updates-->
										</div>
									</div>
									<!--End::Section-->
									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-8">
											<!--begin:: Widgets/Application Sales-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Ventas de aplicaciones
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab">
																	El mes pasado
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_widget11_tab2_content" role="tab">
																	Todo el tiempo
																</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="tab-content">
														<div class="tab-pane active" id="kt_widget11_tab1_content">
															<!--begin::Widget 11-->
															<div class="kt-widget11">
																<div class="table-responsive">
																	<table class="table">
																		<thead>
																			<tr>
																				<td style=" width: 1%;"></td>
																				<td style=" width: 20%;">Application</td>
																				<td style=" width: 10%;">Sales</td>
																				<td style=" width: 20%;">Change</td>
																				<td style=" width: 10%;">Status</td>
																				<td style=" width: 10%;" class="kt-align-right">Total</td>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td>
																					<label class="kt-checkbox kt-checkbox--single">
																						<input type="checkbox"><span></span>
																					</label>
																				</td>
																				<td>
																					<span class="kt-widget11__title">Vertex 2.0</span>
																					<span class="kt-widget11__sub">Vertex To By Again</span>
																				</td>
																				<td>19,200</td>
																				<td>
																					<div class="kt-widget11__chart" style="height:50px; width: 100px">
																						<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																						<canvas id="kt_chart_sales_by_apps_1_1" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
																					</div>
																				</td>
																				<td><span class="kt-badge kt-badge--danger kt-badge--inline">in process</span></td>
																				<td class="kt-align-right kt-font-brand kt-font-bold">$14,740</td>
																			</tr>
																			<tr>
																				<td>
																					<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																				</td>
																				<td>
																					<span class="kt-widget11__title">Metronic</span>
																					<span class="kt-widget11__sub">Powerful Admin Theme</span>
																				</td>
																				<td>24,310</td>
																				<td>
																					<div class="kt-widget11__chart" style="height:50px; width: 100px">
																						<canvas id="kt_chart_sales_by_apps_1_2" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
																					</div>
																				</td>
																				<td>
																					<span class="kt-badge kt-badge--success kt-badge--inline">pending</span>
																				</td>
																				<td class="kt-align-right kt-font-brand kt-font-bold">$16,010</td>
																			</tr>
																			<tr>
																				<td>
																					<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																				</td>
																				<td>
																					<span class="kt-widget11__title">Apex</span>
																					<span class="kt-widget11__sub">The Best Selling App</span>
																				</td>
																				<td>9,076</td>
																				<td>
																					<div class="kt-widget11__chart" style="height:50px; width: 100px">
																						<canvas id="kt_chart_sales_by_apps_1_3" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
																					</div>
																				</td>
																				<td>
																					<span class="kt-badge kt-badge--brand kt-badge--inline">new</span>
																				</td>
																				<td class="kt-align-right kt-font-brand kt-font-bold">$37,200</td>
																			</tr>
																			<tr>
																				<td>
																					<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																				</td>
																				<td>
																					<span class="kt-widget11__title">Cascades</span>
																					<span class="kt-widget11__sub">Design Tool</span>
																				</td>
																				<td>11,094</td>
																				<td>
																					<div class="kt-widget11__chart" style="height:50px; width: 100px">
																						<canvas id="kt_chart_sales_by_apps_1_4" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
																					</div>
																				</td>
																				<td>
																					<span class="kt-badge kt-badge--warning kt-badge--inline">new</span>
																				</td>
																				<td class="kt-align-right kt-font-brand kt-font-bold">$8,520</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
																<div class="kt-widget11__action kt-align-right">
																	<button type="button" class="btn btn-label-success btn-sm btn-bold">View All Records</button>
																</div>
															</div>
															<!--end::Widget 11-->
														</div>
														<div class="tab-pane" id="kt_widget11_tab2_content">
															<!--begin::Widget 11-->
															<div class="kt-widget11">
																<div class="table-responsive">
																	<table class="table">
																		<thead>
																			<tr>
																				<td style=" width: 1%;"></td>
																				<td style=" width: 20%;">Application</td>
																				<td style=" width: 10%;">Sales</td>
																				<td style=" width: 20%;">Change</td>
																				<td style=" width: 10%;">Status</td>
																				<td style=" width: 10%;" class="kt-align-right">Total</td>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td>
																					<label class="kt-checkbox kt-checkbox--single">
																						<input type="checkbox"><span></span>
																					</label>
																				</td>
																				<td>
																					<span class="kt-widget11__title">Loop</span>
																					<span class="kt-widget11__sub">CRM System</span>
																				</td>
																				<td>19,200</td>
																				<td>
																					<div class="kt-widget11__chart" style="height:50px; width: 100px">
																						<canvas id="kt_chart_sales_by_apps_2_1" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
																					</div>
																				</td>
																				<td><span class="kt-badge kt-badge--danger kt-badge--inline">in process</span></td>
																				<td class="kt-align-right kt-font-brand">$34,740</td>
																			</tr>
																			<tr>
																				<td>
																					<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																				</td>
																				<td>
																					<span class="kt-widget11__title">Selto</span>
																					<span class="kt-widget11__sub">Powerful Website Builder</span>
																				</td>
																				<td>24,310</td>
																				<td>
																					<div class="kt-widget11__chart" style="height:50px; width: 100px">
																						<canvas id="kt_chart_sales_by_apps_2_2" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
																					</div>
																				</td>
																				<td><span class="kt-badge kt-badge--success kt-badge--inline">new</span></td>
																				<td class="kt-align-right kt-font-brand">$46,010</td>
																			</tr>
																			<tr>
																				<td>
																					<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																				</td>
																				<td>
																					<span class="kt-widget11__title">Jippo</span>
																					<span class="kt-widget11__sub">The Best Selling App</span>
																				</td>
																				<td>9,076</td>
																				<td>
																					<div class="kt-widget11__chart" style="height:50px; width: 100px">
																						<canvas id="kt_chart_sales_by_apps_2_3" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
																					</div>
																				</td>
																				<td><span class="kt-badge kt-badge--brand kt-badge--inline">approved</span></td>
																				<td class="kt-align-right kt-font-brand">$67,800</td>
																			</tr>
																			<tr>
																				<td>
																					<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																				</td>
																				<td>
																					<span class="kt-widget11__title">Verto</span>
																					<span class="kt-widget11__sub">Web Development Tool</span>
																				</td>
																				<td>11,094</td>
																				<td>
																					<div class="kt-widget11__chart" style="height:50px; width: 100px">
																						<canvas id="kt_chart_sales_by_apps_2_4" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
																					</div>
																				</td>
																				<td><span class="kt-badge kt-badge--danger kt-badge--inline">pending</span></td>
																				<td class="kt-align-right kt-font-brand">$18,520</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
																<div class="kt-widget11__action kt-align-right">
																	<button type="button" class="btn btn-outline-brand btn-bold">View All Records</button>
																</div>
															</div>
															<!--end::Widget 11-->
														</div>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Application Sales-->
										</div>
										<div class="col-xl-4">
											<!--begin:: Widgets/Latest Updates-->
											<div class="kt-portlet kt-portlet--height-fluid ">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Últimas actualizaciones
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
															Today
														</a>
														<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">
															<!--begin::Nav-->
															<ul class="kt-nav">
																<li class="kt-nav__head">
																	Opciones de exportación
																	<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="kt-nav__separator"></li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-drop"></i>
																		<span class="kt-nav__link-text">Actividad</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																		<span class="kt-nav__link-text">Preguntas frecuentes</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-link"></i>
																		<span class="kt-nav__link-text">Ajustes</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-new-email"></i>
																		<span class="kt-nav__link-text">Apoyo</span>
																		<span class="kt-nav__link-badge">
																			<span class="kt-badge kt-badge--success">5</span>
																		</span>
																	</a>
																</li>
																<li class="kt-nav__separator"></li>
																<li class="kt-nav__foot">
																	<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
																	<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
																</li>
															</ul>
															<!--end::Nav-->
														</div>
													</div>
												</div>
												<!--full height portlet body-->
												<div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
													<div class="kt-widget4 kt-widget4--sticky">
														<div class="kt-widget4__items kt-portlet__space-x kt-margin-t-15">
															<div class="kt-widget4__item">
																<span class="kt-widget4__icon">
																	<i class="flaticon2-graphic  kt-font-brand"></i>
																</span>
																<a href="#" class="kt-widget4__title">
																	Metronic Admin Theme
																</a>
																<span class="kt-widget4__number kt-font-brand">+500</span>
															</div>
															<div class="kt-widget4__item">
																<span class="kt-widget4__icon">
																	<i class="flaticon2-analytics-2  kt-font-success"></i>
																</span>
																<a href="#" class="kt-widget4__title">
																	Green Maker Team
																</a>
																<span class="kt-widget4__number kt-font-success">-64</span>
															</div>
															<div class="kt-widget4__item">
																<span class="kt-widget4__icon">
																	<i class="flaticon2-drop  kt-font-danger"></i>
																</span>
																<a href="#" class="kt-widget4__title">
																	Make Apex Great Again
																</a>
																<span class="kt-widget4__number kt-font-danger">+1080</span>
															</div>
															<div class="kt-widget4__item">
																<span class="kt-widget4__icon">
																	<i class="flaticon2-pie-chart-4 kt-font-warning"></i>
																</span>
																<a href="#" class="kt-widget4__title">
																	A Programming Language
																</a>
																<span class="kt-widget4__number kt-font-warning">+19</span>
															</div>
														</div>
														<div class="kt-widget4__chart kt-margin-t-15">
															<canvas id="kt_chart_latest_updates" style="height: 150px;"></canvas>
														</div>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Latest Updates-->
										</div>
									</div>
									<!--End::Section-->
									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-8">
											<!--begin:: Widgets/Best Sellers-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Los más vendidos
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#kt_widget5_tab1_content" role="tab">
																	Último
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_widget5_tab2_content" role="tab">
																	Mes
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_widget5_tab3_content" role="tab">
																	Todo el tiempo
																</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="tab-content">
														<div class="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
															<div class="kt-widget5">
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="./assets/media//products/product27.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Great Logo Designn
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic admin themes.
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Keenthemes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">19,200</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">1046</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="./assets/media//products/product22.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Branding Mockup
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic bootstrap themes.
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Fly themes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">24,583</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">3809</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="./assets/media//products/product15.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Awesome Mobile App
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic admin themes.Lorem Ipsum Amet
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Fly themes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">210,054</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">1103</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="tab-pane" id="kt_widget5_tab2_content">
															<div class="kt-widget5">
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="./assets/media//products/product10.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Branding Mockup
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic bootstrap themes.
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Fly themes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">24,583</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">3809</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="./assets/media//products/product11.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Awesome Mobile App
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic admin themes.Lorem Ipsum Amet
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Fly themes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">210,054</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">1103</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="./assets/media//products/product6.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Great Logo Designn
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic admin themes.
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Keenthemes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">19,200</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">1046</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="tab-pane" id="kt_widget5_tab3_content">
															<div class="kt-widget5">
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="./assets/media//products/product11.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Awesome Mobile App
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic admin themes.Lorem Ipsum Amet
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Fly themes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">210,054</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">1103</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="./assets/media//products/product6.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Great Logo Designn
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic admin themes.
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Keenthemes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">19,200</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">1046</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="./assets/media//products/product10.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Branding Mockup
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic bootstrap themes.
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Fly themes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">24,583</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">3809</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Best Sellers-->
										</div>
										<div class="col-xl-4">
											<!--begin:: Widgets/Authors Profit-->
											<div class="kt-portlet kt-portlet--bordered-semi kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Autores de lucro
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
															All
														</a>
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__section kt-nav__section--first">
																	<span class="kt-nav__section-text">Finance</span>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-graph-1"></i>
																		<span class="kt-nav__link-text">Estadísticas</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																		<span class="kt-nav__link-text">Eventos</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-layers-1"></i>
																		<span class="kt-nav__link-text">Informes</span>
																	</a>
																</li>
																<li class="kt-nav__section kt-nav__section--first">
																	<span class="kt-nav__section-text">HR</span>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																		<span class="kt-nav__link-text">Notificaciones</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-file-1"></i>
																		<span class="kt-nav__link-text">Archivos</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--logo">
																<img src="./assets/media/client-logos/logo5.png" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__title">
																	Trump Themes
																</a>
																<p class="kt-widget4__text">
																	Make Metronic Great Again
																</p>
															</div>
															<span class="kt-widget4__number kt-font-brand">+$2500</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--logo">
																<img src="./assets/media/client-logos/logo4.png" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__title">
																	StarBucks
																</a>
																<p class="kt-widget4__text">
																	Good Coffee & Snacks
																</p>
															</div>
															<span class="kt-widget4__number kt-font-brand">-$290</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--logo">
																<img src="./assets/media/client-logos/logo3.png" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__title">
																	Phyton
																</a>
																<p class="kt-widget4__text">
																	A Programming Language
																</p>
															</div>
															<span class="kt-widget4__number kt-font-brand">+$17</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--logo">
																<img src="./assets/media/client-logos/logo2.png" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__title">
																	GreenMakers
																</a>
																<p class="kt-widget4__text">
																	Make Green Great Again
																</p>
															</div>
															<span class="kt-widget4__number kt-font-brand">-$2.50</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--logo">
																<img src="./assets/media/client-logos/logo1.png" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__title">
																	FlyThemes
																</a>
																<p class="kt-widget4__text">
																	A Let's Fly Fast Again Language
																</p>
															</div>
															<span class="kt-widget4__number kt-font-brand">+$200</span>
														</div>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Authors Profit-->
										</div>
									</div>
									<!--End::Section-->
									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-4">
											<!--begin:: Widgets/Tasks -->
											<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Tareas
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab">
																	Hoy
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab">
																	Semana
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_widget2_tab3_content" role="tab">
																	Mes
																</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="tab-content">
														<div class="tab-pane active" id="kt_widget2_tab1_content">
															<div class="kt-widget2">
																<div class="kt-widget2__item kt-widget2__item--primary">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Haz que Metronic vuelva a ser genial. Lorem Ipsum Amet
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Bob
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--warning">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Preparar documentos para Metting el lunes
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Sean
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--brand">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Hacer widgets grandes otra vez. Estudiar Communy Elit
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Aziko
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--success">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Haz que Metronic vuelva a ser grande. Lorem Ipsum
																		</a>
																		<a class="kt-widget2__username">
																			By James
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--danger">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Informe Financiero Completa Para Emirates Airlines
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Bob
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--info">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Informe Financiero Completa Para Emirates Airlines
																			</p>
																			<a href="#" class="kt-widget2__username">
																				By Sean
																			</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="tab-pane" id="kt_widget2_tab2_content">
															<div class="kt-widget2">
																<div class="kt-widget2__item kt-widget2__item--success">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Haz que Metronic vuelva a ser grande. Lorem Ipsum
																		</a>
																		<a class="kt-widget2__username">
																			By James
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--warning">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Preparar documentos para Metting el lunes
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Sean
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--danger">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Informe Financiero Completa Para Emirates Airlines
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Bob
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--primary">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Haz que Metronic vuelva a ser genial. Lorem Ipsum Amet
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Bob
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--info">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Informe Financiero Completa Para Emirates Airlines
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Sean
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--brand">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Hacer widgets grandes otra vez. Estudiar Communy Elit
																			</p>
																			<a href="#" class="kt-widget2__username">
																				By Aziko
																			</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="tab-pane" id="kt_widget2_tab3_content">
															<div class="kt-widget2">
																<div class="kt-widget2__item kt-widget2__item--warning">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Haz que Metronic vuelva a ser grande. Lorem Ipsum
																		</a>
																		<a class="kt-widget2__username">
																			By James
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--danger">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Informe Financiero Completa Para Emirates Airlines
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Bob
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--brand">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Hacer widgets grandes otra vez. Estudiar Communy Elit
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Aziko
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--info">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Informe Financiero Completa Para Emirates Airlines
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Sean
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--success">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Informe Financiero Completa Para Emirates Airlines
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Bob
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--primary">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Haz que Metronic vuelva a ser genial. Lorem Ipsum Amet
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Bob
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Informes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Mensajes</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Gráficos</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Miembros</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Ajustes</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Tasks -->
										</div>
										<div class="col-xl-4">
											<!--begin:: Widgets/Notifications-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Notificaciones
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#kt_widget6_tab1_content" role="tab">
																	Último
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_widget6_tab2_content" role="tab">
																	Semana
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_widget6_tab3_content" role="tab">
																	Mes
																</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="tab-content">
														<div class="tab-pane active" id="kt_widget6_tab1_content" aria-expanded="true">
															<div class="kt-notification">
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000" />
																				<rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New order has been received.
																		</div>
																		<div class="kt-notification__item-time">
																			2 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" id="Combined-Shape" fill="#000000" />
																				<path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" id="Path-85" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New member is registered and pending for approval.
																		</div>
																		<div class="kt-notification__item-time">
																			3 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<circle id="Oval-14" fill="#000000" cx="12" cy="9" r="5" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			Membership application has been added.
																		</div>
																		<div class="kt-notification__item-time">
																			3 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon id="Bound" points="0 0 24 0 24 24 0 24" />
																				<path d="M18.5,8 C17.1192881,8 16,6.88071187 16,5.5 C16,4.11928813 17.1192881,3 18.5,3 C19.8807119,3 21,4.11928813 21,5.5 C21,6.88071187 19.8807119,8 18.5,8 Z M18.5,21 C17.1192881,21 16,19.8807119 16,18.5 C16,17.1192881 17.1192881,16 18.5,16 C19.8807119,16 21,17.1192881 21,18.5 C21,19.8807119 19.8807119,21 18.5,21 Z M5.5,21 C4.11928813,21 3,19.8807119 3,18.5 C3,17.1192881 4.11928813,16 5.5,16 C6.88071187,16 8,17.1192881 8,18.5 C8,19.8807119 6.88071187,21 5.5,21 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																				<path d="M5.5,8 C4.11928813,8 3,6.88071187 3,5.5 C3,4.11928813 4.11928813,3 5.5,3 C6.88071187,3 8,4.11928813 8,5.5 C8,6.88071187 6.88071187,8 5.5,8 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 C14,5.55228475 13.5522847,6 13,6 L11,6 C10.4477153,6 10,5.55228475 10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,18 L13,18 C13.5522847,18 14,18.4477153 14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 C10,18.4477153 10.4477153,18 11,18 Z M5,10 C5.55228475,10 6,10.4477153 6,11 L6,13 C6,13.5522847 5.55228475,14 5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 C18.4477153,14 18,13.5522847 18,13 L18,11 C18,10.4477153 18.4477153,10 19,10 Z" id="Combined-Shape" fill="#000000" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New report file has been uploaded.
																		</div>
																		<div class="kt-notification__item-time">
																			5 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="Rectangle-10" x="0" y="0" width="24" height="24" />
																				<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" id="Path-3" fill="#000000" />
																				<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New user feedback received and pending for review.
																		</div>
																		<div class="kt-notification__item-time">
																			8 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" id="Combined-Shape" fill="#000000" />
																				<circle id="Oval" fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			Database sever #2 has been fully restarted.
																		</div>
																		<div class="kt-notification__item-time">
																			23 hrs ago
																		</div>
																	</div>
																</a>
															</div>
														</div>
														<div class="tab-pane" id="kt_widget6_tab2_content" aria-expanded="false">
															<div class="kt-notification">
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M9.35321926,16.3736278 L16.3544311,10.3706602 C16.5640654,10.1909158 16.5882961,9.87526197 16.4085517,9.66562759 C16.3922584,9.64662485 16.3745611,9.62887247 16.3556091,9.6125202 L9.35439731,3.57169798 C9.14532254,3.39130299 8.82959492,3.41455255 8.64919993,3.62362732 C8.5708616,3.71442013 8.52776329,3.83034375 8.52776329,3.95026134 L8.52776329,15.9940512 C8.52776329,16.2701936 8.75162092,16.4940512 9.02776329,16.4940512 C9.14714624,16.4940512 9.2625893,16.4513356 9.35321926,16.3736278 Z" id="Path-10-Copy" fill="#000000" transform="translate(12.398118, 9.870355) rotate(-450.000000) translate(-12.398118, -9.870355) " />
																				<rect id="Rectangle-Copy" fill="#000000" opacity="0.3" transform="translate(12.500000, 17.500000) scale(-1, 1) rotate(-270.000000) translate(-12.500000, -17.500000) " x="11" y="11" width="3" height="13" rx="0.5" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New company application has been approved.
																		</div>
																		<div class="kt-notification__item-time">
																			3 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<rect id="Rectangle-62-Copy" fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" />
																				<rect id="Rectangle-62-Copy-2" fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" />
																				<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" id="Path-95" fill="#000000" fill-rule="nonzero" />
																				<rect id="Rectangle-62-Copy-4" fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New report has been received.
																		</div>
																		<div class="kt-notification__item-time">
																			23 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000" />
																				<rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New file has been uploaded and pending for review.
																		</div>
																		<div class="kt-notification__item-time">
																			5 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<circle id="Oval-14" fill="#000000" cx="12" cy="9" r="5" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			Membership application has been added.
																		</div>
																		<div class="kt-notification__item-time">
																			3 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--info">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
																				<path d="M12,4.25932872 C12.1488635,4.25921584 12.3000368,4.29247316 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 L12,4.25932872 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																				<path d="M12,4.25932872 L12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.277344,4.464261 11.6315987,4.25960807 12,4.25932872 Z" id="Combined-Shape" fill="#000000" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New customer is registered.
																		</div>
																		<div class="kt-notification__item-time">
																			3 days ago
																		</div>
																	</div>
																</a>
															</div>
														</div>
														<div class="tab-pane" id="kt_widget6_tab3_content" aria-expanded="false">
															<div class="kt-notification">
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" id="Path-50" fill="#000000" opacity="0.3" />
																				<path d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z" id="Combined-Shape" fill="#000000" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New order has been received.
																		</div>
																		<div class="kt-notification__item-time">
																			2 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																				<path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" id="Combined-Shape" fill="#000000" />
																				<path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" id="Combined-Shape" fill="#000000" />
																				<path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" id="Path-107" fill="#000000" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New customer is registered
																		</div>
																		<div class="kt-notification__item-time">
																			3 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<rect id="Combined-Shape" fill="#000000" opacity="0.3" x="2" y="9" width="20" height="13" rx="2" />
																				<rect id="Rectangle-116-Copy" fill="#000000" opacity="0.3" x="5" y="5" width="14" height="2" rx="0.5" />
																				<rect id="Rectangle-116-Copy-2" fill="#000000" opacity="0.3" x="7" y="1" width="10" height="2" rx="0.5" />
																				<path d="M10.8333333,20 C9.82081129,20 9,19.3159906 9,18.4722222 C9,17.6284539 9.82081129,16.9444444 10.8333333,16.9444444 C11.0476105,16.9444444 11.2533018,16.9750785 11.4444444,17.0313779 L11.4444444,12.7916011 C11.4444444,12.4782408 11.6398662,12.2012404 11.9268804,12.1077729 L15.4407693,11.0331119 C15.8834716,10.8889438 16.3333333,11.2336005 16.3333333,11.7169402 L16.3333333,12.7916011 C16.3333333,13.1498215 15.9979332,13.3786009 15.7222222,13.4444444 C15.3255297,13.53918 14.3070112,13.7428837 12.6666667,14.0555556 L12.6666667,18.5035214 C12.6666667,18.5583862 12.6622174,18.6091837 12.6535404,18.6559869 C12.5446237,19.4131089 11.771224,20 10.8333333,20 Z" id="Combined-Shape" fill="#000000" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			Application has been approved
																		</div>
																		<div class="kt-notification__item-time">
																			3 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="Bound" opacity="0.200000003" x="0" y="0" width="24" height="24" />
																				<path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																				<path d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z" id="Combined-Shape" fill="#000000" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New customer comment recieved
																		</div>
																		<div class="kt-notification__item-time">
																			2 days ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000" />
																				<rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New customer is registered
																		</div>
																		<div class="kt-notification__item-time">
																			3 days ago
																		</div>
																	</div>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Notifications-->
										</div>
										<div class="col-xl-4">
											<!--begin:: Widgets/Support Tickets -->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Entradas de apoyo
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<div class="dropdown dropdown-inline">
															<button type="button" class="btn btn-clean btn-sm btn-icon-md btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="flaticon-more-1"></i>
															</button>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">
																<!--begin::Nav-->
																<ul class="kt-nav">
																	<li class="kt-nav__head">
																		Opciones de exportación
																		<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
																	</li>
																	<li class="kt-nav__separator"></li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-drop"></i>
																			<span class="kt-nav__link-text">Actividad</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																			<span class="kt-nav__link-text">Preguntas frecuentes</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-link"></i>
																			<span class="kt-nav__link-text">Ajustes</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-new-email"></i>
																			<span class="kt-nav__link-text">Apoyo</span>
																			<span class="kt-nav__link-badge">
																				<span class="kt-badge kt-badge--success">5</span>
																			</span>
																		</a>
																	</li>
																	<li class="kt-nav__separator"></li>
																	<li class="kt-nav__foot">
																		<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
																		<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
																	</li>
																</ul>
																<!--end::Nav-->
															</div>
														</div>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="kt-widget3">
														<div class="kt-widget3__item">
															<div class="kt-widget3__header">
																<div class="kt-widget3__user-img">
																	<img class="kt-widget3__img" src="./assets/media/users/user1.jpg" alt="">
																</div>
																<div class="kt-widget3__info">
																	<a href="#" class="kt-widget3__username">
																		Melania Trump
																	</a><br>
																	<span class="kt-widget3__time">
																		2 day ago
																	</span>
																</div>
																<span class="kt-widget3__status kt-font-info">
																	Pending
																</span>
															</div>
															<div class="kt-widget3__body">
																<p class="kt-widget3__text">
																	Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
																</p>
															</div>
														</div>
														<div class="kt-widget3__item">
															<div class="kt-widget3__header">
																<div class="kt-widget3__user-img">
																	<img class="kt-widget3__img" src="./assets/media/users/user4.jpg" alt="">
																</div>
																<div class="kt-widget3__info">
																	<a href="#" class="kt-widget3__username">
																		Lebron King James
																	</a><br>
																	<span class="kt-widget3__time">
																		1 day ago
																	</span>
																</div>
																<span class="kt-widget3__status kt-font-brand">
																	Open
																</span>
															</div>
															<div class="kt-widget3__body">
																<p class="kt-widget3__text">
																	Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.
																</p>
															</div>
														</div>
														<div class="kt-widget3__item">
															<div class="kt-widget3__header">
																<div class="kt-widget3__user-img">
																	<img class="kt-widget3__img" src="./assets/media/users/user5.jpg" alt="">
																</div>
																<div class="kt-widget3__info">
																	<a href="#" class="kt-widget3__username">
																		Deb Gibson
																	</a><br>
																	<span class="kt-widget3__time">
																		3 weeks ago
																	</span>
																</div>
																<span class="kt-widget3__status kt-font-success">
																	Closed
																</span>
															</div>
															<div class="kt-widget3__body">
																<p class="kt-widget3__text">
																	Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end:: Widgets/Support Tickets -->
										</div>
									</div>
									<!--End::Section-->
									<!--End::Dashboard 2-->
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
		<script src="./assets/js/demo2/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Global Theme Bundle -->
		<!--begin::Page Vendors(used by this page) -->
		<script src="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
		<script src="./assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>
		<!--end::Page Vendors -->
		<!--begin::Page Scripts(used by this page) -->
		<script src="./assets/js/demo2/pages/dashboard.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
	</body>
	<!-- end::Body -->
	</html>