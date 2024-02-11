@props(['modalID', 'title', 'addressID'])
<div class="modal fade" id="{{ $modalID }}" tabindex="-1" aria-labelledby="{{ $modalID }}Label"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-danger text-4 text-center">
                    <i class="bi bi-exclamation-circle-fill"></i>
                </div>
                <div class="text-center my-5 h5">
                    Are you sure you want to delete? {{ $addressID }}
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Yes</button>
                    <button type="button" class="btn btn-danger mx-3" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
