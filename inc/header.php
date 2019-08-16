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
			<?php
			{
			    case "index":
			    include("inc/main-menu.php");
			    break;
			     case "panel-rh":
			    include("inc/main-menu-rh.php");
			    break;
			   default:
			    include("inc/main-menu.php");
			} 
			?>
			<?= ($activePage == 'index') ? include('inc/main-menu.php'); ?>
			<?= ($activePage == 'panel-rh') ? include('inc/main-menu-rh.php'); ?>
		</div>
	</div>
	<!-- end: Header Menu -->
</div>