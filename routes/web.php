<?php

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

// passing data from router url to blade template
Route::get('/', function () {
    return view('home');
});

// Route::get('about', function () {
//     return view('about');
// });

//Route::view("about",'about');

Route::get('about/{data}', function ($data) {
    return view('about', ['data'=>$data]);  
});

Route::view("contact",'contact');

// redirect exp:
Route::get('redirect', function () {
    return redirect('contact');  
});


//Route::get('/', 'TodoController@index');
// Route::get('/', [RegistrationController::class, 'create']);

// use App\Http\Controllers\TodoController;

// Route::get('/', [TodoController::class, 'index']);

