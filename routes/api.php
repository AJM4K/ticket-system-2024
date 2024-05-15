<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;


Route::get('/index' , [PhotoController::class , 'index']);
