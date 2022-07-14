<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;

class BrandController extends Controller
{
  function index_brand(){
    $data=brand::all();
    return view('brand_index',['brand'=>$data]);
  }
  
  function add_brand(){
    return view('brand_add');
  }

  function u_add(Request $request){
    $request->validate([
            'brand'=>'required'
    ]);
         $table=new brand;
         $table->b_name=$request->brand;
         $table->save();
         return redirect('/brand')->with('add','Insert recored successfully');
  }
  function brand_show($b_id){
    $data=brand::find($b_id);
    return view('brand_edit',['data'=>$data]);
  }

  function brand_edit(Request $row){
       $tabl=brand::find($row->b_id);
       $tabl->b_name=$row->b_name;
       $tabl->save();
       return redirect('/brand')->with('delete','Edit recored successfully'); 
  }

  function brand_deleted($b_id){
      $data=brand::find($b_id);
      $data->delete();
        return redirect('/brand')->with('dele','Deleted recored successfully');
  }
}
