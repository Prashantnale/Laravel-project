@extends('layouts.main')
@push('title')
<title>Add tax</title>
@endpush
@section('main-section')
<h3 class="p-3 text-success">Add tax</h3>
<form class="p-5" action="{{url('/tax_edit')}}" method="POST" enctype="multipart/form-data">
    <div class="form-groupv col-md-6">
        @csrf
        <input type="hidden" name="t_id" id="3" value="{{$data->t_id}}">
      <label for="exampleInputEmail1">tax</label>
      <input type="text" name="tax" value="{{$data->t_name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted text-red"> 
      </small>
      <label for="exampleInputEmail1">per</label>
      <input type="text" name="per" value="{{$data->t_per}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted text-red"> 
      </small>
      <button type="submit" class="btn btn-primary mt-md-2">Submit</button>
    </div>
  </form>
@endsection