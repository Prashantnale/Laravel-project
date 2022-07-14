@extends('layouts.main')
@push('title')
<title>Add tax</title>
@endpush
@section('main-section')
<h3 class="p-3 text-success">Add tax</h3>
<form class="p-5" action="{{url('/add_tax')}}" method="POST" enctype="multipart/form-data">
    <div class="form-groupv col-md-6">
        @csrf
      <label for="exampleInputEmail1">tax</label>
      <input type="text" name="tax" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted text-red">
        @error('tax')
            {{$message}}
        @enderror
      </small>
      <label for="exampleInputEmail1">per</label>
      <input type="text" name="per" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted text-red">
        @error('per')
            {{$message}}
        @enderror
      </small>
      <button type="submit" class="btn btn-primary mt-md-2">Submit</button>
    </div>
  </form>
@endsection