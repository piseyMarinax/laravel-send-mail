<?php

use Illuminate\Http\Request;

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


Route::post('/', function (Request $request) {
    Mail::to($request->input('mail'))
    ->send(new \App\Mail\MyMail($request->input('name')));
   return redirect('/');
})->name('sendMail');
