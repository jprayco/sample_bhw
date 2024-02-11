@props(['firstName'])

<h6 class="text-dark-blue">Family 1</h6>
{{ $firstName }}
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
                    aria-controls="collapseExample"></i>John</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <div class="d-flex ">
                    <button class="btn"><i class="bi bi-pencil-square text-dark-blue"></i></button>
                    <button class="btn"><i class="bi bi-trash text-red"></i> </button>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<div class="collapse" id="collapseExample">
    <div class="card card-body">
        <div class="row p-0 m-0">
            <div class="col-6">
                <h6>Vaccination</h6>
                <div>
                    <small>Vaccine Brand: </small>
                </div>
                <div>
                    <small>1st Dose: </small>
                </div>
                <div>
                    <small>2nd Dose: </small>
                </div>
                <div>
                    <small>Location:</small>
                </div>
                <br>
                <h6>Booster</h6>
                <div>
                    <small>Booster Brand: </small>
                </div>
                <div>
                    <small>Location: </small>
                </div>
            </div>
            <div class="col-6">
                <h6>Other Information</h6>
                <div>
                    <small>Family Planning: </small>
                </div>
                <div>
                    <small>Maternal Care: </small>
                </div>
                <div>
                    <small>Infant Care: </small>
                </div>
                <div>
                    <small>Maintenance: </small>
                </div>
                <div>
                    <small>PWD: </small>
                </div>
                <div>
                    <small>Special Child: </small>
                </div>
                <div>
                    <small>LGBTQIA+:</small>
                </div>
                <div>
                    <small>Senior Citizen: </small>
                </div>
                <div>
                    <small>Death:</small>
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
