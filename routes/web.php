<?php
use App\Http\Middleware\AdminAuthenticated;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminsecController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\WhatIDoController;

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




/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

Route::group(['namespace'=>'Admin'],function(){
    Route::get('/', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::post('/', [AdminAuthController::class, 'adminLogOut'])->name('adminLogout');
    //Route::get('/load-more-data', [WhatIDoController::class,'loadMoreData'])->name('load-more');
    

    /*Route::get('/', [AdminsecController::class, 'getLogin'])->name('adminLogin');
    Route::post('/', [AdminsecController::class, 'postLogin'])->name('adminLoginPost');
    Route::post('logout', [AdminsecController::class, 'adminLogOut'])->name('adminLogout');*/

    Route::group(['middleware' => 'adminauth'], function(){
        Route::get('/admindashboard',[AdminAuthController::class,'getLogin'])->name('adminDashboard');
       // Route::get('/home-edit', [App\Http\Controllers\Admin\HomeController::class,'edit'])->name('home-edit');
       // Route::get('/about-edit', [App\Http\Controllers\Admin\AboutController::class,'index'])->name('about-edit');
        Route::resource('home-edit', App\Http\Controllers\Admin\HomeController::class);
        Route::resource('about-edit', App\Http\Controllers\Admin\AboutController::class);
        Route::resource('whatido-edit', App\Http\Controllers\Admin\WhatIDoController::class);
        

        
    });
});
Route::get('load-more-data', [WhatIDoController::class,'loadMoreData'])->name('load.more');
//Route::get('/pagination', [AdminAuthController::class,'getLogin'])->name('pagination');

/*Route::get('/', function () {
    return view('index');
});*/