<?php

Route::group(['namespace' => 'Arun\Excel\Http\Controllers'], function(){
    Route::get('download', 'ExcelController@index');
});