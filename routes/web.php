<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Cách 1
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/product', [ProductController::class, 'index'])->middleware(['auth.basic'])->name('product.index');

// Cách 2
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Product
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    Route::get('/product/add', [ProductController::class, 'create'])->name('product.add');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');;
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
});

// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\ProfileController;
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// // Thêm route login (bên ngoài middleware auth)
// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

// // Cách 1
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// // Cách 2
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     // Product
//     Route::get('/product', [ProductController::class, 'index'])->name('product.index');
//     Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
//     Route::get('/product/add', [ProductController::class, 'create'])->name('product.add');
//     Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
//     Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
//     Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
// });
// Route để hiển thị form đăng nhập (GET)
Route::get('/login', function () {
    return view('auth.login');
})->name('login.form'); // Đặt tên khác để tránh xung đột

// Route để xử lý đăng nhập (POST)
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
// <?php

// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\ProfileController;
// use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route để hiển thị form đăng nhập
Route::get('/login', function () {
    return view('auth.login');
})->name('login.form');

// Route để xử lý đăng nhập
// Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

// Cách 1
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Cách 2
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Product
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    Route::get('/product/add', [ProductController::class, 'create'])->name('product.add');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
});


require __DIR__ . '/auth.php';
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
