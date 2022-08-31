<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\PanelController;

Route::get('/',[PanelController::class, 'index']);

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[PanelController::class, 'dashboard']);
    Route::get('/post',[PanelController::class, 'post']);
    Route::get('/meu-post',[PanelController::class, 'meupost']);
    Route::get('/receitas',[PanelController::class, 'receitas']);
    Route::get('/edit-conta/{id}',[PanelController::class, 'editconta'])->name('editconta');
    Route::put('/update-conta/{id}',[PanelController::class, 'updateconta']);
    Route::get('/list-user',[PanelController::class, 'listuser']);
    Route::get('/alter-senha/{id}',[PanelController::class, 'altersenha']);
});



Route::get('/index', function () {
    return view('index');
});


require __DIR__.'/auth.php';
