<x-layout>
  <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="company" class="form-label">Company Name</label>
      <input type="text" class="form-control" name="company" value="{{$listing->company}}">
      @error('company')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Job Title</label>
      <input  class="form-control" name="title" value="{{$listing->title}}">
      @error('title')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="location" class="form-label">Job Location</label>
      <input class="form-control" name="location" value="{{$listing->location}}">
      @error('location')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Contact Email</label>
      <input class="form-control" name="email" value="{{$listing->email}}">
      @error('email')
      <div id="emailHelp" class="form-text text-danger" >{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="website" class="form-label">Webiste/Application URL</label>
      <input class="form-control" name="website" value="{{$listing->website}}">
      @error('website')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="tags" class="form-label">Tags (Comma Separated)</label>
      <input class="form-control" name="tags" value="{{$listing->tags}}">
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
      <textarea class="form-control" rows="3" name="description" >{{$listing->description}}</textarea>
      @error('description')
      <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</x-layout>