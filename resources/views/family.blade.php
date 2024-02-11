<x-layout>
    <x-navigation pageName='Families'>
        <div class=" p-5">
            <div class="shadow-sm p-3">
                @if (session('success'))
                    <div class="alert alert-success mt-2">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="d-flex justify-content-end mb-2">
                    <input type="text" class="" name="search" placeholder="Search">
                    <a class="btn btn-primary mx-2" href="{{ route('families.add') }}">Add Family</a>
                </div>
                @if ($persons->total() == 0)
                    <div class="bg-light p-2">
                        No records to display
                    </div>
                @else
                    <table class="table table-borderless overflow-auto">
                        <thead class="bg-light text-dark-blue">
                            <tr>
                                <th scope="col"> Head of the Family</th>
                                <th scope="col">Address</th>
                                <th scope="col">No of Family Members</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($persons as $person)
                                <tr>
                                    <td>{{ $person->first_name }} {{ $person->last_name }} </td>
                                    <td>{{ $person->home_address->house_no }} {{ $person->home_address->street }} </td>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex ">
                                            <a class="btn"
                                                href="{{ route('household.edit', ['address' => $person->id]) }}"><i
                                                    class="bi bi-pencil-square text-dark-blue"></i></a>
                                            <form method="post"
                                                action="{{ route('address.destroy', ['address' => $person->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn"><i
                                                        class="bi bi-trash text-red"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </x-navigation>
</x-layout>
