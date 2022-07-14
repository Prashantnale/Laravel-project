<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorey;

class CategoreyController extends Controller
{
    function index_categorey(){
        $data=categorey::all();
        return view('categorey_index',['categorey'=>$data]);
      }
      
      function add_categorey(){
        return view('categorey_add');
      }
    
      function u_add(Request $request){
        $request->validate([
                'categorey'=>'required'
        ]);
             $table=new categorey;
             $table->c_name=$request->categorey;
             $table->save();
             return redirect('/categorey')->with('add','Insert recored successfully');
      }
      function categorey_show($c_id){
        $data=categorey::find($c_id);
        return view('categorey_edit',['data'=>$data]);
      }
    
      function categorey_edit(Request $row){
           $tabl=categorey::find($row->c_id);
           $tabl->c_name=$row->categorey;
           $tabl->save();
           return redirect('/categorey')->with('delete','Edit recored successfully'); 
      }
    
      function categorey_deleted($c_id){
          $data=categorey::find($c_id);
          $data->delete();
            return redirect('/categorey')->with('dele','Deleted recored successfully');
      }
}
