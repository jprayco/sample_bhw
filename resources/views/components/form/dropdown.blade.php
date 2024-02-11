@props(['name', 'descriptiveName'])

<x-form.label name="{{$name}}" descriptiveName="{{$descriptiveName}}" />
<select name="{{$name}}" class="form-select" id="{{$name}}">
    {{$slot}}
</select>
<x-form.error name="{{$name}}" />
