<?php

use Illuminate\Support\Facades\Route;

// index
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('index');

// formulário de cadastro - [C]reate
Route::get('cadastro', 'App\Http\Controllers\HomeController@register')->name('register');
Route::post('cadastro/registro', 'App\Http\Controllers\HomeController@confirm_register')->name('confirm.register');

// listar usuários (todos) - [R]ead
Route::get('listar/todos', 'App\Http\Controllers\HomeController@list')->name('list.users');

// editar usuário - [U]pdate
Route::get('editar/{id}', 'App\Http\Controllers\HomeController@edit')->name('edit.id');
Route::post('formulario/editar/{id}', 'App\Http\Controllers\HomeController@form_edit')->name('form.edit.id');

// deletar usuário - [D]elete
Route::get('deletar/{id}', 'App\Http\Controllers\HomeController@delete')->name('delete');
