@extends('layouts.main')
@push('title')
<title>stock</title>
@endpush
@section('main-section')

<div class="row">
    <div class="col m-3">
        <h3>Stock List</h3>
    </div>
   
    <div class="d-lg-flex col m-3">
     Form<input type="date" class="form-control" name="" id="">To
     <input type="date" class="form-control" name="" id="">
     <input type="submit" class="btn btn-primary ml-2 form-control" value="Search_Stock">
     <input type="submit" class="btn btn-success ml-2 form-control" value="Dashborard">
    </div>
</div>
<div class="container">
    <input type="text" class="form-control" name="" id="" placeholder="Search Producet Name">
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Opening Stock</th>
            <th>Opening Value</th>
            <th>Purchase Quantity</th>
            <th>Purchase value</th>
            <th>Sale Quantity</th>
            <th>Sale Value</th>
            <th>Closeing Stock</th>
            <th>Closeing value</th>
        </tr>

        <tbody id="sss">
        @foreach ($product as $key=>$row)
        <tr>
            <td><input type="text" name="" class="form-control" id="" value="{{$key+1}}"></td>
            <td><input type="text" name="" class="form-control" id="" value="{{$row->p_name}}"></td>
            <td><input type="text" name="" class="form-control" id="" value="{{$row->p_opening_stock}}"></td>
            <td><input type="text" name="" class="form-control" id="" value="{{$row->p_value}}"></td>
            <td><input type="text" name="" class="form-control" id="" value="{{0}}"></td>
            <td><input type="text" name="" class="form-control" id="" value="{{0}}"></td>
            <td><input type="text" name="" class="form-control" id="" value="{{0}}"></td>
            <td><input type="text" name="" class="form-control" id="" value="{{0}}"></td>
            <td><input type="text" name="" class="form-control" id="" value="{{0}}"></td>
            <td><input type="text" name="" class="form-control" id="" value="{{0}}"></td>
            {{-- @foreach($qtyrate as $key=>$rows)
            @if($row->p_id==$rows->product_name)
            <td>{{$rows->purchasequtiy}}</td>
            <td>{{$rows->purchaserate}}</td>
            @endif
            @endforeach
            @foreach ($salequty as $key=>$rows1)
            @if($row->p_id==$rows1->Product_Name)
            <td>{{$rows1->posqutiy}}</td>
            <td>{{$rows1->posrate}}</td>
            @endif
            @endforeach --}}
            {{-- <td>closing</td>
            <td>closing</td> --}}
        </tr>
       @endforeach
    </tbody>
    </table>
</div>

@endsection