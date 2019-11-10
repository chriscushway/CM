<div class="parallax-4 resize-para" style="height:460px !important;background: url('Images/backgrounds/background2.jpg')!important;background-size: cover !important; !important;background-attachment: fixed !important;"><div class="small-info-box" style="opacity:0.4"></div></div>
        <div class="form-container-div">
            <form name = "Organ transfer" id="organForm">
            <h1>Organ Transfer Booking</h1>
            <input type="hidden" name="Transfer Details" data-heading="h4">
            <h4>Transfer Details</h4>
            <hr>
            <h5>Service</h5>
            <input type="hidden" name="service" data-index="1" data-heading="start">    
            <input type="hidden" name="Service type selected" data-heading="smallHeader">
                
            <div class="checkbox-form-container">
                <div class="checkbox" allowOne="true">
                    <label class="container">Load
                        <input class="cb" type="checkbox" data-display="Loading of organ" name="Load" value=850.00>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container">Offload
                        <input class="cb" type="checkbox" data-display="Offloading/retrieving of organ" name="International" value=850.00>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container">Both
                        <input class="cb" type="checkbox" data-display="Loading and offloading/retrieving of organ" name="both" value=1700.00>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                </div>
                 <input type="hidden" name="service" data-heading="segmentEnd">
                <div class="sub-form">
                    <input type="hidden" name="Load Details" data-heading="smallHeader-vis">
                    <input type="text" value="<br>" style="display:none;">
                    
                    <h5>Load Details</h5>
                    <hr>
                 
                    <?php include("organTransferSubForm.php") ?>
                  
                    <div class="input-block-50">
                        <label for="time-load">Departure Time</label>
                        <input type="time" name="Departure Time" >
                        <input type="hidden" data-heading="segmentEnd">
                    </div>
                    
                </div>
                <input type="hidden" name="service" data-heading="segmentEnd">
                
                <div class="sub-form">
                  <input type="hidden" name="Offload Details" data-heading="smallHeader-vis">
                    <input type="text" value="<br>" style="display:none;">
                    
                    <h5>Offload Details</h5>
                    <hr>
                 
                    <?php include("organTransferSubForm.php") ?>
                    
                    <div class="input-block-50">
                        <label for="time-load">Arrival Time</label>
                        <input type="time" name="Arrival Time" >
                        <input type="hidden" data-heading="segmentEnd">
                    </div>
                </div>
                 <input type="hidden" name="service" data-heading="segmentEnd">
                 <input type="hidden" name="service" data-heading="END">
            </div>
            <?php include ("bookingSubForm.php") ?>
             
            
            <?php include("termsAndConditions.php") ?>
            <?php include("invoice.php") ?>
            <button class="fill book" action="makeBooking">make booking request</button>
                
            <?php include("emailTemplate.php") ?>
        </form>
            
        </div>