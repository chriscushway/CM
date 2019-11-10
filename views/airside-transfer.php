<?php include("bookingFormImage.php") ?>
        <div class="form-container-div">
             
               
            <form name = "Airside transfer" id="airsideForm">
                <h1>Airside Transfer Booking</h1><small style="font-weight:bold">Fields marked with a <span class="compulsory">*</span> are compulsory</small>
                <h4>Flight Details</h4>
                <input type="hidden" data-heading="h4" name="Flight Details">
                <hr>
                <input type="hidden" data-heading="start" name="Flight Details">
                
                <h5>Flight-type<span class="compulsory">*</span></h5>
                <div class="checkbox-form-container">
                    <div class="checkbox" allowOne="true">
                        <label class="container">Domestic
                            <input class="cb" type="checkbox" data-display = "Domestic flight" name="domestic" data-index = 0 data-type="special flight-info">
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container">International
                            <input class="cb" data-index = 0 type="checkbox" name="international" data-type="special flight-info">
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container">Both
                            <input class="cb" type="checkbox" data-index = 0 name="both" data-type="special flight-info">
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                    </div>
                    <div class="sub-form">

                        <h5>Domestic flight</h5>
                        <hr>
                        <?php include("airsideTransferSubForm.php") ?>

                    </div>
                    <div class="sub-form">
                        <h5>International flight</h5>
                        <hr>
                        <?php include("airsideTransferSubForm.php") ?>
                    </div>
                </div>
                
                <h5>Terminal Type<span class="compulsory">*</span></h5>
                <div class="checkbox-form-container">
                    <div class="checkbox" allowOne="true">
                            <label class="container">Arrivals
                                <input class="cb" type="checkbox" data-index = 1 name="arrivals" data-type="special flight-info">
                                <span class="checkmark"><span class="fas fa-check"></span></span>
                            </label>
                            <label class="container">Departures
                                <input class="cb" type="checkbox" data-index = 1 data-type="special flight-info" name="departures">
                                <span class="checkmark"><span class="fas fa-check"></span></span>
                            </label>
                            <label class="container">Both
                                <input class="cb" data-index = 1 type="checkbox" name="both" data-type="special flight-info">
                                <span class="checkmark"><span class="fas fa-check"></span></span>
                            </label>
                    </div>
                </div>
                <h5>Level of care needed for escort<span class="compulsory">*</span></h5>
                <div class="checkbox-form-container">
                    <div class="checkbox" allowOne="true">
                            <label class="container">BLS/ILS
                                <input class="cb" type="checkbox" data-index = 2 name="ils" data-type="special flight-info">
                                <span class="checkmark"><span class="fas fa-check"></span></span>
                            </label>
                            <label class="container">ALS
                                <input class="cb" data-index = 2 type="checkbox" name="als" data-type="special flight-info">
                                <span class="checkmark"><span class="fas fa-check"></span></span>
                            </label>
                    </div>
                </div>
                <input type="hidden" data-heading="END" name="Flight Details">
                <?php include("patientSubForm.php") ?>
                <?php include("bookingSubForm.php") ?>
                <h4>Extra services</h4>
                <hr>
                <h5>Does the patient require a medical escort on the flight from Cape Medics</h5>
                <div class="checkbox-form-container">
                    <div class="checkbox" allowOne="true">
                        <label class="container">Yes
                            <input class="cb" data-type="special" type="checkbox" name="yes">
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container">No
                            <input class="cb" type="checkbox" data-type="special" name="No" value=0>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>

                    </div>
                    <div class="sub-form">
                        <h5>Level of care needed</h5>
                        <div class="checkbox-form-container">
                            <div class="checkbox" allowOne="true">
                                <label class="container">BLS
                                    <input class="cb" type="checkbox" data-display="On flight medical escort cost" name="bls" value=4100.00>
                                    <span class="checkmark"><span class="fas fa-check"></span></span>
                                </label>
                                <label class="container">ILS
                                    <input class="cb" data-display="On flight medical escort cost" type="checkbox" name="ils" value=4100.00>
                                    <span class="checkmark"><span class="fas fa-check"></span></span>
                                </label>
                                <label class="container">ALS
                                    <input class="cb" data-display="On flight medical escort cost" type="checkbox" name="als" value=4100.00>
                                    <span class="checkmark"><span class="fas fa-check"></span></span>
                                </label>
                                <label class="container">ICU
                                    <input class="cb" data-display="On flight medical escort cost" type="checkbox" name="icu" value=4100.00>
                                    <span class="checkmark"><span class="fas fa-check"></span></span>
                                </label>
                                <label class="container">Doctor
                                    <input class="cb" data-display="On flight medical escort cost" type="checkbox" name="doctor" value=12750.00>
                                    <span class="checkmark"><span class="fas fa-check"></span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <h5>Does the patient require an ambulance escort to or from the airport</h5>
                <div class="checkbox-form-container">
                    <div class="checkbox" allowOne="true">
                        <label class="container">Yes
                            <input class="cb" type="checkbox" name="yes" value=1>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container">No
                            <input class="cb" type="checkbox" name="No" value=1>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>

                    </div>
                    <div class="sub-form">
                        <h4>Ground Ambulance Transfer Details</h4>
                        <hr>
                        <h5>Level of care needed</h5>
                        <div class="checkbox-form-container">
                            <div class="checkbox" allowOne="true">
                                <label class="container">BLS
                                    <input class="cb" type="checkbox" name="bls" value=1>
                                    <span class="checkmark"><span class="fas fa-check"></span></span>
                                </label>
                                <label class="container">ILS
                                    <input class="cb" type="checkbox" name="ils" value=1>
                                    <span class="checkmark"><span class="fas fa-check"></span></span>
                                </label>
                                <label class="container">ALS
                                    <input class="cb" type="checkbox" name="als" value=1>
                                    <span class="checkmark"><span class="fas fa-check"></span></span>
                                </label>
                                <label class="container">ICU
                                    <input class="cb" type="checkbox" name="icu" value=1>
                                    <span class="checkmark"><span class="fas fa-check"></span></span>
                                </label>
                            </div>
                        </div>
                        <h5>Travel Distance</h5>
                        <div class="checkbox-form-container">
                            <div class="checkbox" allowOne="true">
                                <label class="container">Local Area
                                    <input class="cb" type="checkbox" name="local-area" value=1>
                                    <span class="checkmark"><span class="fas fa-check"></span></span>
                                </label>
                                <label class="container">Long Distance > 100km
                                    <input class="cb" type="checkbox" name="long-distance" value=1>
                                    <span class="checkmark"><span class="fas fa-check"></span></span>
                                </label>

                            </div>
                        </div>
                        <h5>Location Details (Facility to Airport)</h5>
                        <div class="input-block-33">

                            <label for="source">From</label>
                            <input type="text" name="source">

                        </div>
                        <div class="input-block-33">

                            <label for="destination">To</label>
                            <input type="text" name="destination">

                        </div>
                        <div class="input-block-33">

                            <label for="pickup-time">Pickup Time</label>
                            <input type="time" name="pickup-time">

                        </div>
                        <h5>Location Details (Airport to Facility)</h5>
                        <div class="input-block-33">

                            <label for="source">From</label>
                            <input type="text" name="source">

                        </div>
                        <div class="input-block-33">

                            <label for="destination">To</label>
                            <input type="text" name="destination">

                        </div>
                        <div class="input-block-33">

                            <label for="pickup-time">Pickup Time</label>
                            <input type="time" name="pickup-time">

                        </div>
                    </div>
                </div>
               
                <input type="hidden" data-heading="END" name="Flight Details">
                <?php include("termsAndConditions.php") ?>
                
                <?php include("invoice.php") ?>
                <button type="button" class="fill book" action="makeBooking" >make booking request</button>
                <div class="template" style="display:none">
                    <?php include("airsideEmailTemplate.php") ?>
                </div>
            </form>
           
        </div>