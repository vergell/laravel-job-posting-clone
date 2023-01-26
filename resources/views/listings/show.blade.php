
<x-layout>
@include('partials._search')
<h2>
  {{$listing['title']}}
</h2>
<p>
  {{$listing['description']}}
</p>
<a href="/listings/{{$listing->id}}/edit">edit</a>

<form method="POST" action="/listings/{{$listing->id}}">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn btn-danger">Delete</button>
</form> 
</x-layout>