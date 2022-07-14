@extends('layouts.main')
@push('title')
    <title>Add produect</title>
@endpush
@section('main-section')
    <h3 class="p-3 text-success">Add produect</h3>
    <form class="p-3" action="{{url('/add_produect')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail4">produect Name</label>
                <input type="text" class="form-control" name="produect_name" value="{{old('produect_name')}}" id="inputEmail4">
                <small id="emailHelp" class="form-text text-muted text-red">
                    @error('produect_name')
                        {{$message}}
                    @enderror
                </small>
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">produect Brand</label>
                <select class="custom-select select2" name="produect_brand" required>
                    
                    @foreach($brand as $row)
                    <option value="{{$row->b_id}}">{{$row->b_name}}</option>
                    @endforeach
                  </select>
                  <small id="emailHelp" class="form-text text-muted text-red">
                    @error('produect_brand')
                        {{$message}}
                    @enderror
                  </small>
            </div>

            <div class="form-group col-md-4">
                <label for="inputAddress">produect Unit</label>
                <select class="custom-select select2" name="produect_unit">
                    
                    @foreach($unit as $row)
                    <option value="{{$row->u_id}}">{{$row->unit}}</option>
                    @endforeach
                  </select>
                  <small id="emailHelp" class="form-text text-muted text-red">
                    @error('produect_unit')
                        {{$message}}
                    @enderror
                  </small>
            </div>
            <div class="form-group col-md-4">
                <label for="inputAddress2">produect cat</label>
                <select class="custom-select select2" name="produect_cat">
                    
                    @foreach($cat as $row)
                    <option value="{{$row->c_id}}">{{$row->c_name}}</option>
                    @endforeach
                  </select>
                  <small id="emailHelp" class="form-text text-muted text-red">
                    @error('produect_cat')
                        {{$message}}
                    @enderror
                  </small>
            </div>

            <div class="form-group col-md-4">
                <label for="inputCity">produect subcat</label>
                <select class="custom-select select2" name="produect_subcat">
                    @foreach($sub as $row)
                    <option value="{{$row->sc_id}}">{{$row->s_name}}</option>
                    @endforeach
                  </select>
                  <small id="emailHelp" class="form-text text-muted text-red">
                    @error('produect_subcat')
                        {{$message}}
                    @enderror
                  </small>
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">tax %</label>
                <select class="custom-select select2" name="produect_tax">
                    
                    @foreach($tax as $row)
                    <option id="sc_id" value="{{$row->t_id}}">{{$row->t_per}}%</option>
                    @endforeach
                  </select>
                  <small id="emailHelp" class="form-text text-muted text-red">
                    @error('produect_tax')
                        {{$message}}
                    @enderror
                  </small>
            </div>

            <div class="form-group col-md-4">
                <label for="inputCity">produect MRP</label>
                <input type="text" class="form-control" name="produect_mrp" value="{{old('produect_mrp')}}" id="inputCity">
                <small id="emailHelp" class="form-text text-muted text-red">
                    @error('produect_mrp')
                        {{$message}}
                    @enderror
                </small>
            </div>

            <div class="form-group col-md-4">
                <label for="inputCity">produect purchess_price</label>
                <input type="text" class="form-control" name="produect_purchess_price" value="{{old('produect_purchess_price')}}" id="inputCity">
                <small id="emailHelp" class="form-text text-muted text-red">
                    @error('produect_purchess_price')
                        {{$message}}
                    @enderror
                </small>
            </div>

            <div class="form-group col-md-4">
                <label for="inputCity">produect sales_price</label>
                <input type="text" class="form-control" name="produect_sales_price" value="{{old('produect_sales_price')}}" id="inputCity">
                <small id="emailHelp" class="form-text text-muted text-red">
                    @error('produect_sales_price')
                        {{$message}}
                    @enderror
                </small>
            </div>

            <div class="form-group col-md-4">
                <label for="inputCity">produect opening_stock</label>
                <input type="text" class="form-control" name="produect_opening_stock" value="{{old('produect_opening_stock')}}" id="inputCity">
                <small id="emailHelp" class="form-text text-muted text-red">
                    @error('produect_opening_stock')
                        {{$message}}
                    @enderror
                </small>
            </div>
            <div class="form-group col-md-4">
                <label for="inputZip">Opening value</label>
                <input type="text" class="form-control" name="produect_value" value="{{old('produect_value')}}" id="inputZip">
                <small id="emailHelp" class="form-text text-muted text-red">
                    @error('produect_value')
                        {{$message}}
                    @enderror
                </small>
            </div>

            <div class="form-group col-md-4">
                <label for="inputZip">produect img</label> <br>
                <input type="file" name="produect_img" value="{{old('produect_img')}}" id="inputZip">
                <small id="emailHelp" class="form-text text-muted text-red">
                    @error('produect_img')
                        {{$message}}
                    @enderror
                </small>
            </div>

            <div class="form-group col-md-4">
                <label for="inputCity">produect description</label>
                <input type="text" class="form-control" name="produect_description" value="{{old('produect_description')}}" id="inputCity">
                <small id="emailHelp" class="form-text text-muted text-red">
                    @error('produect_description')
                        {{$message}}
                    @enderror
                </small>
            </div>

        </div>
        <button type="submit" class="btn btn-primary">Submited</button>
    </form>
@endsection
