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

//doacao
Route::get('/doacao', ["uses"=>"DoacaoControlador@index"])->name('doacao');

Route::get('/doacao/cadastro', ["uses"=>"DoacaoControlador@cadastrar"])->name('cadastro');

Route::get('/doacao/editar', ["uses"=>"DoacaoControlador@editar"])->name('editar');

Route::post('/doacao/adicionar', ["uses"=>"DoacaoControlador@adicionar"])->name('adicionar');
 
Route::get('/doacao/requisicao', ["uses"=>"DoacaoControlador@visualizar"])->name('requisicao');

Route::get('/doacao/categoria/{categoria}', ["uses"=>"DoacaoControlador@categoria"])->name('categoria');

Route::get('/carrinho', ["uses"=>"CarrinhoControlador@index"]);

//perfil
Route::get('/perfil', ["uses"=>"PerfilControlador@index"])->name('inst');

Route::get('/perfil', ["uses"=>"PerfilControlador@index"])->name('doador');

Route::get('/perfil', ["uses"=>"PerfilControlador@index"])->name('admin');

Route::get('/perfil/editar', ["uses"=>"PerfilControlador@editar"])->name('editar');


Route::get('/contato', ["uses"=>"ContatoControlador@index"]);

Route::get('/instituicoes', ["uses"=>"InstituicoesControlador@index"]);

Route::get('/sobrenos', ["uses"=>"SobrenosControlador@index"]);


Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');
