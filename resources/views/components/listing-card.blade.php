@props(['listing'])
      <div class="col">
        <div class="card shadow-sm">
          {{-- <svg
            class="bd-placeholder-img card-img-top"
            width="100%"
            height="225"
            xmlns="http://www.w3.org/2000/svg"
            role="img"
            aria-label="Placeholder: Thumbnail"
            preserveAspectRatio="xMidYMid slice"
            focusable="false"
          > --}}

          <img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-mage.jpg')}}" class="img-fluid" alt="...">
          {{-- </svg> --}}

          <div class="card-body ">
   
              <h5 class=" text-start ">{{$listing['title']}}</h5>
              <h5 class=" text-start ">{{$listing['company']}}</h5>

          <x-listing-tags :tagsCsv="$listing->tags" />
            
              <p class="card-text text-start">
                {{$listing['description']}}
              </p>

            <div
              class="d-flex justify-content-between align-items-center"
            >
              <div class="btn-group">
                <a href="/listings/{{$listing['id']}}">
                  <button
                    type="button"
                    class="btn btn-sm btn-outline-secondary"
                  >
                    view
                  </button>
                </a>
                <button
                  type="button"
                  class="btn btn-sm btn-outline-secondary"
                >
                  Edit
                </button>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>