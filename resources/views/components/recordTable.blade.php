@props([
    'first_name', 'last_name', 'family_role', 'birthday',
    'civil_status', 'contact_no', 'fourps', 'philhealth',
    'vaccinination_brand', 'first_dose', 'second_dose',
    'location', 'booster','booster_brand', 'booster_brand_location',
    'family_planning', 'maternal_care', 'infant_care',
    'maintenance', 'pwd', 'special_child', 'lgbtqia',
    'senior_citizen', 'Death'])

<h6 class="text-dark-blue">Family 1</h6>
<table class="table table-borderless">
    <thead class="bg-light text-dark-blue">
        <tr>
            <th scope="col"> First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Birth Date</th>
            <th scope="col">Civil Status</th>
            <th scope="col">Contact No.</th>
            <th scope="col">4ps</th>
            <th scope="col">Philhealth</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><i class="bi bi-caret-right-fill pe-3" data-bs-toggle="collapse"
                    href="#collapseExample" role="button" aria-expanded="false"
                    aria-controls="collapseExample"></i>{{ $first_name }}</td>
            <td>{{ $last_name }}</td>
            <td>{{ $birthday }}</td>
            <td>{{ $civil_status }}</td>
            <td>{{ $contact_no }}</td>
            <td>{{ $fourps }}</td>
            <td>{{ $philhealth }}</td>
            <td>
                <div class="d-flex ">
                    <button class="btn"><i class="bi bi-pencil-square text-dark-blue"></i></button>
                    <button class="btn"><i class="bi bi-trash text-red"></i> </button>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<div class="collapse mb-2" id="collapseExample">
    <div class="card card-body">
        <div class="row p-0 m-0">
            <div class="col-6">
                <h6>Vaccination</h6>
                <div>
                    <small>Vaccine Brand: {{ $vaccinination_brand }}</small>
                </div>
                <div>
                    <small>1st Dose: {{ $first_dose }}</small>
                </div>
                <div>
                    <small>2nd Dose: {{ $second_dose }}</small>
                </div>
                <div>
                    <small>Location: {{ $location }}</small>
                </div>
                <br>
                <h6>Booster</h6>
                <div>
                    <small>Booster Brand: {{ $booster_brand }}</small>
                </div>
                <div>
                    <small>Location: {{ $booster_brand_location }}</small>
                </div>
            </div>
            <div class="col-6">
                <h6>Other Information</h6>
                <div>
                    <small>Family Planning: {{ $family_planning }}</small>
                </div>
                <div>
                    <small>Maternal Care: {{ $maternal_care }}</small>
                </div>
                <div>
                    <small>Infant Care: {{ $infant_care }}</small>
                </div>
                <div>
                    <small>Maintenance: {{ $maintenance }}</small>
                </div>
                <div>
                    <small>PWD: {{ $pwd }}</small>
                </div>
                <div>
                    <small>Special Child: {{ $special_child }}</small>
                </div>
                <div>
                    <small>LGBTQIA+: {{ $lgbtqia }}</small>
                </div>
                <div>
                    <small>Senior Citizen: {{ $senior_citizen }}</small>
                </div>
                <div>
                    <small>Death: {{ $Death }}</small>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-100 d-flex justify-content-end">
    <button type="button" class="btn-dark-blue mx-3" data-bs-toggle="modal" data-bs-target="#familyHead">
        Add Members
    </button>
    <button type="button" class="btn-red" data-bs-toggle="modal" data-bs-target="#familyHead">
        Remove Family
    </button>
</div>
