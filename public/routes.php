<?php

use App\Controller\AppController;
use App\Controller\Error\ErrorController;
use App\Controller\Error\NotFoundController;
use App\Controller\Home\HomeController;
use App\Controller\Login\loginController;
use App\Controller\Categoria\CategoriaController;
use App\Controller\Categoria\NovaCategoriaController;
use App\Controller\Categoria\CadastrarCategoriaController;
use App\Controller\Produto\ProdutoController;
use App\Controller\Categoria\EditarCategoriaController;
use App\Controller\Categoria\ExcluirCategoriaControler;
use App\Controller\Categoria\SalvarEdicaoCategoriaController;
use App\Controller\Produto\SalvarProdutoController;
use App\Controller\Produto\NovoProdutoController;

$router = [
    'routes' => [
        '/' => AppController::class,
        '/error' => ErrorController::class,
        '/categoria' => CategoriaController::class,
        '/login' => LoginController::class,
        '/home' => HomeController::class,
        '/nova_categoria' => NovaCategoriaController::class,
        '/cadastrar_categoria' => CadastrarCategoriaController::class,
        '/editar_categoria' => EditarCategoriaController::class,
        '/excluir_categoria' => ExcluirCategoriaControler::class, 
        '/salvar_edicao_categoria' => SalvarEdicaoCategoriaController::class,
        '/salvar_novo_produto' => SalvarProdutoController::class,
        '/novo_produto' => NovoProdutoController::class,

         



        '/produto' => ProdutoController::class,
        
    ],
    'default' => NotFoundController::class
];
