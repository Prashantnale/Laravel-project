@extends('layouts.main')
@push('title')
<title>Add subcategorey</title>
@endpush
@section('main-section')
<h3 class="p-3 text-success">Add subcategorey</h3>
<form class="p-5" action="{{url('/subcategorey_edit')}}" method="POST" enctype="multipart/form-data">
    <div class="form-groupv col-md-6">
        @csrf
        <input type="hidden" name="s_id" id="d2" value="{{$data->s_id}}">
        <input type="hidden" name="sc_id" id="d2" value="{{$data->sc_id}}">
      <label for="exampleInputEmail1">subcategorey</label>
      <input type="text" name="subcategorey" class="form-control" value="{{$data->s_name}}" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted text-red">
        @error('subcategorey')
            {{$message}}
        @enderror
      </small>
      <button type="submit" class="btn btn-primary mt-md-2">Submit</button>
    </div>
  </form>
@endsection