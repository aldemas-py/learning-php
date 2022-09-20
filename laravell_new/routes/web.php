<?php

use App\Http\Controllers\listing_controller;
use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listings;

/*
|--------------------------------------------------------------------------
| Web Routes
|
//Common Resourses Routes

// index - show all listings
// show - show single listings
// create  - shows form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listings
// destroy - Delete listing--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function ()
// {
//     return response('hello wold!');
// });

// Route::get('/post/{id}', function ($id) {
// //    debugging
//     // dd($id);
//     // ddd($id);
//     return response('post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
// dd($request->name .' ' . $request->citi);
// });

// development started
//   All listings

Route::get('/', [ListingController::class, 'index']);

// show create form
Route::get('/listings/create', [ListingController::class, 'create']);

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// store Listing

Route::post('/listings', [ListingController::class, 'store']);

// Update Listing

Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Single Listing

Route::get('/listings/{listing}', [ListingController::class, 'show']);
