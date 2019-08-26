<?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
    require_once "inc/config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM users WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: perfil.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
<?php $pageTitle = 'Editar mi perfil'; include('inc/head.php') ?>
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
									<h3 class="kt-subheader__title">Editar mi perfil</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<span class="kt-subheader__desc">Editar Perfil</span>
								</div>
							</div>
							<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
								<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
									<button class="kt-app__aside-close" id="kt_user_profile_aside_close">
										<i class="la la-close"></i>
									</button>
									<div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">
										<div class="kt-portlet ">
											<div class="kt-portlet__head  kt-portlet__head--noborder">
												<div class="kt-portlet__head-label">
													<h3 class="kt-portlet__head-title">
													</h3>
												</div>
												<div class="kt-portlet__head-toolbar">
													<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
														<i class="flaticon-more-1"></i>
													</a>
												</div>
											</div>
											<div class="kt-portlet__body kt-portlet__body--fit-y">
												<?php include ('inc/nav-perfil.php'); ?>
											</div>
										</div>
									</div>
									<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
										<div class="row">
											<div class="col-xl-12">
												<div class="kt-portlet">
													<div class="kt-portlet__head">
														<div class="kt-portlet__head-label">
															<h3 class="kt-portlet__head-title">Borrar Perfil <small>¿Estas seguro de borrar el perfil?</small></h3>
														</div>
													</div>
													<form id="borrar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			                        <div class="">
			                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
			                            <p>¿Seguro que quieres eliminar este registro?</p><br>
			                            <p>
			                                <input value="Yes" class="btn btn-info btn-custom" id="kt_sweetalert_demo_8" readonly>
			                                <a href="./perfil.php" class="btn btn-default">No</a>
			                            </p>
			                        </div>
			                    </form>
												</div>
											</div>
										</div>
									</div>
								</div>
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
	<script src="./assets/js/pages/components/extended/sweetalert2.js" type="text/javascript"></script>
	</body>
</html>