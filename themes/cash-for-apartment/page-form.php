<?php
/* Template Name: Form Page */

get_header();
?>
<!-- Form -->
<div id="lead-gen-form" class="confidential-form">
    <div class="form-bg">
        <?php echo get_theme_mod('lead_generation_page_top_content'); ?>
    </div>
    <div class="container">    
        <div class="information-required">
            <div class="confidential-required">
                <form>
                    <div class="form-group">
                        <label for="usr" class="pro-perty">Property Questionnaire</label>
                        <p> Complete this form to provide your apartment building's profile, so that an offer can be generated. Attach any pertinent files you feel should be considered for a review of the value or of the opportunity your property presents to a buyer.</p>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="name">Name*</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required="true" value="">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email-id" required="true" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="phone">Phone*</label>
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter your Phone no." required="true" value="">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="apartmentname">Name of Apartments*</label>
                            <input type="text" class="form-control" name="apartmentname" id="apartmentname" placeholder="Property Name" required="true" value="">
                        </div>
                    </div>
                    <div class="row">

                        <div class="form-group col-sm-6">
                            <label for="apartmentaddress"> Property Address*</label>
                            <p>Please fill out full address with state city and zip</p>
                            <input id="pac-input" class="form-control" type="text" name="apartmentaddress" id="apartmentaddress"placeholder="Enter a location" value="">
                            <div id="map" style="display:none"></div>
                            <!--<textarea type="text" rows="5" class="form-control" name="apartmentaddress" id="apartmentaddress" placeholder="Property Address" required="true"></textarea>-->
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="noofunit">Number of Units *</label>
                            <input type="text" class="form-control" name="noofunit" id="noofunit" placeholder="Number of Units" required="true" value="">
                        </div>
                    </div>
                    <div class="row">

                        <div class="form-group col-sm-6">
                            <label for="noofvacancy">Number of Vacancies *</label>
                            <input type="text" class="form-control" name="noofvacancy" id="noofvacancy" placeholder="Number of Vacancies" required="true" value="">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="ownapartment">Do you own apartments now? *</label>
                            <select class="form-control" name="ownapartment" id="ownapartment" required="true">
                                <option>Yes</option>
                                <option>No</option>
                            </select>

                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="noofstories">Number of Stories *</label>
                            <input type="text" class="form-control" name="noofstories" id="noofstories" placeholder="Number of Stories" required="true" value="">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="apartmentclass">What class apartments *</label>
                            <select class="form-control" name="apartmentclass" id="apartmentclass" required="true" >
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="condition">Condition of property (please elaborate) * </label>
                        <textarea type="text" rows="5" name="condition" class="form-control" id="condition" required="true" ></textarea>
                    </div>

                    <div class="form-group">
                        <label for="electric">Electric Utility *</label>
                        <p>Who pays utility for the living units?</p>
                        <select class="form-control" name="electric" id="electric" required="true">
                            <option>Please select an option</option>
                            <option>Owner</option>
                            <option>Tenant</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="gas">Gas Utility *</label>
                        <p>Who pays utility for the living units?</p>
                        <select class="form-control" name="gas" id="gas" required="true">
                            <option>Please select an option</option>
                            <option>Owner</option>
                            <option>Tenant</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="water">Water Utility *</label>
                        <p>Who pays utility for the living units?</p>
                        <select class="form-control" name="water" id="water" required="true" >
                            <option>Please select an option</option>
                            <option>Owner</option>
                            <option>Tenant</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="usr">Annual Gross Revenue *</label>
                        <!--<p>Please provide the Annual Net Operating Income. This should be the ACTUAL net income from the last 12 months trailing. If not trailing, it should be the NOI from the most recent calendar year showing 12 months of income minus expenses.</p>-->
                        <div class="input-group" data-reactid=".0.0:$16.$net-operating-income.1.0">
                            <span class="input-group-addon" data-reactid=".0.0:$16.$net-operating-income.1.0.0">
                                <select name="fields[net-operating-income][currency]"  class="webforms__select" data-reactid=".0.0:$16.$net-operating-income.1.0.0.0" required="true">
                                    <option value="USD" data-reactid=".0.0:$16.$net-operating-income.1.0.0.0.$USD">USD</option>
                                    <option value="EUR" data-reactid=".0.0:$16.$net-operating-income.1.0.0.0.$EUR">EUR</option>
                                </select>
                            </span>
                            <input type="number" name="fields[net-operating-income][value]" step="0.01" id="AnnualGrossRevenue" required class="form-control number-field" data-reactid=".0.0:$16.$net-operating-income.1.0.1" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="usr">Annual Expenses *</label>
                        <div class="input-group" data-reactid=".0.0:$16.$net-operating-income.1.0">
                            <span class="input-group-addon" data-reactid=".0.0:$16.$net-operating-income.1.0.0">
                                <select name="fields[net-operating-income][currency]" class="webforms__select" data-reactid=".0.0:$16.$net-operating-income.1.0.0.0" required="true">
                                    <option value="USD" data-reactid=".0.0:$16.$net-operating-income.1.0.0.0.$USD">USD</option>
                                    <option value="EUR" data-reactid=".0.0:$16.$net-operating-income.1.0.0.0.$EUR">EUR</option>
                                </select>
                            </span>
                            <input type="number" name="fields[net-operating-income][value]" step="0.01" id="AnnualExpenses" class="form-control number-field" data-reactid=".0.0:$16.$net-operating-income.1.0.1" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="usr">Annual Net Operating Income *</label>
                        <div class="input-group" data-reactid=".0.0:$16.$net-operating-income.1.0">
                            <span class="input-group-addon" data-reactid=".0.0:$16.$net-operating-income.1.0.0">
                                <select name="fields[net-operating-income][currency]" class="webforms__select" data-reactid=".0.0:$16.$net-operating-income.1.0.0.0" required="true">
                                    <option value="USD" data-reactid=".0.0:$16.$net-operating-income.1.0.0.0.$USD">USD</option>
                                    <option value="EUR" data-reactid=".0.0:$16.$net-operating-income.1.0.0.0.$EUR">EUR</option>
                                </select>
                            </span>
                            <input type="number" name="fields[net-operating-income][value]" step="0.01" id="AnnualNetOperatingIncome" required class="form-control number-field" data-reactid=".0.0:$16.$net-operating-income.1.0.1" required="true">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="lwbroker">Listed with a Broker? *</label>
                        <select class="form-control" name="lwbroker" id="lwbroker" required="true">
                            <option></option>
                            <option>Yes</option>
                            <option>No</option>
                            <option>Expired</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="fzastselling">How fast are you wanting to sell? *</label>
                        <select class="form-control" name="fastselling" id="fastselling"required="true">
                            <option>0-30 days</option>
                            <option>30-60 days</option>
                            <option>60-90 days</option>
                            <option>90+ days</option>
                            <option>As Soon As Possible</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="needsell">Why are you needing to sell? *</label>
                        <!--<p>Please provide any information you think would be relevant to a potential buyer as we look over the information. What do you think would be important for a buyer to know? This is the field to input reasons why you are selling and why your property should go to the top of Speedy Apartment Buyer's acquisition priority list.</p>-->
                        <textarea type="text" rows="5"  name="needsell" class="form-control" id="needsell" required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="amount">What is the best you could sell your apartments for *</label>
                        <!--<p>Please provide any information you think would be relevant to a potential buyer as we look over the information. What do you think would be important for a buyer to know? This is the field to input reasons why you are selling and why your property should go to the top of Speedy Apartment Buyer's acquisition priority list.</p>-->
                        <p>Need to be a $ amount and not a big blank</p>
                        <input type="text" name="amount" class="form-control" id="amount" placeholder="Please enter the Amount" required="true">
                    </div>
                    <div class="form-group">
                        <label for="flexible">Are you flexible*</label>

                        <select class="form-control" name="flexible" id="flexible" required="true">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>

                    <!--                    <div class="form-group">
                                            <label for="usr">Attachments</label>
                                            <input type="file" id="myFile">
                                            <button type="button" class="btn btn-add">Add another</button>
                                        </div>-->

                    <div class="form-group-btn">
                        <button type="reset" class="btn yellow-btn black">Reset</button>
                        <button type="button" class="btn yellow-btn" id="leadgeneration">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    // This sample uses the Place Autocomplete widget requesting only a place
    // ID to allow the user to search for and locate a place. The sample
    // then reverse geocodes the place ID and displays an info window
    // containing the place ID and other information about the place that the
    // user has selected.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 39.737041, lng: -94.811171},
            zoom: 13
        });

        var input = document.getElementById('pac-input');

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