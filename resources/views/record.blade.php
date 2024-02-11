<x-layout>
    <x-navigation pageName='Add Record'>
        <div class="vh-95 row p-0 m-0">
            <button class="col-2 shadow-sm p-2 text-dark-blue cursor-pointer hover-card h-5 mx-2 btn-decoration-none"
                type="button" data-bs-toggle="modal" data-bs-target="#addHouseHold">
                <div class="text-end">
                    <span class="material-symbols-outlined">
                        holiday_village
                    </span>
                </div>
                <p>+Add household</p>
            </button>
            <div class="col-2 shadow-sm p-2 text-dark-blue cursor-pointer hover-card h-5 mx-2">
                <div class="text-end">
                    <span class="material-symbols-outlined">
                        groups
                    </span>
                </div>
                <p>+Add Family</p>
            </div>
        </div>

        {{-- <div class="my-3 p-4">
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
                    <div class="bg-light w-100 p-1"> No family added</div>
                    @if (session()->has('hasFamily'))
                        <p>true</p>
                    @else
                        <p>false</p>
                    @endif
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
            <x-modal.addRecord modalID='addFamily' title='Add Family' />
        </div> --}}
    </x-navigation>
    <x-modal.addRecord modalID='addFamily' title='Add Family' />
    <x-modal.addhousehold modalID='addHouseHold' title='Add Household' />
    <script>
        var hasErrors = @json($errors->any());
        console.log( hasErrors)
        window.onload = function() {
            if (hasErrors===true) {
                $('#addHouseHold').modal('show');
            }
        };
    </script>
</x-layout>
