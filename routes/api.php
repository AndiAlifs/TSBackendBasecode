<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('penginapan', 'PenginapanController@index');
Route::get('penginapan/detail/{id}', 'PenginapanController@detail');