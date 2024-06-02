@props(['tagsCsv'])

@php
$Tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
@foreach($Tags as $Tag)
<li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
<a href="/logang?Tags={{$Tag}}">{{$Tag}}</a>
</li>
@endforeach
</ul>