<x-layout>
  <form class="row g-3" action="/users" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{old('name')}}">

      @error('name')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      @error('email')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="col-md-6">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputEmail4" name="password" value="{{old('password')}}">
      @error('password')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="col-md-6">
      <label for="password_confirmation" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="password_confirmation" value="{{old('password_confirmation')}}">
      @error('password_confirmation')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Sign Up</button>
    </div>
  </form>
</x-layout>