<?php

use Illuminate\Support\Facades\Route;

//
Route::namespace('App\Http\Controllers')->group(function() {

    // index
    Route::get('/', 'HomeController@index')->name('index');

    // formulário de cadastro - [C]reate
    Route::get('cadastro', 'HomeController@register')->name('register');
    Route::post('cadastro/registro', 'HomeController@confirm_register')->name('confirm.register');

    // listar usuários (todos) - [R]ead
    Route::get('listar/todos', 'HomeController@list')->name('list.users');

    // editar usuário - [U]pdate
    Route::get('editar/{id}', 'HomeController@edit')->name('edit.id');
    Route::post('formulario/editar/{id}', 'HomeController@form_edit')->name('form.edit.id');

    // deletar usuário - [D]elete
    Route::get('deletar/{id}', 'HomeController@delete')->name('delete');
});


// api
Route::namespace('App\Http\Controllers\API')->group(function() {

    Route::get('api', 'ApiController@index')->name('api.index');

    Route::get('api/api-exemplo', 'ApiController@__invoke')->name('api.exemplo');
});
