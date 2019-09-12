<div class="parallax-4 resize-para" style="height:460px !important;background: url('Images/backgrounds/background2.jpg')!important;background-size: cover !important; !important;background-attachment: fixed !important;"><div class="small-info-box" style="opacity:0.4"></div></div>
        <div class="form-container-div">
            <form id="airsideForm">
                <h1>Airside Transfer Booking</h1>
              	<input type="hidden" name="AIRSIDE-TRANSFER-BOOKING" value="header">
                <h4>Flight Details</h4>
                <input type="hidden" name="Flight-details:" value="header">
                <hr>
                <h5>Flight-type</h5>
                <input type="hidden" name="Flight-type:" value="small-header">
                <div class="checkbox-form-container">
                    <div class="checkbox" allowOne="true">
                        <label class="container">Domestic
                            <input class="cb" type="checkbox" name="Domestic" value=1>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container">International
                            <input class="cb" type="checkbox" name="International" value=1>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container">Both
                            <input class="cb" type="checkbox" name="checkbox-both" value=1>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                    </div>
                    <div class="sub-form">

                        <h5>Domestic flight</h5>
                        <hr>
                        <div class="input-block-50">
                            <label for="date">Date</label>
                            <input type="date" name="date">
                        </div>
                        <div class="input-block-50">
                            <label for="flight-number">Flight number</label>
                            <input type="number" name="flight-number">
                        </div>

                        <div class="input-block">
                            <label for="flight-source" >Leaving from</label>
                            <input type="text" name="flight-source">

                            <label for="flight-destination">Going To</label>
                            <input type="text" name="flight-destination">
                        </div>
                        <div class="input-block-50">
                            <label for="departure-time">Departure Time</label>
                            <input type="time" name="departure-time">
                        </div>
                        <div class="input-block-50">
                            <label for="arrival-time">Arrival Time</label>
                            <input type="time" name="arrival-time" >
                        </div>

                    </div>
                    <div class="sub-form">
                        <h5>International flight</h5>
                        <hr>
                        <div class="input-block-50">
                            <label for="date">Date</label>
                            <input type="date" name="date">
                        </div>
                        <div class="input-block-50">
                            <label for="flight-number">Flight number</label>
                            <input type="number" name="flight-number">
                        </div>

                        <div class="input-block">
                            <label for="flight-source" >Leaving from</label>
                            <input type="text" name="flight-source">

                            <label for="flight-destination">Going To</label>
                            <input type="text" name="flight-destination">
                        </div>
                        <div class="input-block-50">
                            <label for="departure-time">Departure Time</label>
                            <input type="time" name="departure-time">
                        </div>
                        <div class="input-block-50">
                            <label for="arrival-time">Arrival Time</label>
                            <input type="time" name="arrival-time" >
                        </div>
                    </div>
                </div>

                <h5>Terminal Type</h5>
                <input type="hidden" name="Terminal-type:" value="small-header">
                <div class="checkbox-form-container">
                    <div class="checkbox" allowOne="true">
                            <label class="container">Arrival
                                <input class="cb" type="checkbox" name="arrival" value=1>
                                <span class="checkmark"><span class="fas fa-check"></span></span>
                            </label>
                            <label class="container">departures
                                <input class="cb" type="checkbox" name="departure" value=1>
                                <span class="checkmark"><span class="fas fa-check"></span></span>
                            </label>
                            <label class="container">Both
                                <input class="cb" type="checkbox" name="both" value=1>
                                <span class="checkmark"><span class="fas fa-check"></span></span>
                            </label>
                    </div>
                </div>
                <h5>Level of care needed for escort</h5>
                <input type="hidden" name="Level-of-care-needed:" value="small-header">
                <div class="checkbox-form-container">
                    <div class="checkbox" allowOne="true">
                            <label class="container">BLS/ILS
                                <input class="cb" type="checkbox" name="ils" value=1>
                                <span class="checkmark"><span class="fas fa-check"></span></span>
                            </label>
                            <label class="container">ALS
                                <input class="cb" type="checkbox" name="als" value=1>
                                <span class="checkmark"><span class="fas fa-check"></span></span>
                            </label>
                    </div>
                </div>
                <h4>Patient Details</h4>
                <input type="hidden" name="Patient-details:" value="header">
                <hr>
                <div class="input-block-50">

                    <label for="patient-name">First name</label>
                    <input type="text" name="patient-name">

                    <label for="citizen-number">ID/Passport number</label>
                    <input type="text" name="citizen-number">

                </div>
                <div class="input-block-50">

                    <label for="patient-surname">Surname</label>
                    <input type="text" name="patient-surname">

                    <label for="case-ref">Case reference number</label>
                    <input type="text" name="case-ref">

                </div>
                
                <label for="medical-info">Medical Information</label>
                <textarea name="medical-info" rows="4"></textarea>

                
                <label>Services needed</label>
                <input type="hidden" name="Services-needed:" value="small-header">
                <div class="checkbox" >
                    <label class="container checkbox-4">Wheelchair
                        <input class="cb" type="checkbox" name="wheelchair" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container checkbox-4">Stretcher
                        <input class="cb" type="checkbox" name="stretcher" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container checkbox-4">IV Therapy
                        <input class="cb" type="checkbox" name="iv" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container checkbox-4">Oxygen
                        <input class="cb" type="checkbox" name="oxygen" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container checkbox-4">Intubated/Ventilated
                        <input class="cb" type="checkbox" name="ils" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container checkbox-4">Urinary catheter
                        <input class="cb" type="checkbox" name="als" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                </div>
                <h4>Booking Details (Person making the booking)</h4>
                <input type="hidden" name="Booking-details:" value="header">
                <hr>
                <div class="input-block-50">

                    <label for="bookee-name">First name</label>
                    <input type="text" name="patient-name">

                    <label for="company">Company name</label>
                    <input type="text" name="company">

                    <label for="contact-number">Contact number</label>
                    <input type="tel" name="contact-number">

                </div>
                <div class="input-block-50">

                    <label for="bookee-surname">Surname</label>
                    <input type="text" id="surname" name="bookee-surname">

                    <label for="email">Email address</label>
                    <input type="text" name="email">

                    <br><br><br><br><br>

                </div>    
                <h4>Extra services</h4>
                <input type="hidden" name="Extra-service-details:" value="header">
                <hr>
                <h5>Does the patient require a medical escort on the flight from Cape Medics</h5>
                <input type="hidden" name="Medical-escort-on-the-flight-from-Cape-Medics:" value="small-header">
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
                        <h5>Level of care needed</h5>
                        <input type="hidden" name="Level-of-care:" value="small-header">
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
                    </div>
                </div>
                <h5>Does the patient require an ambulance escort to or from the airport</h5>
                <input type="hidden" name="ambulance-escort:" value="small-header">
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
                        <input type="hidden" name="Level-of-care:" value="small-header">
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
                        <input type="hidden" name="Location-details-(Facility-to-airport):" value="small-header">
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
                        <input type="hidden" name="Location-details-(Airport-to-facility):" value="small-header">
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
                <h4>Payment Method</h4>
                <hr>
                 <div class="checkbox-form-container">
                    <div class="checkbox" allowOne="true">
                        <label class="container">EFT/Credit Card
                            <input class="cb" type="checkbox" name="ils" value=1>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container">Account
                            <input class="cb" type="checkbox" name="als" value=1>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                    </div>
                </div>
                <br><br>
                <button type="button" class="fill book" action="makeBooking" >make booking request</button>
            </form>
            <div class="form-info-container">
                <div class="form-info">
                    <h3>Terms and Conditions</h3>
                    <hr>
                    <p align="left">Bookings are only final when you receive an email to confirm your booking.<br><br>
                        A 50% cancellation fee applies when less than 24 hour notice is given to cancel. There is no penalty with greater than 24 hour notification.<br><br>
                        Additional fees apply for all bookings with less than 12 hours notification. This will reflect on the Proforma Invoice.
                        CC/EFT Payments applies to all non-account holders.</p>
                    <p id="invoice"></p>
                
                </div>
        
            </div>
        </div>