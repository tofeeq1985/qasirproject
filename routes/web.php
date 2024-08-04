<?php

use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Search_residentController;
use App\Http\Controllers\Single_propertyController;
use App\Http\Controllers\TaxesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/councillors', function () {
    return view('councillors');
})->name('councillors');
Route::get('/complaint', function () {
    return view('complaint');
})->name('complaint');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/challan',function(){
    return view('challan');
})->name('challan');
Route::get('/show-tax',[TaxesController::class ,'showTax'])->name('show-tax');
Route::post('/search-resident',[TaxesController::class ,'searchResident'])->name('search-resident');
Route::get('/pay-taxes',[TaxesController::class ,'showTaxes'])->name('pay-taxes');
Route::get('/property{id}',[Single_propertyController::class ,'showSinglePeoperty'])->name('property');
Route::get('/properties',[PropertyController::class,'showproperties'])->name('properties');
Route::post('/send-complaint',[ComplaintController::class,'sendcomplaint'])->name('send-complaint');
Route::post('/send-contact',[ContactController::class,'sendcontact'])->name('send-contact');
Route::post('/send-tax',[TaxesController::class,'sendTax'])->name('send-tax');
?>
