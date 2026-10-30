<?php

namespace App\Controller\Produto;

use App\Controller\AbstractController;
use App\Model\Produto\ProdutoModel;

class SalvarProdutoController extends AbstractController
{

    private ProdutoModel $model;

    public function __construct()
    {
        $this->model = new ProdutoModel();
    }

    public function index(array $requestData): void
    {
        try {
            if(!$requestData['nome'] || !$requestData['descricao'] || !$requestData['categoriaId'] || !$requestData['quantidade'] || !$requestData['valor']) {
                throw new \Exception('Informe todos os campos obrigatórios.');
            }
            $this->model->salvar($requestData);
            $this->redirect('/produto');

        } catch (\Exception $e) {
            $this->redirectToError($e->getMessage());
        }
    }
}