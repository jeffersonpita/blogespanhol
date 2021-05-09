<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato',  [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato',  [\App\Http\Controllers\ContatoController::class, 'contato_post'])->name('site.contato');

Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'blog'])->name('site.blog');

Route::get('/login', function(){ return 'login'; })->name('site.login');


Route::get('/posts', function(){ return 'POSTS'; })->name('app.posts');
Route::get('/posts/{p1}', [\App\Http\Controllers\PostController::class, 'post'])->name('app.posts.one');

Route::prefix("/app")->group( function(){
  Route::get('/posts/criar', function(){ return 'login'; });
  Route::get('/posts/editar', function(){ return 'login'; });
  Route::get('/posts/remover', function(){ return 'login'; });

  Route::get('/categorias', function(){ return 'login'; })->name('app.login');
  Route::get('/categorias/criar', function(){ return 'login'; });
  Route::get('/categorias/editar', function(){ return 'login'; });
  Route::get('/categorias/remover', function(){ return 'login'; });
});

Route::fallback(function(){
  echo "A página não existe. <a href='".route('site.index')."'>Voltar ao início.</a>";
});





/*
Route::get('/contato/{nome}', function( $nome ){
   echo "estamos aqui ".$nome;
}); */
