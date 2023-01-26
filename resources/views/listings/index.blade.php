<x-layout>
@include('partials._hero')

<div class="album py-5 bg-light">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
@foreach ($listings as $listing)
<x-listing-card :listing="$listing" />
@endforeach

    </div>
  </div>
</div>

<div><ul class="pagination">
  {{$listings->links()}}</ul>
</div>
    {{-- <div class="row no-gutters bg-light position-relative">
      
      <div class="col-md-6 mb-md-0 p-md-4">
        <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80" class="w-100" alt="...">
      </div>
      <div class="col-md-6 position-static p-4 pl-md-0">
        <h5 class="mt-0">{{$listing['title']}}</h5>
        <h4>{{$listing['company']}}</h4>
        <span class="badge bg-primary">{{$listing['tags']}}</span>
        <p>{{$listing['title']}}</p>
        <a href="/Listings/{{$listing['id']}}" class="stretched-link">Go somewhere</a>
        
      </div>
    </div> --}}
</x-layout>