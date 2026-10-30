<?php

namespace App\Controller\Produto;

use App\Controller\AbstractController;
use App\Model\Produto\ProdutoModel;

class NovoProdutoController extends AbstractController
{

    private ProdutoModel $model;

    public function __construct()
    {
        $this->model = new ProdutoModel();
    }

    public function index(array $requestData): void
    {
        try {
            $categorias = $this->model->buscarCategorias();
            $this->render('/produto/novo_produto.php', ['categorias' => $categorias]);
        } catch (\Exception $e) {
            $this->redirectToError($e->getMessage());
        }
    }
}