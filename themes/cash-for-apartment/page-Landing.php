<?php
/* Template Name: Landing Page */
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
get_header();
?>

<div class="section_2 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 sell-your-phone">
<?php echo get_theme_mod('top_header_text'); ?>
                <!--        <h1>Sell your phone</h1>
                        <span>for more cash</span>
                        <p>Our only goal at Vandelay Properties is to give our clients a<br/ >
                          VIP experience making their dream home a reality.</p>-->
            </div>
        </div>
    </div>
</div>
<div class="section_3 clearfix">
    <div class="container-experience">
        <div class="row">
            <div class="col-md-9">
                <div class="left-side-img col-xs-12"> <img src="<?php echo get_theme_mod('first_image1'); ?>" class="img-responsive"/> </div>
                <div class="selling-experience col-xs-12">
                        <?php echo get_theme_mod('first_image1_content'); ?>

                </div>
                <div class="we-buy-houses">
                    <?php echo get_theme_mod('content_first_arrow'); ?>
                </div>
                <div class="whether-searching">
                    <div class="dreem-home">
                    <?php echo get_theme_mod('image_section2_content'); ?>
                       </div>
                    <div class="right-dreem"> <img src="<?php echo get_theme_mod('image_section2'); ?>"> </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 consultation-list">
                <div class="request-free">
                <?php echo do_shortcode('[contact-form-7 id="105" title="Contact form 1"]'); ?>
        
                </div>
                <div class="loction-map" id="google-content">
                    <?php
                    is_active_sidebar('google-content');
                    dynamic_sidebar('google-content');
                    ?>
                </div>
                <!--        <div class="loction-map">
                          <h3>Loction</h3>
                          <p>5575 Sunnyside Drive, City, ST 85202</p>
                          [ank_google_map]
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3111.2536468885814!2d-77.18508718504324!3d38.75788597959239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7ad3800377e3b%3A0x81217d3a59c04b66!2sLoisdale+Rd%2C+Springfield%2C+VA+22150%2C+USA!5e0!3m2!1sen!2sin!4v1518090477444" width="100%" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>-->
                <!-- Video -->
                <div class="video-sec">
                    <div class="fb-feed">
                        <div class="title-head">
                            <h2 class="title"><?php echo get_theme_mod('our_video_heading') ?></h2>
                            <div class="middle-line"></div>
                        </div>
                    </div>
                    <div class="video"> <a data-toggle="modal" data-target=".bs-example-modal-lg" href="#"> <img src="<?php echo get_theme_mod('our_video_image1'); ?>" class="img-responsive">
                            <span><i class="fa fa-play-circle"></i> Play Video</span> </a> </div>
                    <!-- Modal -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <iframe width="560" height="315" src="<?php echo get_theme_mod('our_video_link') ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Video --> 

            </div>
        </div>
    </div>
</div>
<div class="section_5 clearfix">
    <div class="">
        <div class="col-md-6 left-cities-near">
            <h1>Cities near by links</h1>
            <ul class="location-list col-sm-6">
                <li> <a title="Alabama Tiny Houses" href="/countries/united-states/states/alabama" id="ember616" class="ember-view">Alabama Tiny Houses</a> </li>
                <li> <a title="Alaska Tiny Houses" href="/countries/united-states/states/alaska" id="ember636" class="ember-view">Alaska Tiny Houses</a> </li>
                <li> <a title="Arizona Tiny Houses" href="/countries/united-states/states/arizona" id="ember638" class="ember-view">Arizona Tiny Houses</a> </li>
                <li> <a title="Arkansas Tiny Houses" href="/countries/united-states/states/arkansas" id="ember640" class="ember-view">Arkansas Tiny Houses</a> </li>
                <li> <a title="California Tiny Houses" href="/countries/united-states/states/california" id="ember642" class="ember-view">California Tiny Houses</a> </li>
                <li> <a title="Colorado Tiny Houses" href="/countries/united-states/states/colorado" id="ember644" class="ember-view">Colorado Tiny Houses</a> </li>
                <li> <a title="Connecticut Tiny Houses" href="/countries/united-states/states/connecticut" id="ember646" class="ember-view">Connecticut Tiny Houses</a> </li>
                <li> <a title="Delaware Tiny Houses" href="/countries/united-states/states/delaware" id="ember648" class="ember-view">Delaware Tiny Houses</a> </li>
                <li> <a title="Florida Tiny Houses" href="/countries/united-states/states/florida" id="ember650" class="ember-view">Florida Tiny Houses</a> </li>
                <li> <a title="Georgia Tiny Houses" href="/countries/united-states/states/georgia" id="ember652" class="ember-view">Georgia Tiny Houses</a> </li>
                <li> <a title="Hawaii Tiny Houses" href="/countries/united-states/states/hawaii" id="ember654" class="ember-view">Hawaii Tiny Houses</a> </li>
                <li> <a title="Idaho Tiny Houses" href="/countries/united-states/states/idaho" id="ember656" class="ember-view">Idaho Tiny Houses</a> </li>
                <li> <a title="Illinois Tiny Houses" href="/countries/united-states/states/illinois" id="ember658" class="ember-view">Illinois Tiny Houses</a> </li>
                <li> <a title="Indiana Tiny Houses" href="/countries/united-states/states/indiana" id="ember660" class="ember-view">Indiana Tiny Houses</a> </li>
            </ul>
            <ul class="location-list col-sm-6">
                <li> <a title="Alabama Tiny Houses" href="/countries/united-states/states/alabama" id="ember616" class="ember-view">Alabama Tiny Houses</a> </li>
                <li> <a title="Alaska Tiny Houses" href="/countries/united-states/states/alaska" id="ember636" class="ember-view">Alaska Tiny Houses</a> </li>
                <li> <a title="Arizona Tiny Houses" href="/countries/united-states/states/arizona" id="ember638" class="ember-view">Arizona Tiny Houses</a> </li>
                <li> <a title="Arkansas Tiny Houses" href="/countries/united-states/states/arkansas" id="ember640" class="ember-view">Arkansas Tiny Houses</a> </li>
                <li> <a title="California Tiny Houses" href="/countries/united-states/states/california" id="ember642" class="ember-view">California Tiny Houses</a> </li>
                <li> <a title="Colorado Tiny Houses" href="/countries/united-states/states/colorado" id="ember644" class="ember-view">Colorado Tiny Houses</a> </li>
                <li> <a title="Connecticut Tiny Houses" href="/countries/united-states/states/connecticut" id="ember646" class="ember-view">Connecticut Tiny Houses</a> </li>
                <li> <a title="Delaware Tiny Houses" href="/countries/united-states/states/delaware" id="ember648" class="ember-view">Delaware Tiny Houses</a> </li>
                <li> <a title="Florida Tiny Houses" href="/countries/united-states/states/florida" id="ember650" class="ember-view">Florida Tiny Houses</a> </li>
                <li> <a title="Georgia Tiny Houses" href="/countries/united-states/states/georgia" id="ember652" class="ember-view">Georgia Tiny Houses</a> </li>
                <li> <a title="Hawaii Tiny Houses" href="/countries/united-states/states/hawaii" id="ember654" class="ember-view">Hawaii Tiny Houses</a> </li>
                <li> <a title="Idaho Tiny Houses" href="/countries/united-states/states/idaho" id="ember656" class="ember-view">Idaho Tiny Houses</a> </li>
                <li> <a title="Illinois Tiny Houses" href="/countries/united-states/states/illinois" id="ember658" class="ember-view">Illinois Tiny Houses</a> </li>
                <li> <a title="Indiana Tiny Houses" href="/countries/united-states/states/indiana" id="ember660" class="ember-view">Indiana Tiny Houses</a> </li>
            </ul>
        </div>
        <div class="col-md-6 zip-code-city">
            <h1>Zip code in the city</h1>
            <ul class="location-list col-sm-6">
                <li> <a title="Alabama Tiny Houses" href="/countries/united-states/states/alabama" id="ember616" class="ember-view">Ambato</a> </li>
                <li> <a title="Alaska Tiny Houses" href="/countries/united-states/states/alaska" id="ember636" class="ember-view">Arajuno</a> </li>
                <li> <a title="Arizona Tiny Houses" href="/countries/united-states/states/arizona" id="ember638" class="ember-view">Babahoyo</a> </li>
                <li> <a title="Arkansas Tiny Houses" href="/countries/united-states/states/arkansas" id="ember640" class="ember-view">BahÃ­a de CarÃ¡quez</a> </li>
                <li> <a title="California Tiny Houses" href="/countries/united-states/states/california" id="ember642" class="ember-view">BaÃ±os de Agua Santa</a> </li>
                <li> <a title="Colorado Tiny Houses" href="/countries/united-states/states/colorado" id="ember644" class="ember-view">Cuenca</a> </li>
                <li> <a title="Connecticut Tiny Houses" href="/countries/united-states/states/connecticut" id="ember646" class="ember-view">DurÃ¡n</a> </li>
                <li> <a title="Delaware Tiny Houses" href="/countries/united-states/states/delaware" id="ember648" class="ember-view">Esmeraldas</a> </li>
                <li> <a title="Florida Tiny Houses" href="/countries/united-states/states/florida" id="ember650" class="ember-view">Guaranda</a> </li>
                <li> <a title="Georgia Tiny Houses" href="/countries/united-states/states/georgia" id="ember652" class="ember-view">Guayaquil</a> </li>
                <li> <a title="Hawaii Tiny Houses" href="/countries/united-states/states/hawaii" id="ember654" class="ember-view">BahÃ­a de CarÃ¡quez</a> </li>
                <li> <a title="Idaho Tiny Houses" href="/countries/united-states/states/idaho" id="ember656" class="ember-view">BaÃ±os de Agua Santa</a> </li>
            </ul>
            <ul class="location-list-number col-sm-6">
                <li> <a title="Alabama Tiny Houses" href="/countries/united-states/states/alabama" id="ember616" class="ember-view">023414</a> </li>
                <li> <a title="Alaska Tiny Houses" href="/countries/united-states/states/alaska" id="ember636" class="ember-view">023414</a> </li>
                <li> <a title="Arizona Tiny Houses" href="/countries/united-states/states/arizona" id="ember638" class="ember-view">023414</a> </li>
                <li> <a title="Arkansas Tiny Houses" href="/countries/united-states/states/arkansas" id="ember640" class="ember-view">023414</a> </li>
                <li> <a title="California Tiny Houses" href="/countries/united-states/states/california" id="ember642" class="ember-view">023414</a> </li>
                <li> <a title="Colorado Tiny Houses" href="/countries/united-states/states/colorado" id="ember644" class="ember-view">023414</a> </li>
                <li> <a title="Connecticut Tiny Houses" href="/countries/united-states/states/connecticut" id="ember646" class="ember-view">023414</a> </li>
                <li> <a title="Delaware Tiny Houses" href="/countries/united-states/states/delaware" id="ember648" class="ember-view">023414</a> </li>
                <li> <a title="Florida Tiny Houses" href="/countries/united-states/states/florida" id="ember650" class="ember-view">023414</a> </li>
                <li> <a title="Georgia Tiny Houses" href="/countries/united-states/states/georgia" id="ember652" class="ember-view">023414</a> </li>
                <li> <a title="Hawaii Tiny Houses" href="/countries/united-states/states/hawaii" id="ember654" class="ember-view">023414</a> </li>
                <li> <a title="Idaho Tiny Houses" href="/countries/united-states/states/idaho" id="ember656" class="ember-view">023414</a> </li>
                <li> <a title="Illinois Tiny Houses" href="/countries/united-states/states/illinois" id="ember658" class="ember-view">023414</a> </li>
                <li> <a title="Indiana Tiny Houses" href="/countries/united-states/states/indiana" id="ember660" class="ember-view">023414</a> </li>
            </ul>
        </div>
    </div>
</div>
<!-- Footer -->
<section class="module cta newsletter"><!-- newsletter -->
    <div class="container">
        <div class="row" id="footer-sidebar-6">
            <?php
            is_active_sidebar('footer-sidebar-6');
            dynamic_sidebar('footer-sidebar-6');
            ?>
        </div>
        <!-- end row --> 
    </div>
    <!-- end container --> 
</section>
<!-- End newsletter -->

<?php get_footer(); ?>