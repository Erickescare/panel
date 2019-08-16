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
			<?php if ($_SERVER["REQUEST_URI"] == '/index.php') include('inc/main-menu.php'); ?>
			<?php if ($_SERVER["REQUEST_URI"] == '/panel-rh.php') include('inc/main-menu-rh.php'); ?>
		</div>
	</div>
	<!-- end: Header Menu -->
</div>