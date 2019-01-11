<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cash_for_apartment
 */
?>

<div class="footer-wrapper clearfix">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-top clearfix">
                <div class="footer-top-left col-sm-6" id="footer-sidebar-1">
                    <?php
                    is_active_sidebar('footer-sidebar-1');
                    dynamic_sidebar('footer-sidebar-1');
                    ?>
                </div>
                <!-- /.footer-top-left -->

                <div class="footer-center col-sm-3 from-the-blog" id="footer-sidebar-2">
                    <?php
                    is_active_sidebar('footer-sidebar-2');
                    dynamic_sidebar('footer-sidebar-2');
                    ?>

                </div>
                <div class="footer-top-right col-sm-3" id="footer-sidebar-3">
                    <?php
                    is_active_sidebar('footer-sidebar-3');
                    dynamic_sidebar('footer-sidebar-3');
                    ?>

                </div>
                <!-- /.footer-top-right --> 
            </div>
            <!-- /.footer-top --> 
        </div>
        <!-- /.footer-inner --> 
    </div>
    <!-- /.container -->
    <div class="footer-bottom clearfix">
        <div class="container">
            <div class="row" id="footer-sidebar-4">
                <?php
                    is_active_sidebar('footer-sidebar-4');
                    dynamic_sidebar('footer-sidebar-4');
                    ?>

            </div>
            <div class="f-bootom-links" id="footer-sidebar-5">
                 <?php
                    is_active_sidebar('footer-sidebar-5');
                    dynamic_sidebar('footer-sidebar-5');
                    ?>
            </div>
        </div>
        <!-- /.footer-right --> 
    </div>
    <!-- /.footer-bottom --> 
</div>
<!-- /.fooetr --> 

<script>
    jQuery(document).on('click', '.page-scroll', function (event) {
        event.preventDefault();

        jQuery('html, body').animate({
            scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top
        }, 1800);
    });
</script> 
<script>
    jQuery(document).ready(function () {
        jQuery('#carouselFade').carousel();
    });
</script>

<script type="text/javascript">
//    jQuery(function () {
//        jQuery("#dialog").dialog({
//            modal: true,
//            autoOpen: false,
//            title: "",
//            width: 300,
//            height: 150
//        });
//        jQuery("#btnShow").click(function () {
//            jQuery('#dialog').dialog('open');
//        });
//    });
	
//jQuery(function () {
//	jQuery("#dialog1").dialog({
//		modal: true,
//		autoOpen: false,
//		title: "",
//		width: 300,
//		height: 150
//	});
//	jQuery("#units_prefer").click(function () {
//		jQuery('#dialog1').dialog('open');
//	});
//});
	
</script>

<script>
//jQuery(document).ready(function(){
//		
//	jQuery("#units_hide").click(function(){
//	jQuery(".numeric").hide();
//	});
//	
//	jQuery("#units_show").click(function(){
//	jQuery(".numeric").show();
//	});
//});
</script>

<?php wp_footer(); ?>

</body>
</html>
