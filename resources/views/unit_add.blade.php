@extends('layouts.main')
@push('title')
<title>Add Unit</title>
@endpush
@section('main-section')
<h3 class="p-3 text-success">Add Unit</h3>
<form class="p-5" action="{{url('/add_unit')}}" method="POST" enctype="multipart/form-data">
    <div class="form-groupv col-md-6">
        @csrf
      <label for="exampleInputEmail1">Unit</label>
      <input type="text" name="unit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted text-red">
        @error('unit')
            {{$message}}
        @enderror
      </small>
      <button type="submit" class="btn btn-primary mt-md-2">Submit</button>
    </div>
  </form>
@endsection