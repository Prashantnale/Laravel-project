@extends('layouts.main')
@push('title')
<title>pos list</title>
@endpush
@section('main-section')
<div class="p-3">
    <p class="btn btn-success">pos purchess</p>
    <a href="/add_pos" class="btn btn-success float-right">Add pos</a>
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
                <th scope="col" class="bg-secondary"> customer name</th>
                <th scope="col" class="bg-secondary"> phone number </th>
                <th scope="col" class="bg-secondary"> product price total</th>
                <th scope="col" class="bg-secondary"> dis%</th>
                <th scope="col" class="bg-secondary"> dis Amount</th>
                <th scope="col" class="bg-secondary">total Payble Rs.</th>
                <th scope="col" class="bg-secondary">Action</th>

              </tr>
            </thead>
            @foreach($data as $key=>$row)
           <tr>
            <td>{{$key+1}}</td>
            <td>{{$row->pos_name}}</td>
            <td>{{$row->pos_number}}</td>
            <td>{{$row->totalsub}}</td>
            <td>{{$row->dis_p}}%</td>
            <td>{{$row->dis_amt}}</td>
            <td>{{$row->totaleBill}}</td>
            <td>
              <a href="/printss/{{$row->pos_id}}"><button class="btn btn-primary"><i class="fa-solid fa-print"></i></button></a> 
              <a href="/tax_deleted/{{$row->pos_id}}"><button class="btn btn-danger"><i class="fa-solid fa-trash-can text-white"></i></button></a> 
            </td>
           </tr>
            @endforeach 
          </table>
    </div>
@endsection