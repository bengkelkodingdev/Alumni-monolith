{{-- @props(['tagsCsv'])

@php
$Tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
  @foreach($Tags as $Tag)
  <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
    <a href="/lokeradmin?Tags={{$Tag}}" style="color: inherit; text-decoration: none;">{{$Tag}}</a>
  </li>
  @endforeach
</ul> --}}
@props(['tagsCsv'])

@php
$Tags = explode(',', $tagsCsv);
@endphp

<ul style="display: flex; flex-wrap: wrap; margin: 0; padding: 0; list-style: none;">
  @foreach($Tags as $Tag)
  <li style="display: flex; align-items: center; justify-content: center; background-color: #114d91  ; color: white; border-radius: 1rem; padding: 0.25rem 0.75rem; margin: 0 0.5rem 0.5rem 0; font-size: 0.75rem;">
    <a href="/lokeradmin?Tags={{ $Tag }}" style="color: inherit; text-decoration: none;">{{ $Tag }}</a>
  </li>
  @endforeach
</ul>


