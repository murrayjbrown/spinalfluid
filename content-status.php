<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class();
    if( !is_singular( get_post_type() )) : echo ' article-list-item';
    endif;?>">

    <?php if ( is_singular( get_post_type() ) ) { ?>

        <?php if ( get_option( 'show_avatars' ) ) { ?>
            <header class="entry-header">
                <?php echo get_avatar( get_the_author_meta( 'email' ) ); ?>
            </header><!-- .entry-header -->
        <?php } ?>

        <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'spinalfluid' ) . '</span>', 'after' => '</p>' ) ); ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[post-format-link] updated on [entry-published] [entry-edit-link before="| "]<br />[entry-terms taxonomy="category" before="Posted in "] [entry-terms before="Tagged "]', 'spinalfluid' ) . '</div>' ); ?>
        </footer><!-- .entry-footer -->

    <?php } else { ?>

        <?php if ( get_option( 'show_avatars' ) ) { ?>
            <header class="entry-header">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_avatar( get_the_author_meta( 'email' ) ); ?></a>
            </header><!-- .entry-header -->
        <?php } ?>

        <div class="entry-content">
            <?php // the_content( __( 'Read more &rarr;', 'spinalfluid' ) ); //SUPERCEDED (mjbrown)
            the_content( __( '<span style="white-space:nowrap;">…more&nbsp;&raquo;</span>', 'spinalfluid' ) );
            ?>
            <?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'spinalfluid' ) . '</span>', 'after' => '</p>' ) ); ?>
        </div><!-- .entry-content -->

        <?php // if ( !get_option( 'show_avatars' ) ) { //DISABLED (mjbrown) ?>

            <footer class="entry-footer">
                <?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[post-format-link] updated on [entry-published] [entry-permalink before="| "] [entry-edit-link before="| "]', 'spinalfluid' ) . '</div>' ); ?>
            </footer><!-- .entry-footer -->

        <?php //} //DISABLED (mjbrown) ?>

    <?php } ?>

</article><!-- .hentry -->
