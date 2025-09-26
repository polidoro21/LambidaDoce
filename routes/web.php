<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

route::controller(AdminController::class)->group(function (){
    Route::get('/admin', 'home')->name('admin.home');
});
