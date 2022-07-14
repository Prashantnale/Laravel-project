<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\CategoreyController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProducetController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SubcategoreyController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //unit
    route::get('/unit', [UnitController::class, 'index_unit']);
    route::get('/add_unit', [UnitController::class, 'add_unit']);
    route::post('/add_unit', [UnitController::class, 'u_add']);
    route::get('/unit_edit/{u_id}', [UnitController::class, 'unit_show']);
    route::post('/unit_edit', [UnitController::class, 'unit_edit']);
    route::get('/unit_deleted/{u_id}', [UnitController::class, 'unit_deleted']);
    //brand
    route::get('/brand', [BrandController::class, 'index_brand']) ;
    route::get('/add_brand', [BrandController::class, 'add_brand']);
    route::post('/add_brand', [BrandController::class, 'u_add']);
    route::get('/brand_edit/{b_id}', [BrandController::class, 'brand_show']);
    route::post('/brand_edit', [BrandController::class, 'brand_edit']);
    route::get('/brand_deleted/{b_id}', [BrandController::class, 'brand_deleted']);
    //tax
    route::get('/tax', [TaxController::class, 'index_tax']);
    route::get('/add_tax', [TaxController::class, 'add_tax']);
    route::post('/add_tax', [TaxController::class, 'u_add']);
    route::get('/tax_edit/{t_id}', [TaxController::class, 'tax_show']);
    route::post('/tax_edit', [TaxController::class, 'tax_edit']);
    route::get('/tax_deleted/{t_id}', [TaxController::class, 'tax_deleted']);
    //cat
    route::get('/categorey', [CategoreyController::class, 'index_categorey']);
    route::get('/add_categorey', [CategoreyController::class, 'add_categorey']);
    route::post('/add_categorey', [CategoreyController::class, 'u_add']);
    route::get('/categorey_edit/{c_id}', [CategoreyController::class, 'categorey_show']);
    route::post('/categorey_edit', [CategoreyController::class, 'categorey_edit']);
    route::get('/categorey_deleted/{c_id}', [CategoreyController::class, 'categorey_deleted']);
    //subcat
    route::get('/subcategorey/{c_id}', [SubcategoreyController::class, 'index_subcategorey']);
    route::get('/add_subcategorey/{c_id}', [SubcategoreyController::class, 'add_subcategorey']);
    route::post('/add_subcategorey', [SubcategoreyController::class, 's_add']);
    route::get('/subcategorey_edit/{s_id}', [SubcategoreyController::class, 'subcategorey_show']);
    route::post('/subcategorey_edit', [SubcategoreyController::class, 'subcategorey_edit']);
    route::get('/subcategorey_deleted/{s_id}', [SubcategoreyController::class, 'subcategorey_deleted']);
    //main producet
    route::get('/producet_index', [ProducetController::class, 'P_index']);
    route::get('/producet_add', [ProducetController::class, 'P_add']);
    route::post('/add_produect',[ProducetController::class,'add_insert']);
    route::get('/produect_edit/{p_id}',[ProducetController::class,'p_insert']);
    route::post('/edit_produect',[ProducetController::class,'p_edit']);
    route::get('/produect_deleted/{p_id}',[ProducetController::class,'p_deleted']);
    route::get('/produect_show/{p_id}',[ProducetController::class,'p_show']);
    //purchase bill
    route::get('/purchase', [PurchaseController::class, 'index']);
    route::get('/add_p', [PurchaseController::class, 'create']);
    route::get('/user/{pro}', [PurchaseController::class, 'user']);
    route::post('/jsdata', [PurchaseController::class, 'data']);
    route::get('/purchase_edit/{party_id}', [PurchaseController::class, 'show']);
    route::get('/editax/{id}',[PurchaseController::class,'editax']);
    route::get('/deleteda/{id}',[PurchaseController::class,'deleteda']);
    route::post('/purchess2',[PurchaseController::class,'upadateds']);
    route::get('/print/{party_id}',[PurchaseController::class,'print']);
    //pos
    route::get('/pos',[PosController::class,'index']);
    route::get('/posaxios/{id}',[PosController::class,'axioss']);
    route::post('/data',[PosController::class,'FormSubmit']);
    route::get('/add_pos',[PosController::class,'add_pos']);
    route::get('/printss/{pos_id}',[PosController::class,'printss']);
    //stock
    route::get('/stock',[StockController::class,'index']);
    route::get('/stockk',[StockController::class,'create']);













});
