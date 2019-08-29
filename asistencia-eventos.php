<?php $pageTitle = 'Registrarse al Evento'; include('inc/head.php') ?>
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
										<h3 class="kt-subheader__title">Registrarse al Evento</h3>
										<span class="kt-subheader__separator kt-subheader__separator--v"></span>
										<span class="kt-subheader__desc">Registro de Evento</span>
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
														<h3 class="kt-portlet__head-title">Información personal <small>Información para el evento</small></h3>
													</div>
												</div>
												<?php
			                    // Include config file
			                    require_once "inc/config.php";
			                    
			                    // Attempt select query execution
			                    $sql = "SELECT id, name, apellidos FROM users";
			                    if($result = mysqli_query($link, $sql)){
			                        if(mysqli_num_rows($result) > 0){
			                            echo "<table class='table table-bordered table-striped'>";
																		echo "<thead>";
																			echo "<tr>";
																				echo "<th>N. Empleado</th>";
																				echo "<th>Nomre Completo</th>";
																				echo "<th>Evento</th>";
																				echo "<th>Comentarios</th>";
																				echo "<th>Acciones</th>";
																			echo "</tr>";
																		echo "</thead>";
																		echo "<tbody>";
																		while($row = mysqli_fetch_array($result)){
																			echo "<tr>";
																				echo "<td>" . $row['id'] . "</td>";
																				echo "<td>" . $row['name'] . "</td>";
																				echo "<td> nada </td>";
																				echo "<td> nada </td>";
																				echo "<td>";
																					echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'>R </a>";
																					echo "<a href='editar-perfil.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'>E </a>";
																					echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'>X </a>";
																				echo "</td>";
																			echo "</tr>";
																		}
																		echo "</tbody>";
																	echo "</table>";
			                            // Free result set
			                            mysqli_free_result($result);
			                        } else{
			                            echo "<p class='lead'><em>No records were found.</em></p>";
			                        }
			                    } else{
			                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			                    }
			 
			                    // Close connection
			                    mysqli_close($link);
			                    ?>
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
	</body>
</html>