<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


Route::get("/login", [AdminController::class, "getLogin"]);
Route::post("/login", [AdminController::class, "loginPost"]);
Route::get("/logout", [AdminController::class, "logout"])->name("admin.logout");

Route::middleware("admin")->group(function () {
    Route::get("/home", [AdminController::class, "homeAdmin"])->name("admin.home");

    Route::get("/user",[UserController::class,"add"]);
    Route::post("/login/save",[UserController::class,"postUser"]);

    Route::get("/products", [ProductController::class, "list"]);
    Route::get('/products/themmoi', [ProductController::class, "add"]);
    Route::post('/save', [ProductController::class, "save"]);
    Route::get('/products/edit/{id}', [ProductController::class, "edit"]);
    Route::post('/products/update/{id}', [ProductController::class, "update"]);
    Route::get('/products/delete/{id}', [ProductController::class, "destroy"]);

    Route::get("/categories", [CategoryController::class, "categoryList"]);
    Route::get('/categories/themmoi', [CategoryController::class, "categoryAdd"]);
    Route::post('/categorySave', [CategoryController::class, "categorySave"]);
    Route::get('/categories/edit/{id}', [CategoryController::class, "categoryEdit"]);
    Route::post('/categories/update/{id}', [CategoryController::class, "categoryUpdate"]);
    Route::get('/categories/delete/{id}', [CategoryController::class, "delete"]);
});
