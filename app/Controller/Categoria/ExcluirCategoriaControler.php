<?php

namespace App\Controller\Categoria;

use App\Controller\AbstractController;
use App\Model\Categoria\CategoriaModel;

class ExcluirCategoriaControler extends AbstractController
{
    private CategoriaModel $model;

    public function __construct()
    {
        $this->model = new CategoriaModel();
    }

    public function index(array $requestData): void
    {
        try {
            if(!$requestData['id']) {
                throw new \Exception('Informe o id da categoria.');
            }
            $this->model->excluir($requestData['id']);
            $this->redirect('/categoria');

        } catch (\Exception $e) {
            $this->redirectToError($e->getMessage());
        }
    }
}