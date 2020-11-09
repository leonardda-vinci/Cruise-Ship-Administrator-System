<?php

use Illuminate\Support\Facades\Route;

Route::get('/templates', 'TemplatesController@index');

Route::get('/templates/another-one', 'TemplatesController@anotherOne');

Route::get('/templates/extra-one', 'TemplatesController@extraOne');