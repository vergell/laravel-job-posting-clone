<x-layout>
  <form class="row g-3" action="/users/authenticate" method="POST">
    @csrf
    
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
      @error('email')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputEmail4" name="password" value="{{old('password')}}">
      @error('password')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
   
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Sign in.</button>
    </div>
  </form>
</x-layout>