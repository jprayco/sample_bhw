<x-layout>
    <x-navigation pageName='Households'>
        <div class=" px-5 py-3">
            <div class="shadow-sm p-3">
                @if (session('success'))
                    <div class="alert alert-success mt-2">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="d-flex justify-content-end mb-2">
                    <input type="text" class="" name="search" placeholder="Search">
                    <a class="btn btn-primary mx-2" href="{{ route('household.add') }}">Add Address</a>
                </div>
                @if ($addresses->total() == 0)
                    <div class="bg-light p-2">
                        No records to display
                    </div>
                @else
                    <table class="table table-borderless overflow-auto">
                        <thead class="bg-light text-dark-blue">
                            <tr>
                                <th scope="col"> House no.</th>
                                <th scope="col">Street</th>
                                <th scope="col">No. of Family Lived</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($addresses as $address)
                                <tr>
                                    <td>{{ $address->house_no }} </td>
                                    <td>{{ $address->street }} {{ $address->id }} </td>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex ">
                                            <a class="btn"
                                                href="{{ route('household.edit', ['address' => $address->id]) }}"><i
                                                    class="bi bi-pencil-square text-dark-blue"></i></a>
                                            <form method="post"
                                                action="{{ route('address.destroy', ['address' => $address->id]) }}">
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
                <div class="d-flex justify-content-end">
                    {{ $addresses->links() }}
                </div>
            </div>
        </div>
    </x-navigation>
</x-layout>
