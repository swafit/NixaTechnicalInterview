<?php

use App\Models\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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
    $clients = [];
    $clients = Client::all();


    return view('home', ['clients'=>$clients]);


});

Route::post('/create-client', [ClientController::class, 'createClient']);

Route::get('/edit-client/{client}', [ClientController::class, 'editClientScreen']);
Route::put('/edit-client/{client}', [ClientController::class, 'updateClient']);

Route::delete('/delete-client/{client}', [ClientController::class, 'deleteClient']);

