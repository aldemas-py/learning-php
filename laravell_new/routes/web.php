<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listings;

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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'latest listings',
        'listings' => Listing::all()


    ]);
});

// Single Listing

Route::get('/listings/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});
