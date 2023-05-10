<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\productController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\paymentController;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/createCustomer', [customerController::class, 'createCustomer'])->name('createCustomer');
Route::post('/createCustomer', [customerController::class, 'storeCustomer'])->name('createCustomer');
Route::get('/viewCustomer', [customerController::class, 'viewCustomer'])->name('viewCustomer');
Route::get('/editCustomerDetails/{id}', [customerController::class, 'editCustomerDetails'])->name('editCustomerDetails');
Route::post('/update/{id}', [customerController::class, 'updateCustomerDetails'])->name('update');
Route::get('/Delete/{id}', [customerController::class, 'DeleteCustomerDetails'])->name('Delete');

Route::get('/product', [productController::class, 'createProduct'])->name('product');
Route::post('/product', [productController::class, 'storeProduct'])->name('product');
Route::get('/viewproduct', [productController::class, 'viewProduct'])->name('viewproduct');
Route::get('/Editproduct/{id}', [productController::class, 'editProductDetails'])->name('Editproduct');
Route::post('/update/{id}', [productController::class, 'updateProduct'])->name('update');
Route::get('/Delete/{id}', [productController::class, 'DeleteProduct'])->name('Delete');



//invoice 
Route::get('/createInvice',[invoiceController::class,'createInvoice'])->name('createInvice');
Route::post('/createInvice',[invoiceController::class,'storeInvoice'])->name('createInvice');
Route::get('/test',[invoiceController::class,'test'])->name('test');

Route::get('/ViewInvoice',[invoiceController::class,'viewIncoiceTable'])->name('ViewInvoice');
Route::get('/showInvoice/{id}',[invoiceController::class,'invoiceView'])->name('showInvoice');

//Route::get('stripe', [paymentController::class, 'stripe']);
//Route::post('stripe', [paymentController::class, 'stripePost'])->name('stripe.post');

Route::get('/stripe', [paymentController::class,'stripe']);
Route::post('/payment', [PaymentController::class, 'payment'])->name('payment');



