<?php

use App\Controller\AppController;
use App\Controller\Error\ErrorController;
use App\Controller\Error\NotFoundController;
use App\Controller\Home\HomeController;
use App\Controller\Login\loginController;
use App\Controller\Categoria\CategoriaController;
use App\Controller\NovaCategoria\NovaCategoriaController;
use App\Controller\CadastrarCategoria\CadastrarCategoriaController;
use App\Controller\Produto\ProdutoController;

$router = [
    'routes' => [
        '/' => AppController::class,
        '/error' => ErrorController::class,
        '/categoria' => CategoriaController::class,
        '/login' => LoginController::class,
        '/home' => HomeController::class,
        '/nova_categoria' => NovaCategoriaController::class,
        '/cadastrar_categoria' => CadastrarCategoriaController::class,



        '/produto' => ProdutoController::class,
        
    ],
    'default' => NotFoundController::class
];
