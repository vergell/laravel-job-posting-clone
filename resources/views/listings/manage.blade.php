<x-layout>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col"></th>
        <th scope="col"> </th>
      </tr>
    </thead>
    <tbody>
      @unless ($listings->isEmpty())
          @foreach ($listings as $listing)
            <tr>
              <th scope="row">1</th>
              <td><a href="">{{$listing->title}}</a></td>
              <td><a href="/listings/{{$listing->id}}/edit">edit</a></td>
              <td><form method="POST" action="/listings/{{$listing->id}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form> </td>
            </tr>
         @endforeach
         @else  <tr>
          <th scope="row">1</th>
          <td>no Listings</td>
          <td></td>
          <td></td>
        </tr>
      @endunless
      
    </tbody>
  </table>
</x-layout>