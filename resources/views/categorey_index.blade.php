@extends('layouts.main')
@push('title')
<title>categorey list</title>
@endpush
@section('main-section')
<div class="p-3">
    <p class="btn btn-success">categorey List</p>
    <a href="/add_categorey" class="btn btn-success float-right">Add categorey</a>
</div>
@if ($massage=Session::get('add'))
<div class="alert alert-success" role="alert">
    {{$massage}}
</div>
@endif
@if($mass=Session::get('delete'))
<div class="alert alert-info" role="alert">
            {{$mass}}
  </div>
@endif
@if($pp=Session::get('dele'))
<div class="alert alert-danger" role="alert">
    {{$pp}}
</div>
@endif

    <div class="table-responsive p-3">
        <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col" class="bg-secondary">Sr.no</th>
                <th scope="col" class="bg-secondary">categorey</th>
                <th scope="col" class="bg-secondary">subcategorey</th>
                <th scope="col" class="bg-secondary">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categorey as $key=>$item)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->c_name}}</td>
                <td><a href="/subcategorey/{{$item->c_id}}" class="btn btn-info">Subcategorey</a></td>
                <td>
                <a href="/categorey_edit/{{$item->c_id}}"><button class="btn btn-success"><i class="fa-solid fa-pen-to-square text-white"></i></button></a> 
                <a href="/categorey_deleted/{{$item->c_id}}"><button class="btn btn-danger"><i class="fa-solid fa-trash-can text-white"></i></button></a> 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection