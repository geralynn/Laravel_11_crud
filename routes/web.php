<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

// Authentication Routes
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/', [AuthController::class, 'login']);

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
    
    // Route to serve private images
    Route::get('/private/products/{filename}', [ProductController::class, 'serveImage'])
        ->name('products.image')
        ->where('filename', '.*');
    
    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});
    
