<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/cadastro', ["uses"=>"CadastroControlador@index"]);

Route::get('/carrinho', ["uses"=>"CarrinhoControlador@index"]);

Route::get('/contato', ["uses"=>"ContatoControlador@index"]);

Route::get('/doacao', ["uses"=>"DoacaoControlador@index"]);

Route::get('/', ["uses"=>"HomeControlador@index"]);

Route::get('/instituicoes', ["uses"=>"InstituicoesControlador@index"]);

Route::get('/login', ["uses"=>"LoginControlador@index"]);

Route::get('/perfil', ["uses"=>"PerfilControlador@index"]);

Route::get('/sobrenos', ["uses"=>"SobrenosControlador@index"]);

