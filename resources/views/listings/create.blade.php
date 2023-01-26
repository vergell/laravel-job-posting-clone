<x-layout>
  <form method="POST" action="/listings" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="company" class="form-label">Company Name</label>
      <input type="text" class="form-control" name="company" value="{{old('company')}}">
      @error('company')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Job Title</label>
      <input  class="form-control" name="title" value="{{old('title')}}">
      @error('title')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="location" class="form-label">Job Location</label>
      <input class="form-control" name="location" value="{{old('location')}}">
      @error('location')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Contact Email</label>
      <input class="form-control" name="email" value="{{old('company')}}">
      @error('email')
      <div id="emailHelp" class="form-text text-danger" >{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="website" class="form-label">Webiste/Application URL</label>
      <input class="form-control" name="website" value="{{old('website')}}">
      @error('website')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="tags" class="form-label">Tags (Comma Separated)</label>
      <input class="form-control" name="tags" value="{{old('tags')}}">
      @error('tags')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="logo" class="form-label">Company Logo</label>
      <input type="file" class="form-control" name="logo" value="{{old('logo')}}">
      @error('logo')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Job Description</label>
      <textarea class="form-control" rows="3" name="description" >{{old('description')}}</textarea>
      @error('description')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</x-layout>