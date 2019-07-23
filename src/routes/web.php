<?php

use App\Facilities;
use App\Details;
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
    $facilities = Facilities::orderBy('created_at', 'asc')->get();

    return view('facilities', [
        'facilities' => $facilities
    ]);
});


Route::post('/facilities', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    // 施設作成…
    $facilities = new Facilities();
    $facilities->name = $request->name;
    $facilities->save();

    return redirect('/');
});

Route::delete('/facilities/{id}', function ($id) {
    Facilities::findOrFail($id)->delete();

    return redirect('/');
});

// details用のルーティング
Route::get('/', function () {
    $details = Details::orderBy('created_at', 'asc')->get();

    return view('details', [
        'details' => $details
    ]);
});


Route::post('/details', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    // 施設作成…
    $details = new Facilities();
    $details->name = $request->name;
    $details->save();

    return redirect('/');
});

Route::delete('/details/{id}', function ($id) {
    Details::findOrFail($id)->delete();

    return redirect('/');
});
