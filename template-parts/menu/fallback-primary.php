<?php
/**
 * The primary nav menu fallback template.
 *
 * @package    Alpha\TemplateParts
 * @subpackage Alpha
 * @author     Robert Neu
 * @copyright  Copyright (c) 2015, WP Site Care, LLC
 * @since      1.0.0
 */
?>
<div class="header-right">
	<p class="no-menu">

		<?php esc_attr_e( "Ready to add your primary menu? Let's get started!", 'alpha' ); ?>

		<?php
		printf(	'<a class="button" href="%1$s">%2$s</a>',
			alpha_get_customizer_link( array(
				'focus_type'   => 'panel',
				'focus_target' => 'nav_menus',
			) ),
			esc_html__( 'Add a Menu', 'alpha' )
		);
		?>

	</p>
</div><!-- .header-right -->
