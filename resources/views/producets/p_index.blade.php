@extends('layouts.main')
@push('title')
<title>produect list</title>
@endpush
@section('main-section')
<div class="p-3">
    <p class="btn btn-success">produect List</p>
    <a href="/producet_add" class="btn btn-success float-right">Add produect</a>
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
                <th scope="col" class="bg-secondary"> img</th>
                <th scope="col" class="bg-secondary"> Name </th>
                <th scope="col" class="bg-secondary"> sales_price</th>
                <th scope="col" class="bg-secondary"> mrp</th>
                <th scope="col" class="bg-secondary"> purchess_price</th>
                <th scope="col" class="bg-secondary">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($row as $key=>$item)
              <tr>
                <td>{{$key+1}}</td>
                <td><img src="{{asset('produect_img/'.$item->p_img)}}" alt="" width="50px" height="50px"> </td>
                <td>{{$item->p_name}}</td>
                <td>{{$item->p_sales_price}}</td>
                <td>{{$item->p_mrp}}</td>
                <td>{{$item->p_purchess_price}}</td>
                <td>
                    <a href="/produect_show/{{$item->p_id}}"><button class="btn btn-primary"><i class="fa-solid fa-eye"></i></button></a> 
                <a href="/produect_edit/{{$item->p_id}}"><button class="btn btn-success"><i class="fa-solid fa-pen-to-square text-white"></i></button></a> 
                <a href="/produect_deleted/{{$item->p_id}}"><button class="btn btn-danger"><i class="fa-solid fa-trash-can text-white"></i></button></a> 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection