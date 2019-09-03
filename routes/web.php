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
Route::get('/doacao', ["uses"=>"DoacaoControlador@index"])->name('doacao');

Route::get('/doacao/cadastro', ["uses"=>"DoacaoControlador@cadastrar"])->name('cadastro');

Route::get('/doacao/editar', ["uses"=>"DoacaoControlador@editar"])->name('editarRequi');

Route::post('/doacao/atualizar', ["uses"=>"DoacaoControlador@atualizar"])->name('atualizar');

Route::post('/doacao/adicionar', ["uses"=>"DoacaoControlador@adicionar"])->name('adicionar');
 
Route::get('/doacao/requisicao/{idRequisicao}', ["uses"=>"DoacaoControlador@visualizar"])->name('requisicao');

Route::get('/doacao/categoria/{categoria}', ["uses"=>"DoacaoControlador@categoria"])->name('categoria');

//perfis
Route::get('perfil/sair', ["uses"=>"PerfilControlador@sair"])->name('sair');

Route::get('/perfil', ["uses"=>"PerfilControlador@type"])->name('doador');

Route::get('/perfil', ["uses"=>"PerfilControlador@type"])->name('admin');

Route::get('/perfil', ["uses"=>"PerfilControlador@type"])->name('inst');

Route::get('/perfil/dadosDoador', ["uses"=>"PerfilControlador@VerificarDoadores"])->name('dadosDoador');

Route::get('/perfil/dadosInst', ["uses"=>"PerfilControlador@VerificarInstituicoes"])->name('dadosInst');

Route::get('/perfil/efetuada', ["uses"=>"PerfilControlador@recebidas"])->name('recebidas');

Route::get('perfil/{id}/editar', ["uses"=>"PerfilControlador@editar"])->name('editar');

Route::get('perfil/{id}/excluir', ["uses"=>"PerfilControlador@excluir"])->name('excluir');

Route::post('perfil/atualizar', ["uses"=>"PerfilControlador@atualizar"])->name('atualizarUser');

Route::get('perfil/{id}/destroy', function(){
    
    return Redirect::to('login');
 });

//others
Route::get('/contato', ["uses"=>"ContatoControlador@index"]);

Route::get('/instituicoes', ["uses"=>"InstituicoesControlador@index"]);

Route::get('/sobrenos', ["uses"=>"SobrenosControlador@index"]);

//carrinho
Route::post('/carrinho', ["uses"=>"CarrinhoControlador@criar"])->name('addCarrinho');

Route::get('/carrinho', ["uses"=>"CarrinhoControlador@index"]);

//Route::get('/', 'HomeController@index')->name('home');
