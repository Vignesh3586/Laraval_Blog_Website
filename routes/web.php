<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

Route::get('/', [postController::class,'index'])->name('posts.index'); 

Route::get('/detail/{slug}', [postController::class,'detail'])->name('detail');

Route::get('/contact',[contactController::class,'show'])->name('contact');

Route::get('/contact/store',[contactController::class,'submitContactForm'])->name('submitContact');