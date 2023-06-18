<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lancer\PageController;
use App\Http\Controllers\Lancer\LancerController;




Route::get('index',[LancerController::class,'index'])->name('home.index');
Route::get('about',[PageController::class,'about'])->name('about');
