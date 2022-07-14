@extends('layouts.main')
@push('title')
<title>Add categorey</title>
@endpush
@section('main-section')
<h3 class="p-3 text-success">Add categorey</h3>
<form class="p-5" action="{{url('/categorey_edit')}}" method="POST" enctype="multipart/form-data">
    <div class="form-groupv col-md-6">
        @csrf
        <input type="hidden" name="c_id" id="3" value="{{$data->c_id}}">
      <label for="exampleInputEmail1">categorey</label>
      <input type="text" name="categorey" value="{{$data->c_name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted text-red"> 
      </small>
      <button type="submit" class="btn btn-primary mt-md-2">Submit</button>
    </div>
  </form>
@endsection