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

//home
Route::get('/', ["uses"=>"HomeControlador@index"]);
Route::get('/home', 'HomeControlador@index')->name('home');

//login e cadastro
Route::get('/login', ["uses"=>"LoginControlador@index"]);
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });

Route::get('/cadastro', ["uses"=>"RegisterController@index"]);

Auth::routes();

//doacao
Route::get('/doacao', ["uses"=>"DoacaoControlador@index"]);

Route::get('/doacao/cadastro', ["uses"=>"DoacaoControlador@cadastrar"])->name('cadastro');

Route::get('/doacao/editar', ["uses"=>"DoacaoControlador@editar"])->name('editar');

Route::post('/doacao/salvar', ["as"=>'doacao.salvar'], ["uses"=>"DoacaoControlador@salvar"]);
 
Route::get('/doacao/requisicao', ["uses"=>"DoacaoControlador@visualizar"])->name('requisicao');

Route::get('/carrinho', ["uses"=>"CarrinhoControlador@index"]);

//perfis
$type = "user";
if($type == "user"){
    Route::get('/perfil', ["uses"=>"PerfilControlador@doadorView"])->name('doador');
}
if($type == "admin"){
    Route::get('/perfil', ["uses"=>"PerfilControlador@adminView"])->name('admin');
}
if($type == "inst"){
    Route::get('/perfil', ["uses"=>"PerfilControlador@instView"])->name('inst');
}

Route::get('/{id}/editar', ["uses"=>"PerfilControlador@editar"])->name('editar');

Route::get('/{id}/excluir', ["uses"=>"PerfilControlador@excluir"])->name('excluir');

Route::get('/{id}/destroy', function(){
    
    return Redirect::to('login');
 });

//otherss
Route::get('/contato', ["uses"=>"ContatoControlador@index"]);

Route::get('/instituicoes', ["uses"=>"InstituicoesControlador@index"]);

Route::get('/sobrenos', ["uses"=>"SobrenosControlador@index"]);




//Route::get('/', 'HomeController@index')->name('home');
