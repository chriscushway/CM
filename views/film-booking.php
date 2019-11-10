<?php include("bookingFormImage.php") ?>
        <div class="form-container-div">
            <form id="film-booking">
                <h1>Film Booking</h1>
                
                <?php include("filmCommercialSubForm.php") ?>
                
                <?php include("bookingSubForm.php") ?>
                
                <?php include("termsAndConditions.php") ?>
                
                <?php include ("views/invoice.php") ?>
                
                <button type="button" class="fill book" action="makeBooking" >make booking request</button>
            
            </form>
        
        </div>