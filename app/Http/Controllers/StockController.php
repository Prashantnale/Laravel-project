<?php

namespace App\Http\Controllers;

use App\Models\producet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StockController extends Controller
{
    function index(){
        
    //  $qtyrate=DB::table('purchases')
    //      ->join('producets','producets.p_id','purchases.product_name')
    //      ->select('purchases.product_name',DB::raw('sum(purchases.qty) as purchasequtiy'),DB::raw('sum(purchases.rate) as purchaserate'))->groupBy('product_name')
    //      ->get();
    
    //  $salequty=DB::table('posmultis')
    //      ->join('producets','producets.p_id','posmultis.Product_Name')
    //      ->select('posmultis.Product_Name',DB::raw('sum(posmultis.Quantity) as posqutiy'),DB::raw('sum(posmultis.Price) as posrate'))->groupBy('Product_Name')
    //      ->get();
 
         $product=DB::table('producets')->get();


        // $pp=$qtyrate->concat($salequty)->concat($product)->all();
        //    echo "<pre>";
        //    return dd($pp);
        return view('/stock/index',compact('product'));
    }



    function create(){

        $qtyrate=DB::table('purchases')
        ->join('producets','producets.p_id','purchases.product_name')
        ->select('purchases.product_name',DB::raw('sum(purchases.qty) as purchasequtiy'),DB::raw('sum(purchases.rate) as purchaserate'))->groupBy('product_name')
        ->get();
        $product=DB::table('producets')->get();
   
         $salequty=DB::table('posmultis')
        ->join('producets','producets.p_id','posmultis.Product_Name')
        ->select('posmultis.Product_Name',DB::raw('sum(posmultis.Quantity) as posqutiy'),DB::raw('sum(posmultis.Price) as posrate'))->groupBy('Product_Name')
        ->get();

     return $pp=$qtyrate;
    }
}
