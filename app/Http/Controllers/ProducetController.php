<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\categorey;
use App\Models\producet;
use App\Models\subcategorey;
use App\Models\tax;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProducetController extends Controller
{
   function p_index(){
      $data=DB::table('producets')->get();
      return view('producets/p_index',['row'=>$data]);
   }

   function P_add(){
      $tax=tax::all();
      $brand=brand::all();
      $cat=categorey::all();
      $sub=subcategorey::all();
      $unit=Unit::all();
   return view('producets/p_add',compact('tax','brand','cat','sub','unit'));
   }

   function add_insert(Request $row){
     
      $row->validate([
          'produect_name'=>'required',
          'produect_brand'=>'required',
          'produect_unit'=>'required',
          'produect_cat'=>'required',
          'produect_subcat'=>'required',
          'produect_mrp'=>'required',
          'produect_tax'=>'required',
          'produect_purchess_price'=>'required',
          'produect_sales_price'=>'required',
          'produect_opening_stock'=>'required',
          'produect_value'=>'required',
          'produect_description'=>'required',
          'produect_img'=>'required'
      ]);
    
        $data=new producet;
        $data->p_name=$row->produect_name;
        $data->p_brand=$row->produect_brand;
        $data->p_unit=$row->produect_unit;
        $data->p_cat=$row->produect_cat;
        $data->p_subcat=$row->produect_subcat;
        $data->p_mrp=$row->produect_mrp;
        $data->p_tax=$row->produect_tax;
        $data->p_purchess_price=$row->produect_purchess_price;
        $data->p_sales_price=$row->produect_sales_price;
        $data->p_opening_stock=$row->produect_opening_stock;
        $data->p_value=$row->produect_value;
        if($row->produect_img)
        {
             $timg=time().".".$row->produect_img->extension();
             $row->produect_img->move(('produect_img'),$timg);
             $data->p_img=$timg;
        }
        $data->p_description=$row->produect_description;
        $data->save();
        return redirect('/producet_index')->with('add','Insert recored successfully');
   }

   function p_insert($p_id){
       $data=producet::find($p_id);
       $tax=tax::all();
       $brand=brand::all();
       $cat=categorey::all();
       $sub=subcategorey::all();
       $unit=Unit::all();
       return view('producets/p_edit',compact('tax','brand','cat','sub','unit','data'));
   }

    function p_edit(Request $row){

     $data=producet::find($row->p_id);
     $data->p_name=$row->produect_name;
     $data->p_brand=$row->produect_brand;
     $data->p_unit=$row->produect_unit;
     $data->p_cat=$row->produect_cat;
     $data->p_subcat=$row->produect_subcat;
     $data->p_mrp=$row->produect_mrp;
     $data->p_tax=$row->produect_tax;
     $data->p_purchess_price=$row->produect_purchess_price;
     $data->p_sales_price=$row->produect_sales_price;
     $data->p_opening_stock=$row->produect_opening_stock;
     $data->p_value=$row->produect_value;
     
     if($row->produect_img)
     {
          $timg=time().".".$row->produect_img->extension();
          $row->produect_img->move(('produect_img'),$timg);
          $data->p_img=$timg;
     }
     $data->p_description=$row->produect_description;
     $data->save();
     return redirect('/producet_index')->with('delete','Edit recored successfully');
   }

   function p_deleted($p_id){
      $data=producet::find($p_id);
       $data->delete();
       return redirect('/producet_index')->with('dele','deleted recored successfully');
   }
   function p_show($p_id){
      $data=producet::find($p_id);
      $tax=tax::all();
      $brand=brand::all();
      $cat=categorey::all();
      $sub=subcategorey::all();
      $unit=Unit::all();
      return view('producets/p_show',compact('tax','brand','cat','sub','unit','data'));
   }
}

