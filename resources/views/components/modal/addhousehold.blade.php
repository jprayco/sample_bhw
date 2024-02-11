@props(['modalID', 'title'])
<div class="modal fade" id="{{ $modalID }}" tabindex="-1" aria-labelledby="{{ $modalID }}Label"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('addAddress.store') }}" class="" method="POST">
                    @csrf
                    <div class="h-auto p-3">
                        <div>
                            <label for="first_name" class="form-label" aria-label="House no.">House no.</label>
                            <input type="text" class="form-control" name="house_no" value="{{ old('house_no') }}">
                            @error('house_no')
                                <small class="text-danger mt-2">{{ $message }}</small>
                            @enderror
                        </div>

                        <div>
                            <label for="street" class="form-label" aria-label="House no.">Street</label>
                            <input type="text" class="form-control" name="street" value="{{ old('street') }}">
                            @error('street')
                                <small class="text-danger mt-2">{{ $message }}</small>
                            @enderror
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

