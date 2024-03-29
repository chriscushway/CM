<?php include("bookingFormImage.php") ?>
        <div class="form-container-div">
            
            <form id="event-booking">
            <h1>Event Booking</h1>
            
            <h4>Event Details</h4>
            <hr>
            <h5>Event type</h5>
            <div class="checkbox-form-container">
                <div class="checkbox" allowOne="true">
                    <label class="container checkbox-4">CTICC
                        <input class="cb" type="checkbox" name="cticc" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container checkbox-4">GCC
                        <input class="cb" type="checkbox" name="gcc" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container checkbox-4">PSL Soccer
                        <input class="cb" type="checkbox" name="soccer" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container checkbox-4">Other Event
                        <input class="cb" type="checkbox" name="other" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                </div>
                
            </div>
            
            <h5>Event info</h5>
            <div class="input-block-50">
                
                <label for="date-start-event">Date start</label>
                <input type="date" name="date-start-event">
                
                <label for="venue">Location</label>
                <input type="text" name="venue">
                
                <label for="start-time-event">Start time</label>
                <input type="time" name="start-time-event">
                
                <label for="pax-event">Pax</label>
                <input type="text" name="pax-event">
            </div>
            <div class="input-block-50">

                <label for="date-end-event">Date end</label>
                <input type="date" name="date-end-event">
                
                <label for="event-name">Event name</label>
                <input type="text" name="event-name">
                
                <label for="end-time-event">End time</label>
                <input type="time" name="end-time-event">
                
                <br><br><br><br><br>
                
            </div>
            
            <label for="event-description">Event description</label>
            <textarea name="event-description" rows="4"></textarea>
                
            <h4>Build Up / Rig</h4>
            <hr>
            <h5>Do you require Cape Medics services for the build-up/Rig of the event </h5>
            <?php include("rigDeRigSubForm.php") ?>
                
            <h4>Strike / De-rig</h4>
            <hr>
            <h5>Do you require Cape Medics services for the strike/De-rig of the event </h5>
            <?php include("rigDeRigSubForm.php") ?>
                
            <h4>Important Event info</h4>
            <hr>
            <div class="input-block-50">
                
                    <label for="nature-of-event">Nature of event</label>
                    <select name="nature-of-event">
                        <option>Dance event (Rave / Disco)</option>
                        <option>New Year celebrations</option>
                        <option>Sport event with High risk of disorder</option>
                        <option>Pop/Rock Concert</option>
                        <option>Demonstrations/Marches</option>
                        <option>Sport event with Medium risk of disorder</option>
                        <option>Motor sport</option>
                        <option>Bonfire/pyrotechnic display</option>
                        <option>Public Exhibition</option>
                        <option>Marine</option>
                        <option>Motor Cycle Display</option>
                        <option>Aviation</option>
                        <option>International Event</option>
                        <option>VIP Visits/ Summit</option>
                        <option>Music Festival</option>
                        <option>Classical Performance</option>
                        <option>Agricultural/ Country Show</option>
                        <option>State Occasions</option>
                        <option>Sport event with low risk of disorder</option>
                        <option>Opposing factions involved</option>
                    </select>
                    <label for="crowd-event">Will the attendees be standing/seated/both ?</label>
                    <select name="crowd-event">
                        <option>Standing</option>
                        <option>Sitting</option>
                        <option>Both</option>
                    </select>
                    <label for="numbers-event">Expected numbers</label>
                    <select name="numbers-event">
                        <option>Less than 1000</option>
                        <option>1000 - 2999</option>
                        <option>3000 - 4999</option>
                        <option>5000 - 9 999</option>
                        <option>10 000 - 19 999</option>
                        <option>20 000 - 29 999</option>
                        <option>30 000 - 39 999</option>
                        <option>40 000 - 49 999</option>
                        <option>50 000 - 59 999</option>
                        <option>70 000 - 79 999</option>
                        <option>80 000 - 89 999</option>
                        <option>90 000 - 99 999</option>
                        <option>100 000 - 199 999</option>
                        <option>200 000 - 300 000</option>
                        
                    </select>
                    <label for="season-event">Time of year</label>
                    <select name="season-event">
                        <option>Summer</option>
                        <option>Autumn </option>
                        <option>Winter</option>
                        <option>Spring</option>
                    </select>

            </div>
            <div class="input-block-50">
                
                    <label for="venue-event">Venue</label>
                    <select name="venue-event">
                        <option>Includes overnight camping</option>
                        <option>Widespread public location in streets</option>
                        <option>Temporary outdoor structures</option>
                        <option>Other outdoor, e.g. festival</option>
                        <option>Outdoor in confined location, e.g. park, stadium</option>
                        <option>Indoor</option>
                        
                    </select>
                    <label for="crowd-profile-event">Attendees</label>
                    <select name="crowd-profile-event">
                        <option>Predominately elderly</option>
                        <option>Predominately children and teenagers</option>
                        <option>Predominantly Young Adults, Full mix, not in family groups</option>
                        <option>Full mix, in family groups</option>
                        
                    </select>
                    <label for="duration-event">Expected event duration</label>
                    <select name="crowd-profile-event">
                        <option>Less than 4 hours</option>
                        <option>More than 4 less than 12 hours </option>
                        <option>More than 12 hours</option>
                        
                    </select>
                <br><br><br><br><br>

            </div>
                
            <?php include("bookingSubForm.php") ?>
            <?php include("termsAndConditions.php") ?>
                
            <button class="fill book">make booking request</button>
        </form>
        </div>