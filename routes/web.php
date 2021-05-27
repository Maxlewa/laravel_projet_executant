<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsletterController;
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

// ___________ USER *

// Index

Route::get('/admin/user', [UserController::class, 'index'])->name('userIndex');

// Edit - Update

Route::get('/admin/user/{user}/edit', [UserController::class, 'edit'])->name('userEdit');
Route::put('/admin/user/{user}/update', [UserController::class, 'update'])->name('userUpdate');

Route::get('/dashboard', function () {
    $users = User::all();
    return view('dashboard', compact('users'));
})->middleware(['auth'])->name('dashboard');

// ___________ AVATAR *

// Index

Route::get('/admin/avatar', [AvatarController::class, 'index'])->name('avatarIndex');

// Create - Store

// Route::get('/admin/avatar', [AvatarController::class, 'create'])->name('avatarCreate');
Route::post('/admin/store/avatar', [AvatarController::class, 'store'])->name('avatarStore');

// Download

Route::get('/admin/download/{avatar}/avatar', [AvatarController::class, 'download'])->name('avatarDownload');

// ___________ BLOG *

Route::resource('/admin/blog', BlogController::class);

// ___________ NEWSLETTER *

Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletterStore');

require __DIR__.'/auth.php';
