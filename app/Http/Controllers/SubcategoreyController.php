<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subcategorey;

class SubcategoreyController extends Controller
{
    function index_subcategorey($c_id){
        $pk=$c_id;
        $data=subcategorey::where('sc_id',$pk)->get();
        return view('subcategorey_index',['subcategorey'=>$data,'c_id'=>$pk]);
      }
      
      function add_subcategorey($c_id){
        $pk=$c_id;
        return view('subcategorey_add',['c_id'=>$pk]);
      }
    
      function s_add(Request $request){
        $request->validate([
                'c_id'=>'required',
                'subcategorey'=>'required'
        ]);
             $c_id=$request->c_id;
             $table=new subcategorey;
             $table->s_name=$request->subcategorey;
             $table->sc_id=$request->c_id;
             $table->save();
             return redirect('/subcategorey/'.$c_id)->with('add','Insert recored successfully');
      }
      function subcategorey_show($s_id){
                  $data=subcategorey::find($s_id);
                  return view('subcategorey_edit',['data'=>$data]);
      }
    
      function subcategorey_edit(Request $row){
           $c_id=$row->sc_id;
           $tabl=subcategorey::find($row->s_id);
           $tabl->s_name=$row->subcategorey;
           $tabl->save();
           return redirect('/subcategorey/'.$c_id)->with('delete','Edit recored successfully'); 
      }
    
      function subcategorey_deleted($s_id){
        $data=subcategorey::find($s_id); 
        $sc_id=$data->sc_id;
          $data->delete();
            return redirect('/subcategorey/'.$sc_id)->with('dele','Deleted recored successfully');
      }
}
