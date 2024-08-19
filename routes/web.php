<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


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

// Route::get('/index-productos', function(){

//   // //$product = Product::find(2); // es un comando select

//   // /*
//   // // Crear nuevos producto
//   // $product = new Product();
//   // $product->name = 'Corona';
//   // $product->product_number = '12345';
//   // $product->desc = 'Cerveza 800ml, clara';
//   // $product->branch = 'Modelo';
//   // $product->price = '25.00';

//   // $product->save();
//   // return $product; */
  
//   // // $product = new Product();
//   // // $product->name = 'Pacifico';
//   // // $product->product_number = '3234';
//   // // $product->desc = 'Cerveza 800ml, clara';
//   // // $product->branch = 'Modelo';
//   // // $product->price = '35.00';
//   // // $product->save();
//   // // return $product; 

//   // // Order By
//   // $product = Product::orderBy('name', 'desc')
//   // ->select('name', 'price')
//   // ->take(2)
//   // ->get();

//   // return $product;

//   // /* Pregunta de examen
//   // Los nombres en las tablas deben de ser en plural y de preferencia en ingles
//   // Los nombres de los modelos deben de estar en singular y con la primer letra en mayuscula
//   // */


  
// });


Route::get('/index-producto', [ProductController::class, 'index']);

Route::get('/show-producto', [ProductController::class, 'show']);

Route::get('/create-producto', [ProductController::class, 'create']);