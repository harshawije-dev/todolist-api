<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::resource('notes', [NotesController::class]);

Route::get('notes', [NotesController::class, 'index']);
Route::post('notes', [NotesController::class, 'store']);
Route::put('notes/{id}', [NotesController::class, 'update']);
Route::delete('notes/{id}', [NotesController::class, 'delete']);
Route::put('notes/{id}/archive', [NotesController::class, 'archive']);
Route::get('notes/archive', [NotesController::class, 'archives']);
