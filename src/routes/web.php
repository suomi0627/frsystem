<?php

use App\facilities;
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
    $facilities = facilities::orderBy('created_at', 'asc')->get();

    return view('facilities', [
        'facilities' => $facilities
    ]);
});

// Reservationsのルーティング設定
Route::get('reservation', 'ReservationController@create'); // 入力フォーム
Route::post('reservation', 'ReservationController@store'); // 送信先
// 

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
    $facilities = new facilities();
    $facilities->name = $request->name;
    $facilities->save();

    return redirect('/');
});

Route::delete('/facilities/{id}', function ($id) {
    facilities::findOrFail($id)->delete();

    return redirect('/');
});
