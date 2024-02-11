<x-layout>
    <x-navigation pageName='Add Record'>
        <div class="my-3 p-4">
            <h5 class="text-dark-blue">Address</h5>
            <div>
                <label for="houseNo" class="form-label" aria-label="House no."> House no.</label>
                <input type="text" class="form-control" name="houseNo">
            </div>
            <div>
                <label for="street" class="form-label" aria-label="House no."> Street</label>
                <input type="text" class="form-control" name="street">
            </div>
            <br>
            <h5 class="text-dark-blue">Family</h5>
            <div>
                <div class="shadow-sm p-3 mb-3">
                    <x-recordTable
                    first_name='{{$data["first_name"]}}'
                    last_name='{{$data["last_name"]}}'
                    family_role='{{$data["family_role"]}}'
                    birthday='{{$data["birthday"]}}'
                    civil_status='{{$data["civil_status"]}}'
                    contact_no='{{$data["contact_no"]}}'
                    fourps='{{$data["fourps"]}}'
                    philhealth='{{$data["philhealth"]}}'
                    vaccinination_brand='{{$data["vaccinination_brand"]}}'
                    first_dose='{{$data["first_dose"]}}'
                    second_dose='{{$data["second_dose"]}}'
                    location='{{$data["location"]}}'
                    booster='{{$data["booster"]}}'
                    booster_brand='{{$data["booster_brand"]}}'
                    booster_brand_location='{{$data["booster_brand_location"]}}'
                    family_planning='{{$data["family_planning"]}}'
                    maternal_care='{{$data["maternal_care"]}}'
                    infant_care='{{$data["infant_care"]}}'
                    maintenance='{{$data["maintenance"]}}'
                    pwd='{{$data["pwd"]}}'
                    special_child='{{$data["special_child"]}}'
                    lgbtqia='{{$data["lgbtqia"]}}'
                    senior_citizen='{{$data["senior_citizen"]}}'
                    Death='{{$data["Death"]}}'
                    />
                </div>
                <div class="w-100 d-flex justify-content-start">
                    <button type="button" class="btn-dark-blue" data-bs-toggle="modal" data-bs-target="#addFamily">
                        Add Family
                    </button>
                    <button type="button" class="btn-dark-blue mx-2">
                        Submit
                    </button>
                </div>
            </div>
            <x-modal.addRecord modalID='addFamily' title='Add Family'/>
        </div>
    </x-navigation>
</x-layout>
