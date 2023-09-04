<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;

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

// 1- Url pe kya likhne sy knsi file open krni hy.
// 2- jo bh file open krni hy uska naam without blade.php

// Route::get('/',function(){
//     return view('index');
// })->name('index');
// Route::get('/about',function(){
//     return view('about');
// })->name('about');

// Route::get('/product/product-detail',function(){
//     return view('product');
// })->name('products');




Route::get('/', [BasicController::class, 'index'])->name('index');
Route::get('/about', [BasicController::class, 'about'])->name('about');
Route::get('/product', [BasicController::class, 'products'])->name('products');
// /contact -> url pe show krega
// contact -> function name hai 
// contact name define kya hy
Route::get('/contact', [BasicController::class, 'contact'])->name('contact');

Route::post('/contact', [BasicController::class, 'register']);