<?php

namespace App\Controller\Categoria;

use App\Controller\AbstractController;
use App\Model\Categoria\CategoriaModel;


class SalvarEdicaoCategoriaController extends AbstractController
{

    private CategoriaModel $model;

    public function __construct()
    {
        $this->model = new CategoriaModel();
    }

    public function index(array $requestData): void
    {
        try {
            if(!$requestData['id'] || !$requestData['nome']) {
                throw new \Exception('Informe o id e o nome da categoria.');
            }
            $this->model->editar($requestData['id'], $requestData['nome']);
            $this->redirect('/categoria');

        } catch (\Exception $e) {
            $this->redirectToError($e->getMessage());
        }
    }
}