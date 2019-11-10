<div class="input-block-50">
                
                <label for="project-name">Project name</label>
                <input type="text" name="project-name">
                
                <label for="dater">Date</label>
                <input type="date" name="date">
                
            </div>
            <div class="input-block-50">
                
                <label for="production-company">Production company</label>
                <input type="text" name="production-company">
                
                <label for="call-time">Approxamite call time</label>
                <input type="time" name="call-time">
                
            </div>
            
            <label for="location">Location</label>
            <textarea name="location" rows="2"></textarea>
            
            <h4>Services</h4>
            <hr>
            <h5>Unit Type</h5>
            <div class="checkbox-form-container">
            <div class="checkbox" allowOne="true">
                <label class="container checkbox-3">Main Unit
                    <input class="cb" type="checkbox" name="main-unit" value=1>
                    <span class="checkmark"><span class="fas fa-check"></span></span>
                </label>
                <label class="container checkbox-3">Second Unit
                    <input class="cb" type="checkbox" name="second-unit" value=1>
                    <span class="checkmark"><span class="fas fa-check"></span></span>
                </label>
                <label class="container checkbox-3">Splinter Unit
                    
                    <input class="cb" type="checkbox" name="splinter-unit" value=1>
                    <span class="checkmark"><span class="fas fa-check"></span></span>
                </label>
                <label class="container checkbox-3">Action Unit
                    <input class="cb" type="checkbox" name="action-unit" value=1>
                    <span class="checkmark"><span class="fas fa-check"></span></span>
                </label>
                <label class="container checkbox-3">Rehearsel
                    <input class="cb" type="checkbox" name="rehearsel" value=1>
                    <span class="checkmark"><span class="fas fa-check"></span></span>
                </label>
                <label class="container checkbox-3">Construction
                    <input class="cb" type="checkbox" name="construction" value=1>
                    <span class="checkmark"><span class="fas fa-check"></span></span>
                </label>
                <label class="container checkbox-3">Rigging
                    <input class="cb" type="checkbox" name="rigging" value=1>
                    <span class="checkmark"><span class="fas fa-check"></span></span>
                </label>
                <label class="container checkbox-c">RECCE
                    <input class="cb" type="checkbox" name="recce" value=1>
                    <span class="checkmark"><span class="fas fa-check"></span></span>
                </label>
            </div>
            </div>
            <h5>Service Type</h5>
            <div class="checkbox-form-container">
                <div class="checkbox" allowOne="false">
                    <label class="container">Fire and rescue
                        <input class="cb" type="checkbox" data-type="special" name="fire-multiple" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container">Safety
                        <input class="cb" type="checkbox" name="safety-multiple" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container">Medical
                        <input class="cb" type="checkbox" name="medical-multiple" value=1>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                </div>
                <div class="sub-form">
                    
                    <h5>Fire Services</h5>
                    <hr>
                    <div class="checkbox" >
                        <label class="container checkbox-3">Fire Marshall
                            <input type="checkbox" data-display = "Fire Marshall" name="fire-marshall" value=1000.00>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container checkbox-3">Fire Engine
                            <input type="checkbox" data-display="Fire Engine" name="fire-engine" value=13150.00>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container checkbox-3">7000l Water Tanker
                            <input type="checkbox" data-display = "Water Tanker" name="water-tank" value=3850.00>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container checkbox-3">Skid Unit
                            <input type="checkbox" data-display="Skid Unit" name="skid-unit" value=5650>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container checkbox-c">4x4 skid truck
                            <input type="checkbox" data-display="4x4 skid truck" name="skid-truck" value=5650.00>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container checkbox">Rescue technician
                            <input type="checkbox" data-display="Rescue technician" name="rescue-technician" value=2850.00>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        
                    </div>
                    
                </div>
                <div class="sub-form">
                    <h5>Safety Services</h5>
                    <hr>
                    <div class="checkbox" >
                        <label class="container checkbox-3">Safety advisor
                            <input type="checkbox" data-display="" name="safety-advisor" value=1>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container checkbox-3">Safety assistant
                            <input type="checkbox" data-display="" name="safety-assistant" value=1>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container checkbox-3">Senior advisor
                            <input type="checkbox" data-display="" name="senior-advisor" value=1>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        
                    </div>
                </div>
                <div class="sub-form">
                    <h5>Medical Services</h5>
                    <hr>
                    <div class="checkbox" >
                        <label class="container checkbox-3">Medic
                            <input type="checkbox" data-display="Medic" name="medic" value=1>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container checkbox-3">Ambulance
                            <input type="checkbox"  data-display="Ambulance" name="ambulance" value=1>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container checkbox-3">Paramedic
                            <input type="checkbox" data-display="Paramedic" name="paramedic" value=1>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                        <label class="container checkbox-4">Aeromedical
                            <input type="checkbox" data-display="Aeormedical" name="aeromedical" value=1>
                            <span class="checkmark"><span class="fas fa-check"></span></span>
                        </label>
                    </div>
            </div>
            </div>
            
            
            <h5>Special Requests</h5>
            
            <textarea name="special-request" rows="4"></textarea>