<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect(route('filament.admin.auth.login'));
});