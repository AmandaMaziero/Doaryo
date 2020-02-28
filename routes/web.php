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

Route::get('/doacao/removerTodos', ["uses"=>"DoacaoControlador@apagarTodos"])->name('removerTodos');

Route::get('/doacao/removerUm/{id}', ["uses"=>"DoacaoControlador@apagarUm"])->name('removerUm');

Route::get('/doacao/finalizar', ["uses"=>"DoacaoControlador@finalizarDoacao"])->name('finalizar');

Route::post('/doacao/confirmar', ["uses"=>"DoacaoControlador@confirmar"])->name('confirmar');

Route::get('doacao/pesquisa', ["uses"=>"DoacaoControlador@pesquisar"])->name('pesquisar');


//perfis
Route::get('perfil/sair', ["uses"=>"PerfilControlador@sair"])->name('sair');

Route::get('/perfil', ["uses"=>"PerfilControlador@type"])->name('doador');

Route::get('/perfil', ["uses"=>"PerfilControlador@type"])->name('admin');

Route::get('/perfil', ["uses"=>"PerfilControlador@type"])->name('inst');

Route::get('/perfil/dataUsers/{value}', ["uses"=>"PerfilControlador@VerificarUsuarios"])->name('dataUsers');

Route::get('/perfil/efetuada', ["uses"=>"PerfilControlador@recebidas"])->name('recebidas');

Route::get('/perfil/aguardo', ["uses"=>"PerfilControlador@aguardo"])->name('aguardo');

Route::get('perfil/{id}/editar', ["uses"=>"PerfilControlador@editar"])->name('editar');

Route::get('perfil/{id}/excluir', ["uses"=>"PerfilControlador@excluir"])->name('excluir');

Route::post('perfil/atualizar', ["uses"=>"PerfilControlador@atualizar"])->name('atualizarUser');

Route::get('perfil/{id}/destroy', function(){
    
    return Redirect::to('login');
 });

 Route::get('perfil/excluirConta', ["uses"=>"PerfilControlador@excluirConta"])->name('excluirConta');

Route::get('perfil/alterarTipo/{id}/{value}', ["uses"=>"PerfilControlador@alterarTipo"])->name('alterarTipo');

//others
Route::get('/contato', ["uses"=>"ContatoControlador@index"]);

Route::get('/instituicoes', ["uses"=>"InstituicoesControlador@index"]);

Route::get('/sobrenos', ["uses"=>"SobrenosControlador@index"]);

Route::get('/termos', ["uses"=>"HomeControlador@termos"])->name('termos');

//carrinho

Route::get('/carrinho/apagar', ["uses"=>"CarrinhoControlador@apagarTodos"])->name('apagarTodos');

Route::post('/carrinho', ["uses"=>"CarrinhoControlador@criar"])->name('addCarrinho');

Route::get('/carrinho', ["uses"=>"CarrinhoControlador@index"])->name('carrinho');

Route::get('/carrinho/{id}', ["uses"=>"CarrinhoControlador@apagarInd"])->name('apagarInd');

//Route::get('/', 'HomeController@index')->name('home');
