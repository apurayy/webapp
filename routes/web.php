<?php

use App\Http\Controllers\Firstcontroller;
use Faker\Guesser\Name;
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


// Route::get(md5('/about'),function(){
//     return view('about');
// })->name('about.us');


// Route::get('/contact',function(){
//     return view('contact');
// })->name('contact.us');

// Route::get('/country', function(){
//     return view('country');
// })->middleware('country');

Route::get('about', [Firstcontroller::class, 'index_about'])->name('about.us');
Route::get('contact', [Firstcontroller::class, 'index_contact'])->name('contact.us');
Route::post('store', [Firstcontroller::class, 'store_contact'])->name('store.contact');
Route::get('country', [Firstcontroller::class, 'index_country'])->middleware('country');
