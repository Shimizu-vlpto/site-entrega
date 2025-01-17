<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ItemPedidoController;
use App\Http\Controllers\ImagemController;

Route::middleware('auth')->group(function () {
    Route::get('/categoria', [ CategoriaController::class, 'index' ])->name('categoria');
    Route::get("/categoria/exc/{id}", [ CategoriaController::class, 'ExcluirCategoria' ])->name('categoria_ex');
    Route::get("/categoria/upd/{id}",
        [ CategoriaController::class, 'BuscarAlteracao' ]
    )->name('categoria_upd');

    Route::post('/categoria', [ CategoriaController::class, 'IncluirCategoria' ]);
    Route::post('/categoria/upd', [ CategoriaController::class, 'ExecutaAlteracao' ]);
    Route::resource('produtos', ProdutoController::class);
     Route::post('/produtos', [ProdutoController::class, 'salvarNovoProduto'])->name('novo_produto');
    });


Route::get('/login', function () {
    return view("admin_layout.login");
})->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/registrar', [AuthController::class, 'register'])->name('registrar');
Route::get('/registrar', function () {
    return view("admin_layout.register");
});

Route::post('/produtos', function () {
    return view('index');
});

Route::resource('imagens', ImagemController::class);
Route::resource('carrinho', CarrinhoController::class);
Route::resource('pedidos', PedidoController::class);
Route::resource('itens-pedido', ItemPedidoController::class);




