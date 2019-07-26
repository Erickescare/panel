
<?php
include("conexion.php");
?>
<?php
$search            = isset( $_GET['search'] ) ? $_GET['search'] : '';
$paged             = isset( $_GET['cpage'] ) ? $_GET['cpage'] : '1';
$status            = isset( $_GET['status'] ) ? $_GET['status'] : '';
$job_id            = isset( $_GET['job-id'] ) ? $_GET['job-id'] : '';
$user              = IWJ_User::get_user();
$application_query = $user->get_applications();
$job_ids           = $user->get_job_ids();
$url               = iwj_get_page_permalink( 'dashboard' );
?>
<div class="iwj-applications iwj-main-block">
	<div class="iwj-search-form">
		<form action="<?php echo $url; ?>">
			<span class="search-box">
                <input type="text" class="search-text" placeholder="<?php echo __( 'Buscar', 'iwjob' ); ?>" name="search" value="<?php echo esc_attr( $search ); ?>">
                <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
            </span>
			<select class="search-select iwj-application-job iwj-select-2" name="job-id">
				<option value="" <?php selected( $job_id, '', false ); ?>><?php echo __( 'Todos los trabajos', 'iwjob' ); ?></option>
				<?php
				foreach ( $job_ids as $_job_id ) {
					echo '<option value="' . $_job_id . '" ' . selected( $job_id, $_job_id, false ) . '>' . get_the_title( $_job_id ) . '</option>';
				}
				?>
			</select>
			<select class="search-select iwj-jobs-status iwj-select-2-wsearch" name="status">
				<option value="" <?php selected($status, ''); ?>><?php echo __('Estatus', 'iwjob'); ?></option>
				<?php
				$job_status = IWJ_Application::get_status_array(true, true);
				foreach ($job_status as $key=>$title){
					echo '<option value="'.$key.'" '.selected($status, $key, false).'>'.$title.'</option>';
				}
				?>
			</select>
			<input type="hidden" name="iwj_tab" value="applications">
		</form>
	</div>

	<div class="iwj-applications-table">
		<div class="iwj-table-overflow-x">
			<table class="table">
				<thead>
				<tr>
					<th width="30%"><?php echo __( 'Candidato', 'iwjob' ); ?></th>
					<th width="20%"><?php echo __( 'Fecha de solicitud', 'iwjob' ); ?></th>
					<th width="15%"><?php echo __( 'Descargar CV', 'iwjob' ); ?></th>
					<th width="10%" class="text-center"><?php echo __( 'Fuente', 'iwjob' ); ?></th>
					<th width="10%" class="text-center"><?php echo __( 'Estado', 'iwjob' ); ?></th>
					<th width="10%" class="text-center"><?php echo __( 'Acción', 'iwjob' ); ?></th>
				</tr>
				</thead>
				<tbody>
				<?php if ( $application_query && $application_query->have_posts() ) { ?>
					<?php
					$show_candidate_public_profile = iwj_option( 'show_candidate_public_profile', '' );
					while ( $application_query->have_posts() ) {
						$application_query->the_post();
						$post        = get_post();
						$application = IWJ_Application::get_application( $post );
						$job         = $application->get_job();
						$author      = $application->get_author();
						?>
						<tr class="application-item application-<?php echo $application->get_id(); ?>">
							<td class="application-applier">
								<?php
								$link                          = '';
								if ( $author && $candidate = $author->get_candidate() ) {
									if ( $candidate->is_active() ) {
										if ( ! $show_candidate_public_profile || ( $show_candidate_public_profile && is_user_logged_in() ) ) {
											$link = $candidate->permalink();
										}
									}
								}
								?>
								<div class="avatar">
									<?php if ( $link ) { ?>
										<a href="<?php echo $link; ?>"><?php echo get_avatar( $author->get_id() ); ?></a>
									<?php } else {
										echo $author ? get_avatar( $author->get_id() ) : '';
									}
									?>
								</div>
								<div class="content">
									<h3>
										<?php if ( $link ) { ?>
											<a href="<?php echo $link; ?>"><?php echo $application->get_full_name(); ?></a>
										<?php } else {
											echo $application->get_full_name();
										}
										?>
									</h3>
									<div class="application-meta">
										<?php $job_title = $job->get_title(); ?>
										<div class="job">
											<span class="meta-title"><i class="fa fa-suitcase"></i></span><span class="meta-value"><a href="<?php echo $job->permalink(); ?>" title="<?php echo $job_title; ?>"><?php echo wp_trim_words( $job_title, 4 ); ?></a></span>
										</div>
										<?php if ( $author && $phone = $author->get_phone() ) { ?>
											<div class="phone">
												<span class="meta-title"><i class="fa fa-mobile"></i></span><span class="meta-value"><a href="tel:<?php echo $phone; ?>" title="<?php echo $phone; ?>"><?php echo $phone; ?></a></span>
											</div>
										<?php } ?>
									</div>
								</div>
							</td>
							<td class="application-created"><?php echo $application->get_created(); ?></td>
							<td class="application-cv">
								<?php
								$cv = $application->get_cv();
								if ( $cv && $cv['url'] ) {
									echo '<a href="' . $cv['url'] . '" target="_blank">' . $cv['name'] . '</a>';
								}
								?>
							</td>
							<td class="application-source text-center"><?php echo ucfirst( $application->get_source() ); ?></td>
							<td class="application-status iwj-status text-center">
								<span data-toggle="tooltip" class="<?php echo $application->get_status(); ?>" title="<?php echo IWJ_Application::get_status_title( $application->get_status() ); ?>"><?php echo iwj_get_status_icon( $application->get_status() ); ?></span>
							</td>
							<td class="application-view text-center">
								<div class="iwj-menu-action-wrap">
									<a tabindex="0" class="iwj-toggle-action collapsed" type="button" data-toggle="collapse" data-trigger="focus" data-target="#nav-collapse<?php echo $post->ID; ?>"></a>
									<div id="nav-collapse<?php echo $post->ID; ?>" class="collapse iwj-menu-action" data-id="nav-collapse<?php echo $post->ID; ?>">
										<div class="iwj-menu-action-inner">
											<div>
												<a class="iwj-view-application" href="#" data-application-id="<?php echo $application->get_id(); ?>" data-remote="false" data-toggle="modal" data-target="#iwj-application-view-modal"><?php echo __( 'Ver Solicitud', 'iwjob' ); ?></a>
											</div>
											<?php if ( iwj_option( 'email_contact_enable' ) ) { ?>
												<div>
													<a class="iwj-contact" href="#" data-item-id="<?php echo $application->get_id(); ?>" data-remote="false" data-toggle="modal" data-target="#iwj-application-email-modal"><?php echo __( 'Enviar correo electrónico', 'iwjob' ); ?></a>
												</div>
											<?php }
												if( iwj_option('employer_can_delete_application') ){?>
													<div><a href="#" class="iwj-delete-application" data-id="<?php echo $application->get_id(); ?>" data-message="<?php printf(__('¿Estás seguro de que quieres eliminar %s?', 'iwjob'), $application->get_title()); ?>"><?php echo __('Eliminar', 'iwjob'); ?></a></div>
												<?php }
											?>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<?php
					}
					wp_reset_postdata();
				} else { ?>
					<tr class="iwj-empty">
						<td colspan="6"><?php echo __( 'No se encontraron aplicaciones.', 'iwjob' ); ?></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="modal fade iwj-application-view-modal" id="iwj-application-view-modal" tabindex="-1" role="dialog" data-loading="<?php echo __( 'Cargando...', 'iwjob' ); ?>">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title"><?php echo __( 'Detalles de la aplicación', 'iwjob' ); ?></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<a class="print-button" href="javascript:window.print()" title="<?php _e( 'Imprime esta página', 'iwjob' ); ?>"><i class="ion-android-print"></i></a>
					</div>
					<div class="modal-body">
						<?php echo __( 'Cargando...', 'iwjob' ); ?>
					</div>
				</div>
			</div>
		</div>
		<?php if ( iwj_option( 'email_application_enable' ) ) {
			$application_emails = IWJ_Application::get_emails();
			?>
			<div class="modal fade" id="iwj-application-email-modal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<form class="iwj-application-email-form" action="<?php the_permalink(); ?>" method="post" enctype="multipart/form-data">
							<div class="modal-header">
								<h4 class="modal-title"><?php echo __( 'Enviar un correo electrónico al candidato', 'iwjob' ); ?></h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<select name="email_type" id="application_email">
									<option value=""><?php echo __( 'Seleccione una plantilla de correo', 'iwjob' ); ?></option>
									<?php foreach ( $application_emails as $email ) {
										echo '<option value="' . $email['id'] . '">' . $email['title'] . '</option>';
									} ?>
								</select>
								<textarea id="application_email_value" style="display: none"><?php echo json_encode( $application_emails ); ?></textarea>
								<input type="text" name="subject" placeholder="<?php echo __( 'Ingrese el asunto del correo electrónico', 'iwjob' ); ?>" value="">
								<?php
								iwj_field_wysiwyg( 'message', '', true, '', '', '', __( 'Puedes usar etiquetas: #employer_name#, #employer_email#, #candidate_name#, #candidate_email#', 'iwjob' ), 'Ingresar mensaje de correo electrónico', array(
									'quicktags'     => false,
									'editor_height' => 250
								) );
								?>
							</div>
							<div class="iwj-respon-msg iwj-hide"></div>
							<div class="modal-footer">
								<input type="hidden" name="application_id" value="">
								<div class="iwj-button-loader">
									<button class="iwj-btn iwj-btn-primary iwj-application-email-btn"><?php echo __( 'Enviar', 'iwjob' ); ?></button>
								</div>
								<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __( 'Cancelar' ); ?></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		<?php } ?>
		<?php
		if ( iwj_option( 'employer_can_delete_application' ) ) { ?>
			<div class="modal fade" id="iwj-confirm-delete-application" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title"><?php echo __( 'Confirmar eliminación', 'iwjob' ); ?></h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<p></p>
						</div>
						<div class="modal-footer">
							<div class="iwj-respon-msg"></div>
							<div class="iwj-button-loader">
								<button type="button" class="btn btn-primary iwj-agree-delete-application"><?php echo __( 'Continuar', 'iwjob' ); ?></button>
								<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __( 'Cerrar', 'iwjob' ); ?></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="clearfix"></div>
	<?php
	if ( $application_query && $application_query->max_num_pages > 1 ) { ?>
		<div class="iwj-pagination">
			<?php
			$big = 999999999; // need an unlikely integer
			echo paginate_links( array(
				'base'      => add_query_arg( 'cpage', '%#%' ),
				'format'    => '',
				'prev_text' => __( '&laquo;' ),
				'next_text' => __( '&raquo;' ),
				'current'   => $paged,
				'total'     => $application_query->max_num_pages
			) );
			?>
		</div>
		<div class="clearfix"></div>
	<?php } ?>
</div>
