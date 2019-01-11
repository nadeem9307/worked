<?php
/* Template Name: Home Page */

get_header();
?>
<!-- Top slider -->
<div class="slide_container clearfix">
    <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel"> 
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
        </div>
    </div>
    <div class="location_form container clearfix">
        <div class="row" id="homepage-content">
            <?php
            is_active_sidebar('homepage-content');
            dynamic_sidebar('homepage-content');
            ?>
            <div class="col-sm-4 location-input">
                <div class="map-filter-wrapper">
                    <div class="map-filter filter">
                        <form name="formh" id="formh" method="POST" >
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control"  name="name" id="name" type="text" required="true">
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" name="phone" id="phone" type="number"  required="true">
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" id="email" required="true">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Address of property</label>
                                <input type="text" class="form-control" id="home-input" type="text"  required="true">
                                <div id="map" style="display:none"></div>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group-btn">
                                <button type="button"  class="btn yellow-btn" id="homebutton">Get Cash Offer</button>
                            </div>
                            <!-- /.form-group --> 
                        </form>
                    </div>
                    <!-- /.filter --> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Top slider --> 
<!-- nformation-bar -->
<div class="information-bar  clearfix">
    <div class="container">
        <p><i class="fa fa-star"></i> <?php echo get_theme_mod('booking_now_text'); ?></p>
        <a href="<?php echo get_theme_mod('booking_now_button_link'); ?>" class="btn rounded-btn"><?php echo get_theme_mod('booking_now_button'); ?></a> </div>
    <!-- /.container --> 
</div>
<!-- End nformation-bar --> 
<!-- container_area -->
<section class="container_area clearfix">
    <div class="padding-L-R">
        <div class="col-sm-8">
            <div class="left_section"> 
                <!-- How it works -->
                <div class="how-it-works">
                    <div class="title-head">
                        <h2 class="title"> <?php echo get_theme_mod('our_work_heading_text'); ?></h2>
                        <div class="middle-line"></div>
                    </div>

                    <?php
                    $args = array(
                        'post_type' => 'our_work',
                        'post_status' => 'publish',
                        'posts_per_page' => -1
                    );
                    $posts = get_posts($args);
//                    echo "<pre>";print_r($posts);
                    $i = 1;
                    foreach ($posts as $posts_data) {

                        echo '<div class="works row margin-b-40">
                        <div class="col-sm-4">
                            <div class="steps-icon"> <span>' . $i . '</span> <img src="' . get_the_post_thumbnail_url($posts_data->ID) . '" class="img-responsive"> </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="step-details">
                                <h3 class="sub-titles">' . $posts_data->post_title . ' </h3>
                                <p>' . wp_trim_words($posts_data->post_content, 50) . '. <a class="readmore yellow" href="' . $posts_data->guid . '">ReadMore</a></p>
                            </div>
                        </div>
                    </div>';
                        $i++;
                    }
                    ?>
                </div>
                <!-- End How it works --> 
                <!-- Our Artical -->
                <div class="artical clearfix">
                    <div class="title-head">
                        <h2 class="title"><?php echo get_theme_mod('Our_articals_Heading_text'); ?></h2>
                        <div class="middle-line"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 height-cash ">
                            <h3 class="sub-titles">We Buy Apartments</h3>
                            <p> Welcome to WeBuyApartments.com, the #1 source for selling your apartment complex nationwide.  If you own an Apartment building and are thinking about selling it, then you are in the right place.  We have purchased 100's of properties from sellers just like you.  We can put cash in your pocket quick.  Most of the time, we close and fund apartment deals in under 45 days.  Our time is precious to us, so we will not waste it by offering you 50 cents on the dollar either.  So if you are thinking "I might want to sell my apartment building", then please take 5 minutes to fill out our quick apartment seller info questionaire.  We will then be able to do our due dilgence and give you call to discuss your options.  There is no cost to submit your apartment complex info to us, and no obligation.  
                                We buy apartments in each and every city of every state.  We will buy it whether you are selling a luxury apartment complex with 400 doors in Chicago or a small 5 unit value add apartment oppurtunity in Dallas.  There is no limit the the apartments we purchase.  We have partnerships with investors from around the country that have very deep pockets.  This means that we are always in apartment buying mode.  
                            </p>
                        </div>
                    </div>
                </div>

                <!--Our Artical --> 

            </div>
        </div>
        <div class="col-sm-4 white-bg">
            <div class="right_section">
                <div id="fb-root">
                    <div class="fb-feed">
                        <div class="title-head">
                            <h2 class="title"><?php echo get_theme_mod('facebook_feeds_Heading_text'); ?></h2>
                            <div class="middle-line"></div>
                        </div>
                        <div class="fb-feed">
                            <iframe src="<?php echo get_theme_mod('facebook_feeds_url'); ?>" width="350" height="350" style="border:none;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                        </div>
                    </div>
                </div>
                <!-- Video -->
                <div class="video-sec">
                    <div class="fb-feed">
                        <div class="title-head">
                            <h2 class="title"><?php echo get_theme_mod('our_video_heading') ?></h2>
                            <div class="middle-line"></div>
                        </div>
                    </div>
                    <div class="video"> <a data-toggle="modal" data-target=".bs-example-modal-lg" href="#"> 
                            <!--<source src="<?php // echo get_template_directory_uri();    ?>/video/Austine1.m4v" type="video/mp4">-->
                            <img src="<?php echo get_theme_mod('our_video_image1'); ?>" class="img-responsive">
                            <span><i class="fa fa-play-circle"></i> Play Video</span> </a> </div>
                    <!-- Modal -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <iframe width="560" height="315" src="<?php echo get_template_directory_uri(); ?>/video/Austine1.m4v" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Video --> 
                <!-- Testimonials -->
                <div class="testimonials">
                    <div class="title-head">
                        <h2 class="title"><?php echo get_theme_mod('client_testimonials_Heading_text'); ?></h2>
                        <div class="middle-line"></div>
                    </div>
                    <?php
                    $ar = array(
                        'post_type' => 'our_testimonials',
                        'post_status' => 'publish',
                        'order_by' => 'ID',
                        'order' => 'ASC',
                        'posts_per_page' => -1
                    );
                    $testimonials = get_posts($ar);
//                    print_r($testimonials);
                    foreach ($testimonials as $value) {
                        echo'<div class="testimonials-container">          	
                        <div class="client-description">
                            <span>' . $value->post_content . ' </span>
                        </div>
                        <div class="date">
                            <p> <img src="' . get_the_post_thumbnail_url($value->ID) . '" class="img-responsive"></p>
                            <p> ~ ' . $value->post_title . ' 
                                <span><i class="fa fa-star yellow"></i><i class="fa fa-star yellow"></i><i class="fa fa-star yellow"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span>
                            </p>
                        </div>
                    </div>';
                    }
                    ?>
                </div>
                <!-- End How it works --> 
                <!-- Our Artical -->

                <!--End Testimonials --> 
            </div>
        </div>
    </div>
</div>
</section>
<!--End container_area --> 
<section class="container_area">
    <div class="row padding-L-R">
        <div class="col-sm-12 height-cash text-left apartment-building">
            <h3 class="sub-titles">Selling your apartment building</h3>
            <p>You basically have 2 options when <strong>selling your apartment building</strong>.
                <br>
                <strong>Option #1 </strong>You can sign a listing agreement with a commerical multi-unit broker.
                <br>
                This can be a very expensive sale.&nbsp; As most apartment complex selling brokers charge atleast 6%.&nbsp; If your aparment complex is valued at $1,000,000 then you just gave away $60,000!&nbsp; This is also only the brokers fee.&nbsp; You can easily pay 10% or more when it comes down to it.

                <br>

                <strong>Option #2 </strong>WeBuyApartments.com makes you a <strong>cash offer for your apartment buiding</strong>.
                <br>
                <strong>We buy apartments </strong>as is.&nbsp; This means that we will not require you to fix the roof, or update the units, or pay a crazy brokers fee.&nbsp; We will simply write you an LOI, and submit to you a guaranteed offer.&nbsp; When we say we buy apartments, we really do.&nbsp; We will speak with you over the phone about your complex, and then come out and meet with you in person anywhere in the United States.&nbsp; Once you have agreed that <strong>selling your apartment complex </strong>is the way you want to go, then we will shake hands and put everything on paper.

                <br>

                Here's just a few things that we are looking at when we make our offer on your apartment building.
                <br>
                Cap rate - When you buy houses you often buy based on comps in the neighborhood.&nbsp; However Apartments are a whole different ball game.&nbsp; We are going to <strong>buy your apartment building</strong> based on the current operating cap rate.
                <br>
                Location - <strong>We buy apartments </strong>in any location, rural or urban.&nbsp; However, location still matters in our valuation of your complex.&nbsp; We are going to pay you a dollar amount for your apartment buildings if you are in a higher demand area.
                <br>
                Condition - When people say "We buy ugly houses", they are looking for outdated or houses that are in need of repair.&nbsp; In the <strong>apartment investing </strong>world we call this a Value Add Oppurtunity.&nbsp; We love <strong>buying value add apartments.&nbsp; </strong>This means that we would have an oppunity to upgrade or update the apartment complex to gain higher rent rates and more cash flow.&nbsp; However, if the apartment complex does not need any upgrades or repairs we will pay a higher dollar amount for it since we do not have to do anything.
                <br>


                So what you waiting for?&nbsp; Give us a call today at 214 - 537 -9641 or email us at Austin@WeBuyApartments.com and we would be more than happy to speak with you.&nbsp; We want to discuss your option on <strong>selling your apartment complex</strong>. </p>
        </div>
    </div></section>
<!-- cities -->
<div class="cities-outer-con clearfix">
    <div class="cities-top-bg clearfix"> <img src="<?php echo get_template_directory_uri(); ?>/images/cities-top-bg.png" class="img-responsive pull-right"> </div>
    <div class="container-fluid gray hp-locations">
        <div class="container">
            <div class="location-container by-state">
                <h3>States we buy  <span class="yellow">apartments in</span></h3>
                <?php
                $terms = get_terms(array(
                    'taxonomy' => 'state',
                    'hide_empty' => false,
                ));
//                echo "<pre>";
//                            print_r($terms);
                echo '<ul class="location-list">';
                foreach ($terms as $terms_name) {
                    $term_link = get_term_link($terms_name);

                    echo " <li> <a title='$terms_name->name 'Apartments' href='" . esc_url($term_link) . "'  id='$terms_name->term_id ember611' class='ember-view'>$terms_name->name Apartments</a> </li>";
                }
                echo "</ul>";
                ?>
                <!--                <ul class="location-list">
                
                                    <li> <a title="Alabama Apartments" href="#" id="ember611" class="ember-view">Alabama Apartments</a> </li>
                                    <li> <a title="Alaska Apartments" href="#" id="ember631" class="ember-view">Alaska Apartments</a> </li>
                                    <li> <a title="Arizona Apartments" href="#" id="ember633" class="ember-view">Arizona Apartments</a> </li>
                                    <li> <a title="Arkansas Apartments" href="#" id="ember635" class="ember-view">Arkansas Apartments</a> </li>
                                    <li> <a title="California Apartments" href="#" id="ember637" class="ember-view">California Apartments</a> </li>
                                    <li> <a title="Colorado Apartments" href="#" id="ember639" class="ember-view">Colorado Apartments</a> </li>
                                    <li> <a title="Connecticut Apartments" href="#" id="ember641" class="ember-view">Connecticut Apartments</a> </li>
                                    <li> <a title="Delaware Apartments" href="#" id="ember643" class="ember-view">Delaware Apartments</a> </li>
                                    <li> <a title="Florida Apartments" href="#" id="ember645" class="ember-view">Florida Apartments</a> </li>
                                    <li> <a title="Georgia Apartments" href="#" id="ember647" class="ember-view">Georgia Apartments</a> </li>
                                    <li> <a title="Hawaii Apartments" href="#" id="ember649" class="ember-view">Hawaii Apartments</a> </li>
                                    <li> <a title="Idaho Apartments" href="#" id="ember651" class="ember-view">Idaho Apartments</a> </li>
                                    <li> <a title="Illinois Apartments" href="#" id="ember653" class="ember-view">Illinois Apartments</a> </li>
                                    <li> <a title="Indiana Apartments" href="#" id="ember655" class="ember-view">Indiana Apartments</a> </li>
                                    <li> <a title="Iowa Apartments" href="#" id="ember657" class="ember-view">Iowa Apartments</a> </li>
                                    <li> <a title="Kansas Apartments" href="#" id="ember659" class="ember-view">Kansas Apartments</a> </li>
                                    <li> <a title="Kentucky Apartments" href="#" id="ember661" class="ember-view">Kentucky Apartments</a> </li>
                                    <li> <a title="Louisiana Apartments" href="#" id="ember663" class="ember-view">Louisiana Apartments</a> </li>
                                    <li> <a title="Maine Apartments" href="#" id="ember665" class="ember-view">Maine Apartments</a> </li>
                                    <li> <a title="Maryland Apartments" href="#" id="ember667" class="ember-view">Maryland Apartments</a> </li>
                                    <li> <a title="Massachusetts Apartments" href="#" id="ember669" class="ember-view">Massachusetts Apartments</a> </li>
                                    <li> <a title="Michigan Apartments" href="#" id="ember671" class="ember-view">Michigan Apartments</a> </li>
                                    <li> <a title="Minnesota Apartments" href="#" id="ember673" class="ember-view">Minnesota Apartments</a> </li>
                                    <li> <a title="Mississippi Apartments" href="#" id="ember675" class="ember-view">Mississippi Apartments</a> </li>
                                    <li> <a title="Missouri Apartments" href="#" id="ember677" class="ember-view">Missouri Apartments</a> </li>
                                    <li> <a title="Montana Apartments" href="#" id="ember679" class="ember-view">Montana Apartments</a> </li>
                                    <li> <a title="Nebraska Apartments" href="#" id="ember681" class="ember-view">Nebraska Apartments</a> </li>
                                    <li> <a title="Nevada Apartments" href="#" id="ember683" class="ember-view">Nevada Apartments</a> </li>
                                    <li> <a title="New Hampshire Apartments" href="#" id="ember685" class="ember-view">New Hampshire Apartments</a> </li>
                                    <li> <a title="New Jersey Apartments" href="#" id="ember687" class="ember-view">New Jersey Apartments</a> </li>
                                    <li> <a title="New Mexico Apartments" href="#" id="ember689" class="ember-view">New Mexico Apartments</a> </li>
                                    <li> <a title="New York Apartments" href="#" id="ember691" class="ember-view">New York Apartments</a> </li>
                                    <li> <a title="North Carolina Apartments" href="#" id="ember693" class="ember-view">North Carolina Apartments</a> </li>
                                    <li> <a title="North Dakota Apartments" href="#" id="ember695" class="ember-view">North Dakota Apartments</a> </li>
                                    <li> <a title="Ohio Apartments" href="#" class="ember-view">Ohio Apartments</a> </li>
                                    <li> <a title="Oklahoma Apartments" href="/countries/united-states/states/oklahoma" id="ember699" class="ember-view">Oklahoma Apartments</a> </li>
                                    <li> <a title="Oregon Apartments" href="/countries/united-states/states/oregon" id="ember701" class="ember-view">Oregon Apartments</a> </li>
                                    <li> <a title="Pennsylvania Apartments" href="/countries/united-states/states/pennsylvania" id="ember703" class="ember-view">Pennsylvania Apartments</a> </li>
                                    <li> <a title="Rhode Island Apartments" href="/countries/united-states/states/rhode-island" id="ember705" class="ember-view">Rhode Island Apartments</a> </li>
                                    <li> <a title="South Carolina Apartments" href="/countries/united-states/states/south-carolina" id="ember707" class="ember-view">South Carolina Apartments</a> </li>
                                    <li> <a title="South Dakota Apartments" href="/countries/united-states/states/south-dakota" id="ember709" class="ember-view">South Dakota Apartments</a> </li>
                                    <li> <a title="Tennessee Apartments" href="/countries/united-states/states/tennessee" id="ember711" class="ember-view">Tennessee Apartments</a> </li>
                                    <li> <a title="Texas Apartments" href="/countries/united-states/states/texas" id="ember713" class="ember-view">Texas Apartments</a> </li>
                                    <li> <a title="Utah Apartments" href="/countries/united-states/states/utah" id="ember715" class="ember-view">Utah Apartments</a> </li>
                                    <li> <a title="Vermont Apartments" href="/countries/united-states/states/vermont" id="ember717" class="ember-view">Vermont Apartments</a> </li>
                                    <li> <a title="Virginia Apartments" href="/countries/united-states/states/virginia" id="ember719" class="ember-view">Virginia Apartments</a> </li>
                                    <li> <a title="Washington Apartments" href="/countries/united-states/states/washington" id="ember721" class="ember-view">Washington Apartments</a> </li>
                                    <li> <a title="West Virginia Apartments" href="/countries/united-states/states/west-virginia" id="ember723" class="ember-view">West Virginia Apartments</a> </li>
                                    <li> <a title="Wisconsin Apartments" href="/countries/united-states/states/wisconsin" id="ember725" class="ember-view">Wisconsin Apartments</a> </li>
                                    <li> <a title="Wyoming Apartments" href="/countries/united-states/states/wyoming" id="ember727" class="ember-view">Wyoming Apartments</a> </li>
                                </ul>-->
            </div>
            <div class="location-container by-city">
                <h3>Cities we buy <span class="yellow"> apartments in</span></h3>
                <?php
                $args = array('category' => 'state', 'post_type' => 'city', 'post_status' => 'publish','posts_per_page' => 100 );
                $postslist = get_posts($args);
                echo '<ul class="location-list">';
//                echo "<pre>";
//                print_r($postslist);
//                echo "</pre>";
                foreach ($postslist as $postslist) {
                
                echo '<li> <a title="'.$postslist->post_title.' Apartments" href="'.$postslist->guid.'" id="'.$postslist->ID.' ember729" class="ember-view">'.$postslist->post_title.' Apartments</a> </li>';

                    
                }

                echo '</ul>';
                ?>
<!--                <ul class="location-list">
                    <li> <a title="Albany Apartments" href="/cities/Albany" id="ember729" class="ember-view">Albany Apartments</a> </li>
                    <li> <a title="Albuquerque Apartments" href="/cities/Albuquerque" id="ember739" class="ember-view">Albuquerque Apartments</a> </li>
                    <li> <a title="Allen Apartments" href="/cities/Allen" id="ember741" class="ember-view">Allen Apartments</a> </li>
                    <li> <a title="Anchorage Apartments" href="/cities/Anchorage" id="ember743" class="ember-view">Anchorage Apartments</a> </li>
                    <li> <a title="Anderson Apartments" href="/cities/Anderson" id="ember745" class="ember-view">Anderson Apartments</a> </li>
                    <li> <a title="Appleton Apartments" href="/cities/Appleton" id="ember747" class="ember-view">Appleton Apartments</a> </li>
                    <li> <a title="Arkansas City Apartments" href="/cities/Arkansas%20City" id="ember749" class="ember-view">Arkansas City Apartments</a> </li>
                    <li> <a title="Asheville Apartments" href="/cities/Asheville" id="ember751" class="ember-view">Asheville Apartments</a> </li>
                    <li> <a title="Ashland Apartments" href="/cities/Ashland" id="ember753" class="ember-view">Ashland Apartments</a> </li>
                    <li> <a title="Atlanta Apartments" href="/cities/Atlanta" id="ember755" class="ember-view">Atlanta Apartments</a> </li>
                    <li> <a title="Aurora Apartments" href="/cities/Aurora" id="ember757" class="ember-view">Aurora Apartments</a> </li>
                    <li> <a title="Austin Apartments" href="/cities/Austin" id="ember759" class="ember-view">Austin Apartments</a> </li>
                    <li> <a title="Beeville Apartments" href="/cities/Beeville" id="ember761" class="ember-view">Beeville Apartments</a> </li>
                    <li> <a title="Belfast Apartments" href="/cities/Belfast" id="ember763" class="ember-view">Belfast Apartments</a> </li>
                    <li> <a title="Bellingham Apartments" href="/cities/Bellingham" id="ember765" class="ember-view">Bellingham Apartments</a> </li>
                    <li> <a title="Bend Apartments" href="/cities/Bend" id="ember767" class="ember-view">Bend Apartments</a> </li>
                    <li> <a title="Berkeley Apartments" href="/cities/Berkeley" id="ember769" class="ember-view">Berkeley Apartments</a> </li>
                    <li> <a title="Birmingham Apartments" href="/cities/Birmingham" id="ember771" class="ember-view">Birmingham Apartments</a> </li>
                    <li> <a title="Boise Apartments" href="/cities/Boise" id="ember773" class="ember-view">Boise Apartments</a> </li>
                    <li> <a title="Boulder Apartments" href="/cities/Boulder" id="ember775" class="ember-view">Boulder Apartments</a> </li>
                    <li> <a title="Bozeman Apartments" href="/cities/Bozeman" id="ember777" class="ember-view">Bozeman Apartments</a> </li>
                    <li> <a title="Caldwell Apartments" href="/cities/Caldwell" id="ember779" class="ember-view">Caldwell Apartments</a> </li>
                    <li> <a title="Calgary Apartments" href="/cities/Calgary" id="ember781" class="ember-view">Calgary Apartments</a> </li>
                    <li> <a title="Canyon Lake Apartments" href="/cities/Canyon%20Lake" id="ember783" class="ember-view">Canyon Lake Apartments</a> </li>
                    <li> <a title="Charlotte Apartments" href="/cities/Charlotte" id="ember785" class="ember-view">Charlotte Apartments</a> </li>
                    <li> <a title="Chattanooga Apartments" href="/cities/Chattanooga" id="ember787" class="ember-view">Chattanooga Apartments</a> </li>
                    <li> <a title="Chicago Apartments" href="/cities/Chicago" id="ember789" class="ember-view">Chicago Apartments</a> </li>
                    <li> <a title="Chico Apartments" href="/cities/Chico" id="ember791" class="ember-view">Chico Apartments</a> </li>
                    <li> <a title="Collierville Apartments" href="/cities/Collierville" id="ember793" class="ember-view">Collierville Apartments</a> </li>
                    <li> <a title="Colorado Springs Apartments" href="/cities/Colorado%20Springs" id="ember795" class="ember-view">Colorado Springs Apartments</a> </li>
                    <li> <a title="Columbus Apartments" href="/cities/Columbus" id="ember797" class="ember-view">Columbus Apartments</a> </li>
                    <li> <a title="Concord Apartments" href="/cities/Concord" id="ember799" class="ember-view">Concord Apartments</a> </li>
                    <li> <a title="Dallas Apartments" href="/cities/Dallas" id="ember801" class="ember-view">Dallas Apartments</a> </li>
                    <li> <a title="Danville Apartments" href="/cities/Danville" id="ember803" class="ember-view">Danville Apartments</a> </li>
                    <li> <a title="Delta Apartments" href="/cities/Delta" id="ember805" class="ember-view">Delta Apartments</a> </li>
                    <li> <a title="Denver Apartments" href="/cities/Denver" id="ember807" class="ember-view">Denver Apartments</a> </li>
                    <li> <a title="Durango Apartments" href="/cities/Durango" id="ember809" class="ember-view">Durango Apartments</a> </li>
                    <li> <a title="Ehrenberg Apartments" href="/cities/Ehrenberg" id="ember811" class="ember-view">Ehrenberg Apartments</a> </li>
                    <li> <a title="Ellijay Apartments" href="/cities/Ellijay" id="ember813" class="ember-view">Ellijay Apartments</a> </li>
                    <li> <a title="Eugene Apartments" href="/cities/Eugene" id="ember815" class="ember-view">Eugene Apartments</a> </li>
                    <li> <a title="Flagstaff Apartments" href="/cities/Flagstaff" id="ember817" class="ember-view">Flagstaff Apartments</a> </li>
                    <li> <a title="Fort Collins Apartments" href="/cities/Fort%20Collins" id="ember819" class="ember-view">Fort Collins Apartments</a> </li>
                    <li> <a title="Fort Worth Apartments" href="/cities/Fort%20Worth" id="ember821" class="ember-view">Fort Worth Apartments</a> </li>
                    <li> <a title="Franklin Apartments" href="/cities/Franklin" id="ember823" class="ember-view">Franklin Apartments</a> </li>
                    <li> <a title="Fredericksburg Apartments" href="/cities/Fredericksburg" id="ember825" class="ember-view">Fredericksburg Apartments</a> </li>
                    <li> <a title="Houston Apartments" href="/cities/Houston" id="ember827" class="ember-view">Houston Apartments</a> </li>
                    <li> <a title="Indianapolis Apartments" href="/cities/Indianapolis" id="ember829" class="ember-view">Indianapolis Apartments</a> </li>
                    <li> <a title="Jackson Apartments" href="/cities/Jackson" id="ember831" class="ember-view">Jackson Apartments</a> </li>
                    <li> <a title="Jacksonville Apartments" href="/cities/Jacksonville" id="ember833" class="ember-view">Jacksonville Apartments</a> </li>
                    <li> <a title="Kansas City Apartments" href="/cities/Kansas%20City" id="ember835" class="ember-view">Kansas City Apartments</a> </li>
                    <li> <a title="Knoxville Apartments" href="/cities/Knoxville" id="ember837" class="ember-view">Knoxville Apartments</a> </li>
                    <li> <a title="Krupp Apartments" href="/cities/Krupp" id="ember839" class="ember-view">Krupp Apartments</a> </li>
                    <li> <a title="La Pine Apartments" href="/cities/La%20Pine" id="ember841" class="ember-view">La Pine Apartments</a> </li>
                    <li> <a title="Lafayette Apartments" href="/cities/Lafayette" id="ember843" class="ember-view">Lafayette Apartments</a> </li>
                    <li> <a title="Las Vegas Apartments" href="/cities/Las%20Vegas" id="ember845" class="ember-view">Las Vegas Apartments</a> </li>
                    <li> <a title="Littleton Apartments" href="/cities/Littleton" id="ember847" class="ember-view">Littleton Apartments</a> </li>
                    <li> <a title="Los Angeles Apartments" href="/cities/Los%20Angeles" id="ember849" class="ember-view">Los Angeles Apartments</a> </li>
                    <li> <a title="Louisville Apartments" href="/cities/Louisville" id="ember851" class="ember-view">Louisville Apartments</a> </li>
                    <li> <a title="Lynnwood Apartments" href="/cities/Lynnwood" id="ember853" class="ember-view">Lynnwood Apartments</a> </li>
                    <li> <a title="Madison Apartments" href="/cities/Madison" id="ember855" class="ember-view">Madison Apartments</a> </li>
                    <li> <a title="Medford Apartments" href="/cities/Medford" id="ember857" class="ember-view">Medford Apartments</a> </li>
                    <li> <a title="Miami Apartments" href="/cities/Miami" id="ember859" class="ember-view">Miami Apartments</a> </li>
                    <li> <a title="Montrose Apartments" href="/cities/Montrose" id="ember861" class="ember-view">Montrose Apartments</a> </li>
                    <li> <a title="Morrison Apartments" href="/cities/Morrison" id="ember863" class="ember-view">Morrison Apartments</a> </li>
                    <li> <a title="Morristown Apartments" href="/cities/Morristown" id="ember865" class="ember-view">Morristown Apartments</a> </li>
                    <li> <a title="Mountain View Apartments" href="/cities/Mountain%20View" id="ember867" class="ember-view">Mountain View Apartments</a> </li>
                    <li> <a title="Nanaimo Apartments" href="/cities/Nanaimo" id="ember869" class="ember-view">Nanaimo Apartments</a> </li>
                    <li> <a title="Nashville Apartments" href="/cities/Nashville" id="ember871" class="ember-view">Nashville Apartments</a> </li>
                    <li> <a title="Norcross Apartments" href="/cities/Norcross" id="ember873" class="ember-view">Norcross Apartments</a> </li>
                    <li> <a title="Norfolk Apartments" href="/cities/Norfolk" id="ember875" class="ember-view">Norfolk Apartments</a> </li>
                    <li> <a title="Oakland Apartments" href="/cities/Oakland" id="ember877" class="ember-view">Oakland Apartments</a> </li>
                    <li> <a title="Oceanside Apartments" href="/cities/Oceanside" id="ember879" class="ember-view">Oceanside Apartments</a> </li>
                    <li> <a title="Olympia Apartments" href="/cities/Olympia" id="ember881" class="ember-view">Olympia Apartments</a> </li>
                    <li> <a title="Orlando Apartments" href="/cities/Orlando" id="ember883" class="ember-view">Orlando Apartments</a> </li>
                    <li> <a title="Pagosa Springs Apartments" href="/cities/Pagosa%20Springs" id="ember885" class="ember-view">Pagosa Springs Apartments</a> </li>
                    <li> <a title="Park City Apartments" href="/cities/Park%20City" id="ember887" class="ember-view">Park City Apartments</a> </li>
                    <li> <a title="Phoenix Apartments" href="/cities/Phoenix" id="ember889" class="ember-view">Phoenix Apartments</a> </li>
                    <li> <a title="Portland Apartments" href="/cities/Portland" id="ember891" class="ember-view">Portland Apartments</a> </li>
                    <li> <a title="Reno Apartments" href="/cities/Reno" id="ember893" class="ember-view">Reno Apartments</a> </li>
                    <li> <a title="Sacramento Apartments" href="/cities/Sacramento" id="ember895" class="ember-view">Sacramento Apartments</a> </li>
                    <li> <a title="Salem Apartments" href="/cities/Salem" id="ember897" class="ember-view">Salem Apartments</a> </li>
                    <li> <a title="Salt Lake City Apartments" href="/cities/Salt%20Lake%20City" id="ember899" class="ember-view">Salt Lake City Apartments</a> </li>
                    <li> <a title="San Antonio Apartments" href="/cities/San%20Antonio" id="ember901" class="ember-view">San Antonio Apartments</a> </li>
                    <li> <a title="San Diego Apartments" href="/cities/San%20Diego" id="ember903" class="ember-view">San Diego Apartments</a> </li>
                    <li> <a title="San Francisco Apartments" href="/cities/San%20Francisco" id="ember905" class="ember-view">San Francisco Apartments</a> </li>
                    <li> <a title="Santa Fe Apartments" href="/cities/Santa%20Fe" id="ember907" class="ember-view">Santa Fe Apartments</a> </li>
                    <li> <a title="Seattle Apartments" href="/cities/Seattle" id="ember909" class="ember-view">Seattle Apartments</a> </li>
                    <li> <a title="Sebastopol Apartments" href="/cities/Sebastopol" id="ember911" class="ember-view">Sebastopol Apartments</a> </li>
                    <li> <a title="South Londonderry Apartments" href="/cities/South%20Londonderry" id="ember913" class="ember-view">South Londonderry Apartments</a> </li>
                    <li> <a title="Spearfish Apartments" href="/cities/Spearfish" id="ember915" class="ember-view">Spearfish Apartments</a> </li>
                    <li> <a title="Spokane Apartments" href="/cities/Spokane" id="ember917" class="ember-view">Spokane Apartments</a> </li>
                    <li> <a title="Springfield Apartments" href="/cities/Springfield" id="ember919" class="ember-view">Springfield Apartments</a> </li>
                    <li> <a title="Tacoma Apartments" href="/cities/Tacoma" id="ember921" class="ember-view">Tacoma Apartments</a> </li>
                    <li> <a title="Tampa Apartments" href="/cities/Tampa" id="ember923" class="ember-view">Tampa Apartments</a> </li>
                    <li> <a title="Taos Apartments" href="/cities/Taos" id="ember925" class="ember-view">Taos Apartments</a> </li>
                    <li> <a title="Tulsa Apartments" href="/cities/Tulsa" id="ember927" class="ember-view">Tulsa Apartments</a> </li>
                    <li> <a title="Vancouver Apartments" href="/cities/Vancouver" id="ember929" class="ember-view">Vancouver Apartments</a> </li>
                    <li> <a title="Washington Apartments" href="/cities/Washington" id="ember931" class="ember-view">Washington Apartments</a> </li>
                    <li> <a title="Webster Apartments" href="/cities/Webster" id="ember933" class="ember-view">Webster Apartments</a> </li>
                    <li> <a title="Westcliffe Apartments" href="/cities/Westcliffe" id="ember935" class="ember-view">Westcliffe Apartments</a> </li>
                </ul>-->
            </div>
        </div>
    </div>
    <!--End cities -->
    <div class="cities-bottom-bg clearfix"> <img src="<?php echo get_template_directory_uri(); ?>/images/cities-bottom-bg.png" class="img-responsive pull-left"> </div>
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
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 39.737041, lng: -94.811171},
            zoom: 13
        });

        var input = document.getElementById('home-input');

        var autocomplete = new google.maps.places.Autocomplete(
                input, {placeIdOnly: true});
        autocomplete.bindTo('bounds', map);

        //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var geocoder = new google.maps.Geocoder;
        var marker = new google.maps.Marker({
            map: map
        });
        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });

        autocomplete.addListener('place_changed', function () {
            infowindow.close();
            var place = autocomplete.getPlace();

            if (!place.place_id) {
                return;
            }
            geocoder.geocode({'placeId': place.place_id}, function (results, status) {

                if (status !== 'OK') {
                    window.alert('Geocoder failed due to: ' + status);
                    return;
                }
                map.setZoom(11);
                map.setCenter(results[0].geometry.location);
                // Set the position of the marker using the place ID and location.
                marker.setPlace({
                    placeId: place.place_id,
                    location: results[0].geometry.location
                });
                marker.setVisible(true);
                infowindowContent.children['place-name'].textContent = place.name;
                infowindowContent.children['place-id'].textContent = place.place_id;
                infowindowContent.children['place-address'].textContent =
                        results[0].formatted_address;
                infowindow.open(map, marker);
            });
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-U3ssJplJzFxII0WA2NjJNI96HvET694&libraries=places&callback=initMap"async defer></script>
<?php get_footer(); ?>
