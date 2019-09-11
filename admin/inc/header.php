<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
	<div class="kt-header__top">
		<div class="kt-container">
			<!-- begin:: Brand -->
			<?php include('inc/brand.php') ?>
			<!-- end:: Brand -->
			<!-- begin:: Header Topbar -->
			<?php include('inc/top-bar.php') ?>
			<!-- end:: Header Topbar -->
		</div>
	</div>
	<!-- begin: Header Menu -->
	<div class="kt-header__bottom">
		<div class="kt-container">
			<?php if ($_SERVER["REQUEST_URI"] == '/panel/index.php') include('inc/main-menu.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/panel/panel-rh.php') include('inc/main-menu-rh.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/panel/perfil.php') include('inc/main-menu-rh.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/panel/mi-salida.php') include('inc/main-menu-rh.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/panel/editar-perfil.php') include('inc/main-menu-rh.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/panel/soporte.php') include('inc/main-menu-soporte.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/panel/vacantes.php') include('inc/main-menu-rh.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/panel/mensajes.php') include('inc/main-menu-rh.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/panel/noticias-cc.php') include('inc/main-menu-rh.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/panel/admin/index.php') include('inc/main-menu-admin.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/panel/admin/') include('inc/main-menu-admin.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/index.php') include('inc/main-menu.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/panel-rh.php') include('inc/main-menu-rh.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/perfil.php') include('inc/main-menu-rh.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/mi-salida.php') include('inc/main-menu-rh.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/editar-perfil.php') include('inc/main-menu-rh.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/soporte.php') include('inc/main-menu-soporte.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/vacantes.php') include('inc/main-menu-rh.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/mensajes.php') include('inc/main-menu-rh.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/noticias-cc.php') include('inc/main-menu-rh.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/admin/index.php') include('inc/main-menu-admin.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/admin/') include('inc/main-menu-admin.php'); ?>
		</div>
	</div>
	<!-- end: Header Menu -->
</div>