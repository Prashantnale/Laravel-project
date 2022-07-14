@extends('layouts.main')
@push('title')
<title>purchase add</title>
@endpush
@section('main-section')


<h3 class="p-3">purchase Bill</h3>

<form class="p-3" action="{{url('/jsdata')}}" method="post">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Party Name</label>
      <input type="text" class="form-control" name="party_name" value="{{old('produect_name')}}" id="inputEmail4" required>
      <small id="emailHelp" class="form-text text-muted text-red">
      </small>
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Invoice No</label>
      <input type="number" class="form-control" name="invoice_no" id="" value="" required>
    </div>

    <div class="form-group col-md-3">
      <label for="inputAddress">Date</label>
      <input type="date" class="form-control" name="date" id="" value="" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputAddress2">Payment Term</label>
      <select class="custom-select" name="payment">
        <option value="cash">cash</option>
        <option value="bank">bank</option>
        <option value="cheque">cheque</option>
      </select>

    </div>

    <div class="form-group col-md-3">
      <label for="inputCity">produect Name</label>
      <select class="custom-select select2" name="produect_cat" id="pro" onchange="producet();" value="">
      @foreach($data as $row)
        <option value="{{$row->p_id}}">{{$row->p_name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group col-md-1">
      <label for="inputCity">qty</label>
      <input type="text" class="form-control" id="qty" value="" onkeyup="totales();">

    </div>

    <div class="form-group col-md-1">
      <label for="inputCity">Rate</label>
      <input type="text" class="form-control" value="{{old('produect_mrp')}}" id="rate" onkeyup="totales();" >

    </div>

    <div class="form-group col-md-1">
      <label for="inputCity">Dis %</label>
      <input type="text" class="form-control" value="{{old('produect_purchess_price')}}" id="dis" onkeyup="totales();" >

    </div>
    <div class="form-group col-md-1">
      <label for="inputCity">D Amount</label>
      <input type="text" class="form-control" value="{{old('produect_opening_stock')}}" id="dis_a" disabled>
    </div>
    <div class="form-group col-md-1">
      <label for="inputCity">Unit</label>
      <input type="text" class="form-control" value="{{old('produect_sales_price')}}" id="unit" onkeyup="totales();" >

    </div>

    <div class="form-group col-md-1">
      <label for="inputCity">Basic</label>
      <input type="text" class="form-control" value="{{old('produect_opening_stock')}}" id="basic" disabled>

    </div>
    <div class="form-group col-md-1">
      <label for="inputZip">Tax %</label>
      <input type="text" class="form-control" value="{{old('produect_value')}}" id="tax_p" onkeyup="totales();">

    </div>

    <div class="form-group col-md-1">
      <label for="inputZip">Tax</label> <br>
      <input type="text" class="form-control" value="{{old('produect_img')}}" id="tax" disabled>

    </div>

    <div class="form-group col-md-1">
      <label for="inputCity">Totale</label>
      <input type="text" class="form-control" value="{{old('produect_description')}}" id="totale" disabled>
    </div>
    <div class="form-group col-md-12">
     
   <a class="btn btn-primary" id="btn">Add producet</a>
      <!-- butttttttttttttt -->
    </div><br>
    <div class="form-group col-md-12">
      <h4>list of Added Producet</h4> 
     
    </div>
    <div class="table-responsive">
    <table class="table table-bordered" id="myTable">
      <thead>
     
        <tr>
          <th scope="col">produect</th>
          <th scope="col">Qty</th>
          <th scope="col">Rate</th>
          <th scope="col">Dis %</th>
          <th scope="col">D.Amt</th>
          <th scope="col">Unit</th>
          <th scope="col">Basic</th>
          <th scope="col">Tax %</th>
          <th scope="col">Tax Amt</th>
          <th scope="col">Amount</th>
          <th scope="col">Edit</th>
          <th scope="col">Cancel</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
    </div>
  </div>
 <div class="d-flex justify-content-end mt-3"> <button type="submit" class="btn btn-primary float-end">Submited</button></div>
</form>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{asset('myjs.js')}}"></script>
@endsection

