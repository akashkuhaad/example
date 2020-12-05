<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FacebookController;
use App\Http\Livewire\DashComponent;
use App\Http\Livewire\InvoiceComponent;
use App\Http\Livewire\CreateInvoiceComponent;
use App\Http\Livewire\VenderComponent;
use App\Http\Livewire\AddVenderComponent;
use App\Http\Livewire\CustomerComponent;
use App\Http\Livewire\AddCustomerComponent;

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
Route::get('/dashboard',DashComponent::class);
Route::get('/invoices',InvoiceComponent::class);
Route::get('/create-invoice',CreateInvoiceComponent::class);
Route::get('/vendors',VenderComponent::class);
Route::get('/add-vendor',AddVenderComponent::class);
Route::get('/customers',CustomerComponent::class);
Route::get('/add-customer',AddCustomerComponent::class);
Route::get('/', function () {
    return view('welcome');
});
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dashboard');
})->name('dashboard');

