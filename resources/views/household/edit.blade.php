<x-layout>
    <x-navigation pageName='Households'>
        <div class=" px-5 py-3">
            <div class="shadow-sm p-3 mb-5">
                <form action="{{ route('address.update', ['address' => $address->id]) }}" class="" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="h-auto p-3">
                        <div>
                            <x-form.input name="house_no" descriptiveName="House No" value="{{ old('house_no', $address->house_no) }}"  />
                        </div>

                        <div>
                            <x-form.input name="street" descriptiveName="Street" value="{{ old('street', $address->street) }}"  />
                        </div>

                        <div class="d-flex justify-content-end mt-2">
                            <a class="btn btn-secondary mx-3" href="{{ route('household') }}">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </x-navigation>
</x-layout>
