<?php

namespace App\Controller\Produto;

class ProdutoController extends AbstractController
{
    public function index(array $requestData): void
    {
        $this->render('produto/produtos.php');
    }
}