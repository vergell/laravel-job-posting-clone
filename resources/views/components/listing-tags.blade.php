@props(['tagsCsv'])

@php
$tags = explode(', ',$tagsCsv);
@endphp
@foreach($tags as $tag)
  <a href="?tag={{$tag}}">
    <span class="badge bg-primary ">{{$tag}} </span>
  </a>
@endforeach