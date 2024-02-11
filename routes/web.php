<?php

use App\Http\Controllers\AddRecord;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\PersonController;
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
    return view('index');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/record', function () {
    return view('record');
})->name('record');

Route::get('/family-planning', function () {
    return view('familyPlanning');
})->name('familyPlanning');

Route::get('/health-record', function () {
    return view('healthRecord');
})->name('healthRecord');

Route::get('/vaccination', function () {
    return view('vaccination');
})->name('vaccination');


Route::post('record', [AddRecord::class, 'store'])->name('addFamily.store');

//household
Route::get('/household', [AddressController::class, 'index'])->name('household');
Route::get('/household/create', [AddressController::class, 'create'])->name('household.add');
Route::get('/household/{address:id}/edit', [AddressController::class, 'edit'])->name('household.edit');

Route::post('household', [AddressController::class, 'store'])->name('address.store');
Route::patch('/household/{address:id}', [AddressController::class, 'update'])->name('address.update');
Route::delete('household/{address}',[AddressController::class,'destroy'])->name('address.destroy');


//family
Route::get('/family', [PersonController::class, 'index'])->name('families');
Route::get('/family/addFamily', [PersonController::class, 'add'])->name('families.add');
Route::get('/family/create/', [PersonController::class, 'create'])->name('families.create');
Route::get('/family/save', [PersonController::class, 'save'])->name('families.save');

Route::post('family',[PersonController::class, 'store'])->name('person.store');
