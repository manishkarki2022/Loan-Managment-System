<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\Admin\UsersController;
use App\Http\Controllers\Backend\Admin\LoanTypesController;

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
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/profile',[AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/admin/update/profile',[AdminController::class, 'updateProfile'])->name('admin.updateProfile');
    Route::get('/admin/view/password',[AdminController::class, 'viewPassword'])->name('admin.viewPassword');
    Route::post('/admin/update/password',[AdminController::class, 'updatePassword'])->name('admin.updatePassword');

    //Admin Users Controller Route
    Route::get('/admin/all/users',[UsersController::class, 'allUsers'])->name('admin.all.users');
    Route::delete('/admin/delete/{user}',[UsersController::class,'deleteUser'])->name('delete.user');
    Route::get('.admin/user/detail/{id}',[UsersController::class,'userDetail'])->name('user.detail');
    Route::post('/admin/user/{id}/toggle-role',[UsersController::class,'toggleRole'])->name('user.toggle.-role');


    //Loan Type Management 
    Route::get('/admin/all/loan/type',[LoanTypesController::class, 'allLoanTypes'])->name('admin.all.loan.types');
    Route::post('/admin/add/loan_+type',[LoanTypesController::class, 'addLoanTypes'])->name('admin.add.loan.types');







});
Route::middleware(['auth','role:user'])->group(function(){
    Route::get('/user/dashboard',[UserController::class, 'index'])->name('user.dashboard');
    Route::get('/user/profile',[UserController::class, 'profile'])->name('user.profile');
    Route::post('/user/update/profile',[UserController::class, 'updateProfile'])->name('user.updateProfile');
    Route::get('/user/view/password',[UserController::class, 'viewPassword'])->name('user.viewPassword');
    Route::post('/user/update/password',[UserController::class, 'updatePassword'])->name('user.updatePassword');

});

require __DIR__.'/auth.php';
