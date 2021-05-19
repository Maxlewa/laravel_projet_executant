<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', [AllController::class, 'home'])->name('home');

Route::get('/admin/user/{user}/edit', [UserController::class, 'edit'])->name('userEdit');
Route::put('/admin/user/{user}/update', [UserController::class, 'update'])->name('userUpdate');

Route::get('/dashboard', function () {
    $users = User::all();
    return view('dashboard', compact('users'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
