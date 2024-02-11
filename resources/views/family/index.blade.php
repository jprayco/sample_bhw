<x-layout>
    <x-navigation pageName='Add Family'>
        <div class=" p-5">
            <div class="shadow-sm p-3 mb-3">
                <div>
                    @if (session('address_id') === null)
                        <x-form.dropdown name='address_id' descriptiveName='Address'>
                            <option value="" {{ old('address_id') ? '' : 'selected' }} disabled>-Please Select
                                address-
                            </option>
                            @foreach ($addresses as $address)
                                <option value="{{ $address->id }}">{{ $address->house_no }} {{ $address->street }}
                                </option>
                            @endforeach
                        </x-form.dropdown>
                    @else
                        <x-form.dropdown name='address_id2' descriptiveName='Address'>
                            <option value="" selected='selected' disabled>
                                {{ $addresses->house_no }} {{ $addresses->street }}
                            </option>
                        </x-form.dropdown>
                    @endif
                </div>
            </div>
            <div class="shadow-sm p-3">
                <h5>Family Member</h5>
                @if (session('success'))
                    <div class="alert alert-success mt-2">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('family_code') === null)
                    <div class="bg-light p-2 mb-3">
                        No records to display
                    </div>
                @else
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
                            @foreach ($individuals as $individual)
                                <tr>
                                    <td><i class="bi bi-caret-right-fill pe-3" data-bs-toggle="collapse"
                                            href="#col{{ $individual->id }}" role="button" aria-expanded="false"
                                            aria-controls="collapseExample"></i>{{ $individual->first_name }} </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex ">
                                            <button class="btn"><i
                                                    class="bi bi-pencil-square text-dark-blue"></i></button>
                                            <button class="btn"><i class="bi bi-trash text-red"></i> </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8" class="p-0 m-0">
                                        <div class="collapse p-0 m-0" id="col{{ $individual->id }}">
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
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                <div class="w-100 d-flex justify-content-end">
                    <form method="get" action="{{ route('families.create') }}">
                        @csrf
                        <input type="hidden" name="address_id" id="address">
                        <button type="submit" class="btn btn-primary mx-2">Add Members</button>
                    </form>
                    <button type="button" class="btn-red" data-bs-toggle="modal" data-bs-target="#familyHead">
                        Remove Family
                    </button>
                </div>

            </div>
            <div>
                <a class="btn btn-primary mx-2" href="{{ route('families.save') }}">Save</a>
            </div>
        </div>
    </x-navigation>

    <script>
        $(document).ready(function() {
            @if (session('address_id') === null)
                let address_id;
                $('#address_id').change(function() {
                    address_id = $(this).val();
                    console.log('change' + address_id)
                    $('#address').val(address_id)
                })
            @else
                let address_id = {{ session('address_id') }};
                console.log('change' + address_id)
                $('#address').val(address_id)
            @endif
        })
    </script>
</x-layout>
