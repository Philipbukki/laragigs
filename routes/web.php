<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello',function(){

//     return response('<h1>Hello world of laravel </h1>')
//          ->header('Content-Type', 'text/plain')
//          ->header('name','vee');
// });

Route::get('/listings', [ListingController::class, 'index']);

Route::get('/listings/{id}',[ListingController::class, 'show']);


// Route::get('posts/{id}', function($id){

//     return response('<p>Blog post with id</p> '. $id);

// })->where('id', '[0-9]+');


Route::get('/search',function(Request $request){

});