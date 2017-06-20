<?php

Route::get('/', 'PagesController@index');

Route::resource('pages', 'PagesController');