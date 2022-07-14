<?php

namespace App\Http\Controllers;

use App\Models\pos;
use App\Models\producet;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PosController extends Controller
{
     function index(){
          $data=pos::all();
        return view('/pos/index',['data'=>$data]);
     }

     function axioss($id){

     return $data=producet::find($id);
     }


     function FormSubmit(Request $forms){
     
        $table=new pos;
        $table->pos_name=$forms->conname;
        $table->pos_number=$forms->number;
        $table->totalsub=$forms->totalsub;
        $table->online_amt=$forms->online;
        $table->online_cash_amt=$forms->cash;
        $table->dis_p=$forms->dis_p;
        $table->dis_amt=$forms->dis_amt;
        $table->totaleBill=$forms->totaleBill;
        $table->save();


      $old_id =$table->pos_id;
      $p_name=$forms->p_name;
      $qty=$forms->qty;
      $price=$forms->price;
      $subtotal=$forms->subtotal;

    if($forms->p_name)
     {
      for($i=0;$i<count($qty);$i++){
           
         $datasave=[
              'pos_table'=>$old_id,
              'Product_Name'=>$p_name[$i],
              'Quantity'=>$qty[$i],
              'Price'=>$price[$i],
              'Subtotal'=>$subtotal[$i]
              
         ];
         DB::table('posmultis')->insert($datasave);
      }
      }
     return redirect('/pos')->with('add','Insert recored successfully');
     }


     function add_pos(){
      $data=producet::all();
      return view('/pos/pospuchess',['data'=> $data]);
     }

     function printss($pos_id){
                  $data=pos::find($pos_id);
                  $mdata=DB::table('posmultis')->where('pos_table',$pos_id)->get();
                  return view('/pos/bill',['data'=>$data,'multiy'=>$mdata]);

     }
}
