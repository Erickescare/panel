<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "inc/config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM users WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row["name"];
                $numempleado = $row["numempleado"];
                $apellidos = $row["apellidos"];
                $ciudad = $row["ciudad"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<?php $pageTitle = 'Titulo'; include('inc/head.php') ?>
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
                                        <span class="kt-subheader__desc">Sub-Titulo</span>
                                        <!-- <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10">
                                            Más
                                        </a> -->
                                    </div>
                                </div>
                                <!-- end:: Content Head -->
                                <!-- begin:: Content -->
                                <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                                   <div class="form-group">
                                        <label>Num Empleado</label>
                                        <p class="form-control-static"><?php echo $row["numempleado"]; ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <p class="form-control-static"><?php echo $row["name"]; ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Apellidos</label>
                                        <p class="form-control-static"><?php echo $row["apellidos"]; ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Ciudad</label>
                                        <p class="form-control-static"><?php echo $row["ciudad"]; ?></p>
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
    </body>
    <!-- end::Body -->
</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Ver Record</h1>
                    </div>
                    <div class="form-group">
                        <label>Num Empleado</label>
                        <p class="form-control-static"><?php echo $row["numempleado"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <p class="form-control-static"><?php echo $row["name"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Apellidos</label>
                        <p class="form-control-static"><?php echo $row["apellidos"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Ciudad</label>
                        <p class="form-control-static"><?php echo $row["ciudad"]; ?></p>
                    </div>
                    <p><a href="perfil.php" class="btn btn-primary">Regreso</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html> -->