@props(['name'])

@error($name)
    <small class="text-danger mt-2">{{ $message }}</small>
@enderror
