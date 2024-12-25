<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Callback Function คือ เมื่อมีการเข้าไปใน url นั้นแล้ว จะให้ตัวโค้ดทำงานตามที่กำหนดไว้
//call back function + parameter คือ นำค่า parameter ที่มากับ  url มาใช้งาน
Route::get('/', function () {   
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// ไปที่ ProductController
Route::get('/products', [ProductController::class, 'index']);   //แบบ call back function
Route::get('/products/{id}', [ProductController::class, 'show'] //แบบ call back function + parameter
)->middleware(['auth']);  //ตรวจสอบว่าได้ล็อกอินเข้ามาหรือยัง


Route::get('/users/{user}', [UserController::class, 'show']);  // routing ให้แสดงผ่าน controller

// Route::get('/user/{id}', function (string $id) {  //Routing แบบ call back function + parameter
//     return 'User '.$id;          // แสดงข้อความผ่านตัว routing
// });

Route::get('/user', [UserController::class, 'index']); // เพิ่ม path user ให้ไปทำงานที่ index

Route::get('/greeting', function () { //Routing แบบ call back function
    return 'Hello World';               // แสดงข้อความผ่านตัว routing
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
