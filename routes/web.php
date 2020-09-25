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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/four', function () {
    return view('for4');
});

Route::get('/four_game', function () {
    return view('for4');
});

Route::get('/six', function () {
    return view('for6');
});

Route::get('/six_game', function () {
    return view('for6');
});

Route::get('/eight', function () {
    return view('for8');
});

Route::get('/eight_game', function () {
    return view('for8');
});

// Route::get('/', function() {
//     switch(Input::get('question_type')) {
//         case 1:
//             return view("for4");
//         case 2:
//             return view("for8");
//         default:
//             return view("welcome");
//     }
// });






// Route::get('/', 'Games@create'); //initial form view
// Route::post('/', 'Games@create'); // next part

