@extends('layouts.main')
@push('title')
<title>tax list</title>
@endpush
@section('main-section')
<div class="p-3">
    <p class="btn btn-success">tax List</p>
    <a href="/add_tax" class="btn btn-success float-right">Add tax</a>
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
                <th scope="col" class="bg-secondary">tax</th>
                <th scope="col" class="bg-secondary">pre</th>
                <th scope="col" class="bg-secondary">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tax as $key=>$item)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->t_name}}</td>
                <td>{{$item->t_per}}%</td>
                <td>
                <a href="/tax_edit/{{$item->t_id}}"><button class="btn btn-success"><i class="fa-solid fa-pen-to-square text-white"></i></button></a> 
                <a href="/tax_deleted/{{$item->t_id}}"><button class="btn btn-danger"><i class="fa-solid fa-trash-can text-white"></i></button></a> 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection