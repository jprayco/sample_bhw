<x-layout>
    <x-navigation pageName='Home'>
        <div class="row p-0 m-1">
            <div class="col-8 shadow-sm">
                <p>Total Population</p>
                <div class="w-100 d-flex justify-content-center">
                    <canvas id="myChart_multi_lines" style="width:100%;max-width:800px"></canvas>
                </div>
            </div>
            <div class="col-4 shadow-sm d-flex align-items-center">
                <div class="m-auto">
                    <div class="w-100 d-flex justify-content-center">
                        <canvas id="myChart_pie" style="width:100%;max-width:300px"></canvas>
                    </div>
                    <h5 class="text-center">Total Population: 40000</h5>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <h5>As of now Record</h5>
        </div>
        <div class="row m-0 p-3 d-flex justify-content-between">
            <x-card icon='groups' totalNum='520' category='Families' color='text-dark-blue' page="{{ route('families') }}"/>
            <x-card icon='holiday_village' totalNum='400' category='Households' color='text-dark-blue' page="{{ route('household') }}"/>
            <x-card icon='elderly' totalNum='258' category='Senior' color='text-dark-blue' page=''/>
            <x-card icon='accessible_forward' totalNum='157' category='PWD' color='text-dark-blue' page=''/>
            <x-card icon='pregnancy' totalNum='56' category='Pregnant' color='text-dark-blue' page=''/>
            <x-card icon='transgender' totalNum='112' category='LGBTQIA+' color='text-dark-blue' page=''/>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <script src="/js/chart.js"></script>
    </x-navigation>
</x-layout>
