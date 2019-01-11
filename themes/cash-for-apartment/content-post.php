<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cash_for_apartment
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        
            
            <?php
            if (is_singular()) :
                the_title('<h1 class="entry-title asd">', '</h1>');
                cash_for_apartment_post_thumbnail();
            else :
                the_title('<div class="col-sm-6 gilbertown-text"><h2 class="entry-title "><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2></div>');
            endif;

            if ('post' === get_post_type()) :
                ?>
                <div class="entry-meta">
                    <?php
                    cash_for_apartment_posted_on();
                    cash_for_apartment_posted_by();
                    ?>
                </div><!-- .entry-meta -->
            <?php endif;
            ?>
        
    </header><!-- .entry-header -->

    <?php //cash_for_apartment_post_thumbnail(); ?>

    <div class="entry-content">
        
    </div>
    <footer class="entry-footer">
        <?php cash_for_apartment_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
