@extends('layouts.main')
@push('title')
    <title>edit produect</title>
@endpush
@section('main-section')
    <h3 class="p-3 text-success">edit produect</h3>
    <form class="p-3" action="{{url('/edit_produect')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <input type="hidden" name="p_id" id="" value="{{$data->p_id}}">
            <div class="form-group col-md-4">
                <label for="inputEmail4">produect Name</label>
                <input type="text" class="form-control" name="produect_name" value="{{$data->p_name}}" id="inputEmail4">
                
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">produect Brand</label>
                <select class="custom-select" name="produect_brand" required>
                    
                    @foreach($brand as $row)
                    @if($data->p_brand==$row->b_id)
                    {
                        {{$select="selected"}}
                    }
                    @else{
                        {{$select=""}}
                    }
                    @endif
                    <option value="{{$row->b_id}}"{{$select}}>{{$row->b_name}}</option>
                    @endforeach
                  </select>
                  
            </div>

            <div class="form-group col-md-4">
                <label for="inputAddress">produect Unit</label>
                <select class="custom-select" name="produect_unit">
                    
                    @foreach($unit as $rows)
                    @if($data->p_unit==$rows->u_id)
                    {
                        {{$select="selected"}}
                    }
                    @else{
                        {{$select=""}}
                    }
                    @endif
                    <option value="{{$rows->u_id}}" {{$select}}>{{$rows->unit}}</option>
                    @endforeach
                  </select>
                  
            </div>
            <div class="form-group col-md-4">
                <label for="inputAddress2">produect cat</label>
                <select class="custom-select" name="produect_cat">
                    
                    @foreach($cat as $row)
                    @if($data->p_cat==$row->c_id)
                    {
                        {{$select="selected"}}
                    }
                    @else{
                        {{$select=""}}
                    }
                    @endif
                    <option value="{{$row->c_id}}"{{$select}}>{{$row->c_name}}</option>
                    @endforeach
                  </select>
                  
            </div>

            <div class="form-group col-md-4">
                <label for="inputCity">produect subcat</label>
                <select class="custom-select" name="produect_subcat">
                    
                    @foreach($sub as $row)
                    @if($data->p_subcat==$row->s_id)
                    {
                        {{$select="selected"}}
                    }
                    @else{
                        {{$select=""}}
                    }
                    @endif
                    <option id="sc_id" value="{{$row->sc_id}}" {{$select}}>{{$row->s_name}}</option>
                    @endforeach
                  </select>
                  
            </div>

            <div class="form-group col-md-4">
                <label for="inputCity">produect MRP</label>
                <input type="text" class="form-control" name="produect_mrp" value="{{$data->p_mrp}}" id="inputCity">
                
            </div>

            <div class="form-group col-md-4">
                <label for="inputCity">produect purchess_price</label>
                <input type="text" class="form-control" name="produect_purchess_price" value="{{$data->p_purchess_price}}" id="inputCity">
                
            </div>

            <div class="form-group col-md-4">
                <label for="inputCity">produect sales_price</label>
                <input type="text" class="form-control" name="produect_sales_price" value="{{$data->p_sales_price}}" id="inputCity">
                
            </div>

            <div class="form-group col-md-4">
                <label for="inputCity">produect opening_stock</label>
                <input type="text" class="form-control" name="produect_opening_stock" value="{{$data->p_opening_stock}}" id="inputCity">
                
            </div>
            <div class="form-group col-md-4">
                <label for="inputZip">Opening value</label>
                <input type="text" class="form-control" name="produect_value" value="{{$data->p_value}}" id="inputZip">
                
            </div>

            <div class="form-group col-md-4">
                <label for="inputZip">produect img</label> <br>
                <img src="{{asset('produect_img/'.$data->p_img)}}" alt="" width="30px" height="30px">
                <input type="file" name="produect_img" value="" id="inputZip">
                
            </div>

            <div class="form-group col-md-4">
                <label for="inputCity">produect description</label>
                <input type="text" class="form-control" name="produect_description" value="{{$data->p_description}}" id="inputCity">
                
            </div>

        </div>
    </form>
@endsection
