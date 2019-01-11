<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cash_for_apartment
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <?php if (have_posts()) : ?>

                <header class="page-header">
                    <div class="row gdfgs">
                        <?php
                        $cat_name = single_cat_title();
                         $imgname = $cat_name . ".png";
                        
                    $cat_image_name = generate_cat_image($imgname);
//                        $cat_name =   get_the_category(get_the_id());
//                        print_r($cat_name);
                        ?><div class="col-md-6">
                            <img src=" <?php echo ABSPATH . 'wp-admin/' . $cat_image_name; ?>" width="250px" height="250px">
                        </div>
                        <div class="col-sm-6">
                            <p>
                                We Buy Houses has offices located throughout <?php echo $cat_name; ?>. Select a  city below using the alphabetical list, or enter a <?php echo $cat_name; ?> zip code in the "Sell Your <?php echo $cat_name; ?> House" box.
                            </p>

                        </div>

                    </div>
                    <?php
                    the_archive_title('<h1 class="page-title xcx">', '</h1>');
                    the_archive_description('<div class="archive-description">', '</div>');
                    get_template_part('template-parts/content-post', get_post_type());
                    ?>
                </header><!-- .page-header -->

                <?php
                /* Start the Loop */
                while (have_posts()) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part('template-parts/content-post', get_post_format());
//        get_template_part('template-parts/content', get_post_format());
//        get_template_part('template-parts/content', get_post_format());

                endwhile;

                the_posts_navigation();

            else :

                get_template_part('template-parts/content', 'none');

            endif;
            ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
