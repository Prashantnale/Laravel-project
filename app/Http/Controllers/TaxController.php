<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tax;

class TaxController extends Controller
{
    function index_tax(){
        $data=tax::all();
        return view('tax_index',['tax'=>$data]);
      }
      
      function add_tax(){
        return view('tax_add');
      }
    
      function u_add(Request $request){
        $request->validate([
                'tax'=>'required',
                'per'=>'required'
        ]);
             $table=new tax;
             $table->t_name=$request->tax;
             $table->t_per=$request->per;
             $table->save();
             return redirect('/tax')->with('add','Insert recored successfully');
      }
      function tax_show($t_id){
        $data=tax::find($t_id);
        return view('tax_edit',['data'=>$data]);
      }
    
      function tax_edit(Request $row){
           $tabl=tax::find($row->t_id);
           $tabl->t_name=$row->tax;
           $tabl->t_per=$row->per;
           $tabl->save();
           return redirect('/tax')->with('delete','Edit recored successfully'); 
      }
    
      function tax_deleted($t_id){
          $data=tax::find($t_id);
          $data->delete();
            return redirect('/tax')->with('dele','Deleted recored successfully');
      }
}
