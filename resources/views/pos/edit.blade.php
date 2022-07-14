@extends('layouts.main')
@push('title')
    <title>pos edit</title>
@endpush
@section('main-section')
<style>
    .pk{
        height: 500px;
    }
</style>
<form action="{{url('/data')}}" method="post">
  @csrf
    <div class="row">
        <div class="col col-md-6 mt-3 border pk shadow-lg m-2" style="overflow: auto">
            <div class="row">
                <div class="input-group mt-3 col-6 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="customer name" name="conname" aria-label="Username" aria-describedby="basic-addon1" required>
                  </div>
                  <div class="input-group mt-3 col-6">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                    </div>
                    <input type="number" class="form-control" placeholder="phone number" name="number" aria-label="Username" aria-describedby="basic-addon1" required>
                  </div>
                  <div class="table-responsive">
                    
                  <table class="table table-bordered mt-3">
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                        <th>Remove</th>
                    </tr>
                    <tbody id="myTable">
                      
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
        <div class="col col-md-5 border pk mt-3 m-2 shadow-lg" style="overflow: auto">
            <div class="row">
                <div class="input-group mt-3 col-6 ">
                    <select class="form-control" name="" id="">
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                  </div>
                  <div class="input-group mt-3 col-6 ">
                    <select class="form-control" name="" id="">
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                  </div>
                 <div class="input-group mt-3 col-12 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Enter produect Name" aria-label="Username" aria-describedby="basic-addon1">
              </div>


              @foreach ($data as $item)
              <div class="col col-md-6">
                <div class="table-responsive">
              <table class="table table-bordered mt-2 text-center">
                <tr>
                  <td>
                    <div class="card">
                      <h5 class="card-header">{{$item->p_name}}</h5>
                      <div class="card-body ">
                          <img src="{{asset('/produect_img/'.$item->p_img)}}" alt="" width="50px" class="img-circle"><br>
                          Price:{{$item->p_sales_price}}/-	
                        <p class="card-text">{{$item->p_description}}</p>
                        <a class="btn btn-primary" onclick="myFunction('{{$item->p_id}}');">Add</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
            </div>
              @endforeach             
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-evenly mt-3 mb-3">
         <button type="submit" class="btn btn-success mx-3">Cash</button>
        <a class="btn btn-primary mx-3">Multipay</a>
        <a class="btn btn-warning  mx-3">Credit</a>
        <a class="btn btn-dark ">Quotation</a>
        <div class="input-group col-5">
            <input type="text" aria-label="First name" class="form-control" id="price" name="totalsub" value="0"  onkeyup="oncpp();" readonly>
            <input type="text" aria-label="First name" class="form-control" id="dis" name="dis_p" placeholder="Discount %" onkeyup="oncpp();" required>
            <input type="text" aria-label="Last name" class="form-control" id="dis_amt" name="dis_amt" placeholder="Discount Amt" readonly>
          </div>
           <b class="text-center ml-2"> Total Payable : Rs. <br>
            
           <input id="totale" name="totaleBill" onkeyup="oncpp();" value="" class="text-center" style="border:none; width: auto;" readonly></b> 
          
            <button class="btn btn-danger mx-auto">Cancel</button>
          
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{asset('pos.js')}}"></script>

@endsection
