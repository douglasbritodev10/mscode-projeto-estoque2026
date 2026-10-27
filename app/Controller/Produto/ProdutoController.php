<?php

namespace App\Controller\Produto;

use App\Controller\AbstractController;

class ProdutoController extends AbstractController
{
    public function index(array $requestData): void
    {
        $this->render('/produto/produtos.php');
    }
}