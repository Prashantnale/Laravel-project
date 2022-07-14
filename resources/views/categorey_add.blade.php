@extends('layouts.main')
@push('title')
<title>Add categorey</title>
@endpush
@section('main-section')
<h3 class="p-3 text-success">Add categorey</h3>
<form class="p-5" action="{{url('/add_categorey')}}" method="POST" enctype="multipart/form-data">
    <div class="form-groupv col-md-6">
        @csrf
      <label for="exampleInputEmail1">categorey</label>
      <input type="text" name="categorey" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted text-red">
        @error('categorey')
            {{$message}}
        @enderror
      </small>
      <button type="submit" class="btn btn-primary mt-md-2">Submit</button>
    </div>
  </form>
@endsection