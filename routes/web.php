<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

Route::get('/', [postController::class,'index'])->name('posts.index'); 

Route::get('/detail/{slug}', [postController::class,'detail'])->name('detail');

Route::get('/contact',[contactController::class,'show'])->name('contact');

Route::get('/about',[postController::class,'about'])->name('about');

Route::post('/send-mail',[MailController::class,'sendMail'])->name('sendmail');