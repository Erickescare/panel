<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
	<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
		<ul class="kt-menu__nav ">
			<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?= ($activePage == 'panel-rh') ? 'kt-menu__item--here':''; ?>"><a href="./index.php" class="kt-menu__link"><span class="kt-menu__link-text">Principal</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
			</li>
			<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?= ($activePage == 'comunidad') ? 'kt-menu__item--here':''; ?>"><a href="./propuestas.php" class="kt-menu__link"><span class="kt-menu__link-text">Comunidad Protexa</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a></li>
			<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?= ($activePage == 'noticias') ? 'kt-menu__item--here':''; ?>"><a href="./propuestas.php" class="kt-menu__link"><span class="kt-menu__link-text">Noticias</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a></li>
			<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?= ($activePage == 'crecer-creciendo') ? 'kt-menu__item--here':''; ?>"><a href="http://localhost/cursos" target="_blank" class="kt-menu__link"><span class="kt-menu__link-text">Crecer Creciendo</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a></li>
			<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?= ($activePage == 'servicios-al-personal') ? 'kt-menu__item--here':''; ?>"><a href="./propuestas.php" class="kt-menu__link"><span class="kt-menu__link-text">Servicios Al Personal</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a></li>
			<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?= ($activePage == 'eventos') ? 'kt-menu__item--here':''; ?>"><a href="./propuestas.php" class="kt-menu__link"><span class="kt-menu__link-text">Eventos</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a></li>
			<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?= ($activePage == 'enlaces') ? 'kt-menu__item--here':''; ?>"><a href="./propuestas.php" class="kt-menu__link"><span class="kt-menu__link-text">Enlaces</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a></li>
			<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?= ($activePage == 'biblioteca-digital') ? 'kt-menu__item--here':''; ?>"><a href="./propuestas.php" class="kt-menu__link"><span class="kt-menu__link-text">Biblioteca Digital</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a></li>
			<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?= ($activePage == 'irectorio') ? 'kt-menu__item--here':''; ?>"><a href="./propuestas.php" class="kt-menu__link"><span class="kt-menu__link-text">Directorio</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a></li>
		</ul>
	</div>
	<div class="kt-header__brand-nav">
		<div class="dropdown">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				Principal
			</button>
			<div class="dropdown-menu dropdown-menu-md">
				<ul class="kt-nav kt-nav--bold kt-nav--md-space">
					<li class="kt-nav__item">
						<a class="kt-nav__link active" href="./panel-rh.php">
							<span class="kt-nav__link-icon"><i class="flaticon2-user"></i></span>
							<span class="kt-nav__link-text">Recursos Humanos</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a class="kt-nav__link active" href="./soporte.php">
							<span class="kt-nav__link-icon"><i class="flaticon-letter-g"></i></span>
							<span class="kt-nav__link-text">Soporte Google</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a class="kt-nav__link" href="#">
							<span class="kt-nav__link-icon"><i class="flaticon-feed"></i></span>
							<span class="kt-nav__link-text">Relación con el cliente</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a class="kt-nav__link" href="#">
							<span class="kt-nav__link-icon"><i class="flaticon2-settings"></i></span>
							<span class="kt-nav__link-text">Compras</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a class="kt-nav__link" href="#">
							<span class="kt-nav__link-icon"><i class="flaticon2-chart2"></i></span>
							<span class="kt-nav__link-text">Contabilidad</span>
						</a>
					</li>
					<li class="kt-nav__separator"></li>
					<li class="kt-nav__item">
						<a class="kt-nav__link" href="#">
							<span class="kt-nav__link-icon"><i class="flaticon-security"></i></span>
							<span class="kt-nav__link-text">Financiar</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a class="kt-nav__link" href="#">
							<span class="kt-nav__link-icon"><i class="flaticon2-cup"></i></span>
							<span class="kt-nav__link-text">Administración</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
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

