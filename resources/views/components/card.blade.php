@props(['icon', 'totalNum', 'category', 'color', 'page'])
<a class="col-2 shadow-sm m-2 p-2 hover-card text-decoration-none {{$color}}" href='{{$page}}'>
    <span class="material-symbols-outlined">
        {{$icon}}
    </span>
    <h1 class="text-center">{{ $totalNum }} </h1>
    <p class="p-0 m-0 text-center">{{ $category }} </p>
</a>
