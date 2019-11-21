<?php  $PageTitleMaster = 'Mi Firma'; $pageTitle = 'Mis Servicios'; include('inc/head.php') ?>
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
                    <span class="kt-subheader__desc"><?php echo $PageTitleMaster; ?></span>
                    <!-- <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10">
                      Más
                    </a> -->
                  </div>
                </div>
                <!-- end:: Content Head -->
                 <!-- begin:: Content -->
                  <div class="kt-content kt-grid__item kt-grid__item--fluid" id="kt_content">
                    <!--Begin::App-->
                    <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
                      <!--Begin:: App Aside Mobile Toggle-->
                      <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
                        <i class="la la-close"></i>
                      </button>
                      <!--End:: App Aside Mobile Toggle-->
                      <!--Begin:: App Aside-->
                      <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">
                        <!--begin:: Widgets/Applications/User/Profile1-->
                        <div class="kt-portlet kt-portlet--height-fluid-">
                          <div class="kt-portlet__head  kt-portlet__head--noborder">
                            <div class="kt-portlet__head-label">
                              <h3 class="kt-portlet__head-title">
                              </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                <i class="flaticon-more-1"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">
                                <!--begin::Nav-->
                                <ul class="kt-nav">
                                  <li class="kt-nav__head">
                                    Opciones
                                    <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Haga clic para obtener más información..."></i>
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
                                    <a class="btn btn-label-danger btn-bold btn-sm" href="#">Reclamo</a>
                                    <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Haga clic para obtener más información...">Saber más</a>
                                  </li>
                                </ul>
                                <!--end::Nav-->
                              </div>
                            </div>
                          </div>
                          <div class="kt-portlet__body kt-portlet__body--fit-y">
                            <?php include ('inc/nav-perfil.php'); ?>
                          </div>
                        </div>
                        <!--end:: Widgets/Applications/User/Profile1-->
                      </div>
                      <!--End:: App Aside-->
                      <!--Begin:: App Content-->

                      <!--begin::Portlet-->
                      <div class="kt-portlet">
                        <div class="kt-portlet__head">
                          <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                             Generador de Firma Protexa
                            </h3>
                          </div>
                        </div>

                        <!--begin::Form-->
                        <form action="generador/sig.php" method="post" class="kt-form kt-form--fit kt-form--label-right">
                          <div class="kt-portlet__body">
                            <div class="form-group row">
                              <label class="col-lg-2 col-form-label">Nombre Completo:</label>
                              <div class="col-lg-3">
                                <input class="form-control" id="fullname" name="fullname" size="30" type="text" placeholder="Nombre y Apellido">
                                <span class="form-text text-muted">Por favor ingresa tu nombre completo</span>
                              </div>
                              <label class="col-lg-2 col-form-label">Puesto:</label>
                              <div class="col-lg-3">
                                <input class="form-control" id="title" name="title" size="30" type="text" placeholder="i.e. Senior Consultant">
                                <span class="form-text text-muted">Por favor ingresa tu puesto</span>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-lg-2 col-form-label">Teléfono:</label>
                              <div class="col-lg-3">
                                <div class="kt-input-icon">
                                  <input class="form-control" id="mobile" name="mobile" size="30" type="text" placeholder="9999 999999">
                                  <span class="kt-input-icon__icon kt-input-icon__icon--right"><span>
                                </div>
                                <span class="form-text text-muted">Numero de la oficina</span>
                              </div>
                              <label class="col-lg-2 col-form-label">Extensión:</label>
                              <div class="col-lg-3">
                                <div class="kt-input-icon">
                                  <input class="form-control" id="ext" name="ext" size="30" type="text" placeholder="41444">
                                  <span class="kt-input-icon__icon kt-input-icon__icon--right">
                                </div>
                                <span class="form-text text-muted">Por favor ingrese su extensión</span>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-lg-2 col-form-label">Email:</label>
                              <div class="col-lg-3">
                                <div class="kt-input-icon">
                                  <input class="form-control" id="email" name="email" size="30" type="text" placeholder="nombre.apellido@protexa.com.mx">
                                  <span class="kt-input-icon__icon kt-input-icon__icon--right"><span>
                                </div>
                                <span class="form-text text-muted">Por favor ingrese su correo electronico</span>
                              </div>
                            </div>
                          </div>
                          <div class="kt-portlet__foot kt-portlet__foot--fit-x">
                            <div class="kt-form__actions">
                              <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-10">
                                  <button type="submit" class="btn btn-success">Generar</button>
                                  <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>

                        <!--end::Form-->
                      </div>

                      <!--end::Portlet-->
                    <!--End:: App Content-->
                  </div>
                  <!--End::App-->
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