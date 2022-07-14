<?php

namespace App\Http\Controllers;

use App\Models\producet;
use App\Models\purchase;
use App\Models\purchases1;
use App\Models\tax;
use App\Models\Unit;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    function index()
    {
        $data=purchases1::all();
        return view('purchase/index',['data'=>$data]);
    }
    function create()
    {
        $data = producet::all();
        return view('purchase/create', ['data' => $data]);
    }
    //axios
    function user($pro)
    {

        $data = producet::find($pro);
        $u_id = $data->p_unit;
        $tax = $data->p_tax;
        $p_tax = tax::find($tax);
        $unit = Unit::find($u_id);
        return compact('data', 'unit', 'p_tax');
    }


    function data(Request $request)
    {

        $table = new purchases1;
        $table->party_name = $request->party_name;
        $table->invoice_no = $request->invoice_no;
        $table->date = $request->date;
        $table->payment = $request->payment;
        $table->save();
         
        $party=$table->party_id;
        $produect_name = $request->produect_name;
        $qty = $request->qty;
        $rate = $request->rate;
        $dis = $request->dis;
        $dis_a = $request->dis_a;
        $unit = $request->unit;
        $basic = $request->basic;
        $tax_p = $request->tax_p;
        $tax = $request->tax;
        $totale = $request->totale;
       

       if($request->rate){
        for ($i = 0; $i < count($rate); $i++) {
            $datasave = [
                'purchess_table' =>$party,
                'product_name' => $produect_name[$i],
                'qty' => $qty[$i],
                'rate' => $rate[$i],
                'dis_p' => $dis[$i],
                'dis_a' => $dis_a[$i],
                'unit' => $unit[$i],
                'basic' => $basic[$i],
                'tax_p' => $tax_p[$i],
                'tax_a' => $tax[$i],
                'totale' => $totale[$i]
                
            ];
            DB::table('purchases')->insert($datasave);
        }
       }
        return redirect('/purchase')->with('add','Insert recored successfully');
    }

    function show($party_id){
                
          $data=purchases1::find($party_id);
          $multy=purchase::all()->where('purchess_table',$party_id);
          $producet=producet::all();
     return view('/purchase/edit',compact('data','producet','multy'));
    }

    function editax($id){

       return $data=purchase::find($id);
    }

    function deleteda($id){
         $data=purchase::find($id);
         $data->delete();
         return 1111;
    }

    function upadateds(Request $request){
    
     $table = purchases1::find($request->party_id);
     $table->party_name = $request->party_name;
     $table->invoice_no = $request->invoice_no;
     $table->date = $request->date;
     $table->payment = $request->payment;
     $table->save();
      
     $produect_name = $request->produect_name;
     $qty = $request->qty;
     $rate = $request->rate;
     $dis = $request->dis;
     $dis_a = $request->dis_a;
     $unit = $request->unit;
     $basic = $request->basic;
     $tax_p = $request->tax_p;
     $tax = $request->tax;
     $totale = $request->totale;
     $party=$request->oldpurchess;
    
     if($request->rate){

     for ($i = 0; $i < count($rate); $i++) {
         $datasave = [
            'purchess_table' =>$party,
             'product_name' => $produect_name[$i],
             'qty' => $qty[$i],
             'rate' => $rate[$i],
             'dis_p' => $dis[$i],
             'dis_a' => $dis_a[$i],
             'unit' => $unit[$i],
             'basic' => $basic[$i],
             'tax_p' => $tax_p[$i],
             'tax_a' => $tax[$i],
             'totale' => $totale[$i]
         ];
         DB::table('purchases')->insert($datasave);
     }
    }
    
     return redirect('/purchase')->with('delete','Edit recored successfully');
    

     }
     function print($party_id){
        
                 $data=purchases1::find($party_id);
                 $multy=purchase::
                 join('producets','producets.p_id','purchases.product_name')
                 ->where('purchess_table',$party_id)
                 ->get();
                 $total=DB::table('purchases')->sum('totale');
          
        return view('/purchase/bill',compact('data','multy','total'));
     }
}

