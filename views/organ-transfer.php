<div class="parallax-4 resize-para" style="height:460px !important;background: url('Images/backgrounds/background2.jpg')!important;background-size: cover !important; !important;background-attachment: fixed !important;"><div class="small-info-box" style="opacity:0.4"></div></div>
        <div class="form-container-div">
            <form>
            <h1>Organ Transfer Booking</h1>
            
            <h4>Transfer Details</h4>
            <hr>
            <h5>Service</h5>
            <div class="checkbox-form-container">
                <div class="checkbox" allowOne="true">
                    <label class="container">Load
                        <input class="cb" type="checkbox" data-display="Loading of organ" name="load" value=850>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container">Offload
                        <input class="cb" type="checkbox" data-display="Offloading/retrieving of organ" name="International" value=850>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container">Both
                        <input class="cb" type="checkbox" data-display="loading and Offloading/retrieving of organ" name="checkbox-both" value=1700>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                </div>
                <div class="sub-form">
                    
                    <h5>Load Details</h5>
                    <hr>
                    <div class="input-block-50">
                        <label for="airline-load">Airline</label>
                        <input type="text" name="airline">
                    </div>
                    <div class="input-block-50">
                        <label for="flight-number-load">Flight number</label>
                        <input type="text" name="flight-number-load">
                    </div>
                    
                    <div class="input-block">
                        <label for="load-source" >Leaving from</label>
                        <input type="text" name="load-source">

                        <label for="load-destination">Going To</label>
                        <input type="text" name="load-destination">
                    </div>
                    <div class="input-block-50">
                        <label for="date-load">Date</label>
                        <input type="date" name="date-load">
                    </div>
                    <div class="input-block-50">
                        <label for="time-load">Departure Time</label>
                        <input type="time" name="time-load" >
                    </div>
                    
                </div>
                <div class="sub-form">
                    <h5>Offload Details</h5>
                    <hr>
                    <div class="input-block-50">
                        <label for="airline-offload">Airline</label>
                        <input type="text" name="airline-offload">
                    </div>
                    <div class="input-block-50">
                        <label for="flight-number-offload">Flight number</label>
                        <input type="text" name="flight-number-offload">
                    </div>
                    
                    <div class="input-block">
                        <label for="offload-source" >Leaving from</label>
                        <input type="text" name="offload-source">

                        <label for="offload-destination">Going To</label>
                        <input type="text" name="offload-destination">
                    </div>
                    <div class="input-block-50">
                        <label for="date-offload">Date</label>
                        <input type="date" name="date-offload">
                    </div>
                    <div class="input-block-50">
                        <label for="time-offload">Arrival Time</label>
                        <input type="time" name="time-offload" >
                    </div>
                </div>
            </div>
            
            
            <h4>Booking Details (Person making the booking)</h4>
            <hr>
            <div class="input-block-50">
                
                <label for="bookee-name">First name</label>
                <input type="text" name="patient-name">
                
                <label for="number">Contact number</label>
                <input type="number" name="number">
                
            </div>
            <div class="input-block-50">
                
                <label for="bookee-surname">Surname</label>
                <input type="text" name="bookee-surname">
                
                <label for="alt-number">Alternate contact number</label>
                <input type="number" name="alt-number">
                
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
            <?php include("termsAndConditions.php") ?>
            <?php include("invoice.php") ?>
            <button class="fill">make booking request</button>
        </form>
        </div>