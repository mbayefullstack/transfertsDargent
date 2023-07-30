<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/depot', [TransactionController::class,'depot']);
Route::post('/retrait', [TransactionController::class,'retrait']);
Route::post('/transfert', [TransactionController::class,'transfert']);


Route::get('clients/{id}/transactions', [ClientController::class, 'getTransactions']);
// Route::get('clients', [ClientController::class, ''] );
// Route::post('clients', [ClientController::class, ''] );
// Route::apiResource('comptes', [CompteController::class, ''] );
// Route::apiResource('comptes', [
// CompteController::class, ''] );

