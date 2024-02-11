<x-layout>
    <x-navigation pageName='Add Family Member'>
        <div class=" px-5 py-3">
            <div class="shadow-sm p-3 mb-5">
                <form action="{{ route('person.store') }}" class="" method="POST">
                    @csrf
                    <div class="h-auto p-3">
                        <div>
                            <x-form.input name="first_name" descriptiveName="First Name" value="{{ old('first_name') }}" />
                        </div>

                        <div>
                            <x-form.input name="last_name" descriptiveName="Last Name" value="{{ old('last_name') }}" />
                        </div>
                        <div>
                            <x-form.dropdown name="gender" descriptiveName="Gender">
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </x-form.dropdown>
                        </div>
                        <div>
                            <x-form.input name="bday" descriptiveName="Birth Date" type="date"
                                value="{{ old('bday') }}" />
                        </div>
                        <div>
                            <x-form.input name="contact_no" descriptiveName="Contact Number"
                                value="{{ old('contact_no') }}" />
                        </div>
                        <div>
                            <x-form.dropdown name="civil_status_id" descriptiveName="Civil Status">
                                <option value="" {{ old('civil_status_id') ? '' : 'selected' }} disabled>-Please Select-</option>
                                @foreach ($civil_status as $status)
                                    <option value="{{ $status->id }}">{{ $status->civil_status }} </option>
                                @endforeach
                            </x-form.dropdown>
                        </div>
                        <div>
                            <x-form.dropdown name="pwd_categories_id" descriptiveName="PWD">
                                <option value="" {{ old('pwd_categories_id') ? '' : 'selected' }} disabled>-Please Select-</option>
                                @foreach ($pwd_categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->pwd_category }} </option>
                                @endforeach
                            </x-form.dropdown>
                        </div>
                        <div>
                            <x-form.dropdown name="lgbt_category_id" descriptiveName="LGBT">
                                <option value="" {{ old('lgbt_category_id') ? '' : 'selected' }} disabled>-Please Select-</option>
                                @foreach ($lgbt_categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->lgbt_category }} </option>
                                @endforeach
                            </x-form.dropdown>
                        </div>
                        <x-form.input name="address_id" descriptiveName="" value="{{$address}}"  type="hidden" />
                        <div class="d-flex justify-content-end mt-2">
                            <a class="btn btn-secondary mx-3" href="{{ route('families.add') }}">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </x-navigation>
</x-layout>
