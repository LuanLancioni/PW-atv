Web.php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Olá bem vindo ao curso';
});

Route::get('/','PrincipalController@principal')->name('site.index');