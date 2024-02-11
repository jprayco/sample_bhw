@props(['name', 'descriptiveName','type'=>'text', 'value'])

<x-form.label name="{{$name}}" descriptiveName="{{$descriptiveName}}" />
<input type="{{$type}}" class="form-control" name="{{$name}}" value="{{$value}}">
<x-form.error name="{{$name}}" />
