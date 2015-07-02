<?php

    /**/



    Route::get('home', 'HomeController@index');

    Route::get('/', function(){
        return redirect('home');
    });




    Route::controllers([
        'auth'     => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',

    ]);

    Route::resource('mercadeo', 'MercadeoController');

    Route::post('admin/reportes/{route}', 'AdminController@showRepManifiestos');

    Route::get('admin/gerMer_usuarios', 'AdminController@usuariosMercadeo');

    Route::post('admin/save_users/{table}', 'AdminController@SaveUsers');

    Route::resource('admin', 'AdminController');

    Route::resource('confirmador', 'ConfirmadorController');

    Route::get('contratos/{id}/borrar', 'ContratosController@borrar');

    Route::get('contratos/manifiestos', 'ContratosController@manifiestos');

    Route::get('contratos/{id}/imprimir', 'ContratosController@imprimir');

    Route::resource('contratos', 'ContratosController');

