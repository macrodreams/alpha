<?php
/**
 * A template part for displaying a ping.
 *
 * @package    Alpha\TemplateParts
 * @subpackage Alpha
 * @author     Robert Neu
 * @copyright  Copyright (c) 2015, WP Site Care, LLC
 * @since      1.0.0
 */
?>
<li <?php alpha_attr( 'comment' ); ?>>

	<article>

		<header <?php alpha_attr( 'comment-meta' ); ?>>
			<cite <?php alpha_attr( 'comment-author' ); ?>><?php comment_author_link(); ?></cite>
			<a <?php alpha_attr( 'comment-permalink' ); ?>>
				<time <?php alpha_attr( 'comment-published' ); ?>>
					<?php
					printf(
						esc_attr__( '%s ago', 'alpha' ),
						human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) )
					);
					?>
				</time>
			</a>
			<?php edit_comment_link(); ?>
		</header><!-- .comment-meta -->

	</article>
