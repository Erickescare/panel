<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
	<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
		<ul class="kt-menu__nav ">
			<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?= ($activePage == 'panel-rh') ? 'kt-menu__item--here':''; ?>"><a href="./panel-rh.php" class="kt-menu__link">
				<span class="kt-menu__link-text">Admin</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
			</li>
			<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel <?= ($activePage == 'comunidad') ? 'kt-menu__item--here':''; ?>" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
				<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
				<span class="kt-menu__link-text">Slider</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
				<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
					<ul class="kt-menu__subnav">							
						<li class="kt-menu__item kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
							<a href="./" target="_blank" class="kt-menu__link">
							<span class="kt-menu__link-text">Inicio</span><i class="kt-menu__hor-arrow la la-angle-right"></i></a>
						</li>
						<li class="kt-menu__item kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
							<a href="../" target="_blank" class="kt-menu__link">
							<span class="kt-menu__link-text">Ver carousel</span><i class="kt-menu__hor-arrow la la-angle-right"></i></a>
						</li>
					</ul>
				</div>
			</li>			
			<!-- <li class="disabled kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?= ($activePage == 'comunidad') ? 'kt-menu__item--here':''; ?>"><a href="javascript:;" class="kt-menu__link">
			<span class="kt-menu__link-text">Biblioteca Digital</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a></li>
			<li class="disabled kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?= ($activePage == 'comunidad') ? 'kt-menu__item--here':''; ?>"><a href="javascript:;" class="kt-menu__link">
			<span class="kt-menu__link-text">Directorio</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a></li> -->
		</ul>
	</div>
	<div class="kt-header-toolbar">
		<div class="kt-quick-search" id="kt_quick_search_default">
			<form method="get" class="kt-quick-search__form">
				<div class="input-group">
					<div class="input-group-prepend">
						
						<span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
					<input type="text" class="form-control kt-quick-search__input" placeholder="Buscar...">
					<div class="input-group-append">
						
						<span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
				</div>
			</form>
			<div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,10px"></div>
			<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
				<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
				</div>
			</div>
		</div>
	</div>
</div>