@extends('layouts.main')
@push('title')
<title>purchase list</title>
@endpush
@section('main-section')
<div class="p-3">
    <p class="btn btn-success">purchase List</p>
    <a href="/add_p" class="btn btn-success float-right">Add purchase</a>
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
                <th scope="col" class="bg-secondary">party_name</th>
                <th scope="col" class="bg-secondary">invoice_no</th>
                <th scope="col" class="bg-secondary">date</th>
                <th scope="col" class="bg-secondary">payment</th>
                <th scope="col" class="bg-secondary">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $key=>$item)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->party_name}}</td>
                <td>{{$item->invoice_no}}</td>
                <td>{{$item->date}}</td>
                <td>{{$item->payment}}</td>
                <td>
                  <a href="/print/{{$item->party_id}}"><button class="btn btn-primary"><i class="fa-solid fa-print"></i></button></a> 
                <a href="/purchase_edit/{{$item->party_id}}"><button class="btn btn-success"><i class="fa-solid fa-pen-to-square text-white"></i></button></a> 
                <a href="/tax_deleted/{{$item->party_id}}"><button class="btn btn-danger"><i class="fa-solid fa-trash-can text-white"></i></button></a> 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    
@endsection