@props(['modalID', 'title'])
<div class="modal fade" id="{{ $modalID }}" tabindex="-1" aria-labelledby="{{ $modalID }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="" method="POST">
                    @csrf
                    <div class="overflow-auto h-30 p-3">
                        <div>
                            <label for="first_name" class="form-label" aria-label="House no.">First Name</label>
                            <input type="text" class="form-control" name="first_name">
                        </div>
                        <div>
                            <label for="last_name" class="form-label" aria-label="House no.">Last Name</label>
                            <input type="text" class="form-control" name="last_name">
                        </div>
                        <div>
                            <label for="last_name" class="form-label" aria-label="House no.">Role in the Family</label>
                            <input type="text" class="form-control" name="family_role">
                        </div>
                        <div>
                            <label for="birthday" class="form-label" aria-label="House no.">Birth Date</label>
                            <input type="date" class="form-control" name="birthday">
                        </div>
                        <div>
                            <label for="civil_status" class="form-label" aria-label="House no.">Civil
                                Status</label>
                            <input type="text" class="form-control" name="civil_status">
                        </div>
                        <div>
                            <label for="contact_no" class="form-label" aria-label="House no.">Contact No.</label>
                            <input type="text" class="form-control" name="contact_no">
                        </div>
                        <div>
                            <label for="4ps" class="form-label" aria-label="House no.">4 ps</label>
                            <input type="text" class="form-control" name="fourps">
                        </div>
                        <div>
                            <label for="philhealth" class="form-label" aria-label="House no.">Philhealth</label>
                            <input type="text" class="form-control" name="philhealth">
                        </div>
                        <div>
                            <label for="vaccinination_brand" class="form-label" aria-label="House no.">Vaccination
                                Brand</label>
                            <input type="text" class="form-control" name="vaccinination_brand">
                        </div>
                        <div>
                            <label for="1st_dose" class="form-label" aria-label="House no.">1st Dose</label>
                            <input type="text" class="form-control" name="first_dose">
                        </div>
                        <div>
                            <label for="2nd_dose" class="form-label" aria-label="House no.">2nd Dose</label>
                            <input type="text" class="form-control" name="second_dose">
                        </div>
                        <div>
                            <label for="location" class="form-label" aria-label="House no.">Location</label>
                            <input type="text" class="form-control" name="location">
                        </div>
                        <div>
                            <label for="booster" class="form-label" aria-label="House no.">Booster</label>
                            <input type="text" class="form-control" name="booster">
                        </div>
                        <div>
                            <label for="booster_brand" class="form-label" aria-label="House no.">Booster
                                brand</label>
                            <input type="text" class="form-control" name="booster_brand">
                        </div>
                        <div>
                            <label for="booster_brand_location" class="form-label" aria-label="House no.">Location</label>
                            <input type="text" class="form-control" name="booster_brand_location">
                        </div>
                        <div>
                            <label for="family_planning" class="form-label" aria-label="House no.">Family
                                Planning</label>
                            <input type="text" class="form-control" name="family_planning">
                        </div>
                        <div>
                            <label for="maternal_care" class="form-label" aria-label="House no.">Maternal
                                Care</label>
                            <input type="text" class="form-control" name="maternal_care">
                        </div>
                        <div>
                            <label for="infant_care" class="form-label" aria-label="House no.">Infant
                                Care</label>
                            <input type="text" class="form-control" name="infant_care">
                        </div>
                        <div>
                            <label for="maintenance" class="form-label" aria-label="House no.">Maintenance</label>
                            <input type="text" class="form-control" name="maintenance">
                        </div>
                        <div>
                            <label for="pwd" class="form-label" aria-label="House no.">PWD</label>
                            <input type="text" class="form-control" name="pwd">
                        </div>
                        <div>
                            <label for="special_child" class="form-label" aria-label="House no.">Special
                                child</label>
                            <input type="text" class="form-control" name="special_child">
                        </div>
                        <div>
                            <label for="lgbtqia+" class="form-label" aria-label="House no.">LGBTQIA+</label>
                            <input type="text" class="form-control" name="lgbtqia">
                        </div>
                        <div>
                            <label for="senior_citizen" class="form-label" aria-label="House no.">Senior
                                Citizen</label>
                            <input type="text" class="form-control" name="senior_citizen">
                        </div>
                        <div>
                            <label for="Death" class="form-label" aria-label="House no.">Death</label>
                            <input type="text" class="form-control" name="Death">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-2">
                        <button type="button" class="btn btn-secondary mx-3" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
