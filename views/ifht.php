<div class="parallax-4 resize-para" style="height:460px !important;background: url('Images/backgrounds/background2.jpg')!important;background-size: cover !important; !important;background-attachment: fixed !important;"><div class="small-info-box" style="opacity:0.4"></div></div>
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
            <?php include("patientSubForm.php") ?>
            <?php include ("bookingSubForm.php") ?>
            <?php include("termsAndConditions.php") ?>
            <button class="fill book">make booking request</button>
        </form>
        
        </div>