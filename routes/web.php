<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseOrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PurchaseOrderController::class,'index'])->name('purchase.order');
Route::get('/purchase-list',[PurchaseOrderController::class,'purchaseList'])->name('purchase.list');
Route::get('/get-item/{item_id}', [PurchaseOrderController::class, 'getItem'])->name('get.item');
Route::post('/purchase/order',[PurchaseOrderController::class,'savePurchaseOrder'])->name('save.order');
Route::post('/delete/order',[PurchaseOrderController::class,'deletePurchaseOrder'])->name('delete.order');
Route::get('/edit/order/{id}',[PurchaseOrderController::class,'editPurchaseOrder'])->name('edit.order');
Route::post('/update/order',[PurchaseOrderController::class,'updatePurchaseOrder'])->name('update.order');


