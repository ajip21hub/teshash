<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Request;

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

    // $user = User::find(3); // contoh mau buat url slug encode model user by id 3
    // $user->slug();   // hasil dari hashslug by id = > vzyre
    // User::findBySlug('vzyre'); // decode untuk mencari id dari => vzyre result eloquent model

    return view('hash');
});

Route::post('/encode', function (Request $request) {

    // dd($request->id);
    $user = User::find($request->id); // contoh mau buat url slug encode model user by id 3
    $hashslug = $user->slug();   // hasil dari hashslug by id = > vzyre

    $example_return = [
        'id' => $request->id,
        'hashslug' => $hashslug,
        'contoh_url' => 'http://domain.com/' . $hashslug
    ];

    return view('hasil_encode', compact('example_return'));

    // dd($example_return);
})->name('encode');



Route::post('/decode', function (Request $request) {

    // dd($request);
    $model = User::findBySlug($request->hash); // decode untuk mencari id dari => vzyre result eloquent model

    $example_return = [
        'id' => $model->id,
        'hash' => $request->hash,
        'data' => $model->toJson(),
    ];
    return view('hasil_decode', compact('example_return'));

    // dd($example_return);
})->name('encode');


Route::get('/decoded/{hash}', function ($hash) {

    // dd($hash);
    // dd($request->id);
    $model = User::findBySlug($hash); // decode untuk mencari id dari => vzyre result eloquent model

    $example_return = [
        'id' => $model->id,
        'hash' => $hash,
        'data' => $model->toJson(),
    ];
    // dd($example_return);
    return view('hasil_decode', compact('example_return'));

    // dd($example_return);
})->name('encode');