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
    
    <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css">
    <link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

    <link href="./assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
    
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
  <!-- <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script> -->
  <body class="kt-page--loading-enabled kt-page--loading kt-page--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">
    <!-- begin:: Page -->
    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
      <div class="kt-header-mobile__logo">
        <a href="./index.php">
          <img alt="Logo" src="./assets/media/protexa/ico57.png" />
        </a>
      </div>
      <div class="kt-header__brand kt-header__brand-nav">
        <div class="dropdown">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color:#ffb822;border:0;padding: 0.75rem 1.5rem;color:#ebedf2;">
            Mi Firma
          </button>
        </div>
      </div>
      <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
      </div>
    </div>
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
                      <h3 class="kt-font-warning">Mi Firma Protexa</h3>
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
                <!-- begin:: Content Head -->
                <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                  <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">Mi Firma</h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    <span class="kt-subheader__desc">Mi Firma</span>
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
                            <!-- <div class="form-group row">
                              <label class="col-lg-2 col-form-label">Email:</label>
                              <div class="col-lg-3">
                                <div class="kt-input-icon">
                                  <input class="form-control" id="email" name="email" size="30" type="text" placeholder="nombre.apellido@protexa.com.mx">
                                  <span class="kt-input-icon__icon kt-input-icon__icon--right"><span>
                                </div>
                                <span class="form-text text-muted">Por favor ingrese su correo electronico</span>
                              </div>
                            </div> -->
                          </div>
                          <div class="kt-portlet__foot kt-portlet__foot--fit-x">
                            <div class="kt-form__actions">
                              <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-10">
                                  <button type="submit" class="btn btn-success">Generar</button>
                                  <button type="reset" class="btn btn-danger">Borrar</button>
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