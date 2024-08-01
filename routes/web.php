<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\venue\addnewvenue;
use App\Http\Controllers\venue\venueinfo;
use App\Http\Controllers\email\emailinfo;
use App\Http\Controllers\email\addnewemail;
use App\Http\Controllers\event\addnewevent;
use App\Http\Controllers\event\eventinfo;
use App\Http\Controllers\bb\bbemail;
use App\Http\Controllers\bb\bbsms;
use App\Http\Controllers\e_pos\category;
use App\Http\Controllers\e_pos\sku;
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


Route::get('venueinfo',function () {
    return view('mv.venue.venueInfo');
} );
Route::POST('venueinfo/add', [venueinfo::class,'addData'])->name('venueinfo');
Route::get('/addnewvenue', [addnewvenue::class,'view']);
Route::get('deletevenue/{id}',[addnewvenue::class,'delete']);
Route::get('editvenue/{id}', [addnewvenue::class,'edit']);
Route::POST('editvenue/update',[addnewvenue::class,'update'])->name('editvenue');
Route::get('editvenuestatus/{id}/{status}',[addnewvenue::class,'editstatus']);

Route::get('emailinfo', [emailinfo::class,'view'])->name('emailinfo');
Route::POST('/emailinfo/add', [emailinfo::class,'addData'])->name('addemail');
Route::get('addnewemail',[addnewemail::class,'filter'])->name('filter');
Route::get('deletemail/{id}',[addnewemail::class,'delete']);
Route::get('editemail/{id}',[addnewemail::class,'edit']);
Route::POST('editemail',[addnewemail::class,'update']);



Route::get('/addnewevent', [addnewevent::class,'view']);
Route::get('deletevent/{id}',[addnewevent::class,'delete']);
Route::get('editevent/{id}',[addnewevent::class,'edit'])->name('editevent');
Route::POST('editevent/update',[addnewevent::class,'update'])->name('updatevent');
Route::get('/eventinfo', [eventinfo::class,'view']);
Route::POST('/eventinfo/add', [eventinfo::class,'addData'])->name('addevent');
Route::POST('/eventinfo/add/voteby', [eventinfo::class,'addvoteby'])->name('voteby');

Route::GET('deleteimage/{ref}',[addnewevent::class,'deleteimage']);
Route::GET('deletethumbnail/{ref}',[addnewevent::class,'deletethumbnail']);

Route::get('/bbemaillistingpage', [bbemail::class,'view']);
Route::get('/bbsmslistingpage', [bbsms::class,'view']);

Route::get('/category', [category::class,'view']);
Route::POST('/storecategory', [category::class,'store'])->name('storecategory');
Route::GET('editcategory/{id}', [category::class,'edit'])->name('editcategory');
Route::POST('editcategory/update', [category::class,'update'])->name('updatecategory');
Route::POST('updatetablestatus', [category::class,'updatetablestatus']);
Route::GET('deletecategory/{id}', [category::class,'delete'])->name('deletecategory');


Route::get('/sku', [sku::class,'view']);
Route::POST('/storesku', [sku::class,'store'])->name('storesku');
Route::GET('editsku/{id}', [sku::class,'edit'])->name('editsku');
Route::POST('editsku/update', [sku::class,'update'])->name('updatesku');
Route::GET('deletesku/{id}', [sku::class,'delete'])->name('deletesku');



