<?php

use Illuminate\Http\Request;
Use App\Produks;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/*
=============================
	Routes for Products
=============================
 */

Route::get('produks', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Produks::all();
});
 
Route::get('produks/{id}', function($id) {
    return Produks::find($id);
});

Route::post('produks', function(Request $request) {
    return Produks::create($request->all);
});

Route::put('produks/{id}', function(Request $request, $id) {
    $produks = Produks::findOrFail($id);
    $produks->update($request->all());

    return $produks;
});

Route::delete('produks/{id}', function($id) {
    Produks::find($id)->delete();

    return 204;
});