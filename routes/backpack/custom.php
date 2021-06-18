<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('gallery', 'GalleryCrudController');
    Route::crud('workers', 'WorkersCrudController');
    Route::crud('contractinfo', 'ContractInfoCrudController');
    Route::crud('callback', 'CallbackCrudController');
    Route::crud('lawyersprojects', 'LawyersProjectsCrudController');
}); // this should be the absolute last line of this file