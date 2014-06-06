<?php if ( get_option( 'page_comments' ) && 1 < get_comment_pages_count() ) { ?>

	<div class="comments-nav">
		<?php previous_comments_link( __( '&larr; Previous', 'spinalfluid' ) ); ?>
		<span class="page-numbers"><?php printf( __( 'Page %1$s of %2$s', 'spinalfluid' ), ( get_query_var( 'cpage' ) ? absint( get_query_var( 'cpage' ) ) : 1 ), get_comment_pages_count() ); ?></span>
		<?php next_comments_link( __( 'Next &rarr;', 'spinalfluid' ) ); ?><hr>
	</div><!-- .comments-nav -->

<?php } ?>