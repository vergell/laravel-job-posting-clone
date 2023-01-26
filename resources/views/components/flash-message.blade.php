@if(session()->has('message'))

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>{{session('message')}}</p>
  </div>

@endif