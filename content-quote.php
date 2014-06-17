<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class();
    if( !is_singular( get_post_type() )) : echo ' article-list-item';
    endif;?>">

    <?php if ( is_singular( get_post_type() ) ) { ?>

        <header class="entry-header">
            <h1 class="entry-title"><?php single_post_title(); ?></h1>
            <?php echo apply_atomic_shortcode( 'entry_byline', '<div class="entry-byline">' . __( '[post-format-link] published on [entry-published] [entry-comments-link before=" | "] [entry-edit-link before="| "]', 'spinalfluid' ) . '</div>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'spinalfluid' ) . '</span>', 'after' => '</p>' ) ); ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[entry-terms taxonomy="category" before="Posted in "] [entry-terms before="Tagged "]', 'spinalfluid' ) . '</div>' ); ?>
        </footer><!-- .entry-footer -->

    <?php } else { ?>

        <div class="entry-content">
            <?php // the_content( __( 'Read more &rarr;', 'spinalfluid' ) ); //SUPERCEDED (mjbrown)
            the_content( __( '<span style="white-space:nowrap;">…more&nbsp;&raquo;</span>', 'spinalfluid' ) ); ?>
            <?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'spinalfluid' ) . '</span>', 'after' => '</p>' ) ); ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[post-format-link] published on [entry-published] [entry-permalink before="| "] [entry-comments-link before="| "] [entry-edit-link before="| "]', 'spinalfluid' ) . '</div>' ); ?>
        </footer>

    <?php } ?>

</article><!-- .hentry -->
