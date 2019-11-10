<h4>Patient Details<span class="compulsory">*</span></h4>
                <hr>
                <input type="hidden" data-heading="h4" name="Patient Details">
                <input type="hidden" data-heading="Start" name="Flight Details">
                <div class="input-block-50">

                    <label for="patient-name">First name<span class="compulsory">*</span></label>
                    <input type="text" name="patient-name">

                    <label for="citizen-number">ID/Passport number<span class="compulsory">*</span></label>
                    <input type="text" name="citizen-number">

                </div>
                <div class="input-block-50">

                    <label for="patient-surname">Surname<span class="compulsory">*</span></label>
                    <input type="text" name="patient-surname">

                    <label for="case-ref">Case reference number</label>
                    <input type="text" name="case-ref">

                </div>
                
                <label for="medical-info">Medical Information<span class="compulsory">*</span></label>
                <textarea name="medical-info" rows="4"></textarea>

                
                <label>Services needed</label>
                <div class="checkbox" >
                    <label class="container checkbox-4">Wheelchair
                        <input class="cb" type="checkbox" data-display = "Wheelchair" name="wheelchair" value=0.00>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container checkbox-4">Stretcher
                        <input class="cb" type="checkbox" data-display = "Stretcher" name="stretcher" value=0.00>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container checkbox-4">IV Therapy
                        <input class="cb" type="checkbox"  data-display ="IV Therapy" name="iv" value=0.00>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container checkbox-4">Oxygen
                        <input class="cb" data-display = "Oxygen" type="checkbox" name="oxygen" value=0.00>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container checkbox-4">Intubated/Ventilated
                        <input class="cb" data-display = "Intubated/Ventilated" type="checkbox" name="Intubated" value=0.00>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                    <label class="container checkbox-4">Urinary catheter
                        <input class="cb" data-display = "Urinary catheter" type="checkbox" name="urinary" value=0.00>
                        <span class="checkmark"><span class="fas fa-check"></span></span>
                    </label>
                </div>
                <input type="hidden" data-heading="END" name="Flight Details">