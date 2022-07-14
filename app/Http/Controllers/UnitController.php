<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
      function index_unit(){
         $data=Unit::all();
         return view('unit',['unit'=>$data]);
      }

      function add_unit(){
        return view('unit_add');
      }

      function u_add(Request $request){
        $request->validate([
                'unit'=>'required'
        ]);
             $table=new Unit;
             $table->unit=$request->unit;
             $table->save();
             return redirect('/unit')->with('add','Insert recored successfully');
      }
      function unit_show($u_id){
        $data=Unit::find($u_id);
        return view('unit_edit',['data'=>$data]);
      }

      function unit_edit(Request $row){
           $tabl=Unit::find($row->u_id);
           $tabl->unit=$row->unit;
           $tabl->save();
           return redirect('/unit')->with('delete','Edit recored successfully'); 
      }

      function unit_deleted($u_id){
          $data=Unit::find($u_id);
          $data->delete();
            return redirect('/unit')->with('dele','Deleted recored successfully');
      }
}
