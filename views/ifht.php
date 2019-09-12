<div class="parallax-4" style="height:460px !important;background: url('/Images/backgrounds/background2.jpg')!important;background-size: cover !important; !important;background-attachment: fixed !important;"><div class="small-info-box" style="opacity:0.4"></div></div>
        <div class="form-container-div">
            <form id="inter-facility-transfer-form">
            <h1>Inter Facility/Hospital Transfer Booking</h1>
            
            <h4>Transfer Details</h4>
            <hr>
            <h5>Travel Distance</h5>
            <div class="checkbox-form-container">
                <div class="checkbox" allowOne="true">
                    <label class="container">Local Area
                        <input class="cb" type="checkbox" name="yes" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container">Long Distance > 100km
                        <input class="cb" type="checkbox" name="No" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>

                </div>
            </div>
            <h4>From:</h4>
            
            <div class="checkbox-form-container">
                <div class="checkbox" allowOne="true">
                    <label class="container">Home
                        <input class="cb" type="checkbox" name="yes" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container">Hospital
                        <input class="cb" type="checkbox" name="No" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container">Clinic
                        <input class="cb" type="checkbox" name="yes" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    
                </div>
            </div>
            <div class="input-block-50">

                <label for="dater">Address</label>
                <input type="text" name="booking-date">
                
                <label for="dater">Date</label>
                <input type="date" name="booking-date">

            </div>
           <div class="input-block-50">

                <label for="dater">Pickup time</label>
                <input type="time" name="booking-date">
               
               <br><br><br><br><br>

            </div>
            <h4>To:</h4>
            <div class="checkbox-form-container">
                <div class="checkbox" allowOne="true">
                    <label class="container">Home
                        <input class="cb" type="checkbox" name="yes" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container">Hospital
                        <input class="cb" type="checkbox" name="No" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container">Clinic
                        <input class="cb" type="checkbox" name="yes" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    
                </div>
            </div>
            <div class="input-block-50">

                <label for="dater">Address</label>
                <input type="text" name="booking-date">
                
                <label for="dater">Date</label>
                <input type="date" name="booking-date">

            </div>
            <div class="input-block-50">

                <label for="dater">Dropoff time</label>
                <input type="time" name="booking-date">
               
               <br><br><br><br><br>

            </div>
            <h5>Trip type</h5>
           
            <div class="checkbox-form-container" style="float:none !important;">
                <div class="checkbox" allowOne="true">
                    <label class="container checkbox-3">Return trip
                        <input class="cb" type="checkbox" name="yes" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container checkbox-3">Single trip
                        <input class="cb" type="checkbox" name="No" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    
                </div>
                <div class="sub-form">
                    <div class="input-block-50">

                        <label for="dater">Return Time</label>
                        <input type="time" name="booking-date">

                    </div>
                    <div class="input-block-50">

                       <br><br><br>

                    </div>
                </div>
            </div>
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
                    <label class="container">Neonatal
                        <input class="cb" type="checkbox" name="icu" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                </div>
            </div>
            <h4>Patient Details</h4>
            <hr>
            <div class="input-block-50">
                
                <label for="patient-name">First name</label>
                <input type="text" name="patient-name">
                
                <label for="citizen-number">ID/Passport number</label>
                <input type="text" name="citizen-number">
                
                <label for="citizen-number">Nationality</label>
                <input type="text" name="citizen-number">
                
            </div>
            <div class="input-block-50">
                
                <label for="patient-surname">Surname</label>
                <input type="text" name="patient-surname">
                
                <label for="case-ref">Case reference number</label>
                <input type="text" name="case-ref">
                
                <br><br><br><br><br>
                
            </div>
            
            <label for="medical-info">Medical Information</label>
            <textarea name="medical-info" rows="4"></textarea>
            
            
            <label>Services needed</label>
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
            <hr>
            <div class="input-block-50">
                
                <label for="bookee-name">First name</label>
                <input type="text" name="patient-name">
                
                <label for="company">Company name</label>
                <input type="text" name="company">
                
                <label for="company">Contact number</label>
                <input type="tel" name="company">
                
            </div>
            <div class="input-block-50">
                
                <label for="bookee-surname">Surname</label>
                <input type="text" name="bookee-surname">
                
                <label for="email">Email address</label>
                <input type="text" name="email">
                
                <br><br><br><br><br>
                
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
            <button class="fill book">make booking request</button>
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