<?php

namespace App\Controller\CadastrarCategoria;

use App\Controller\AbstractController;
use App\Model\Categoria\CategoriaModel;

class CadastrarCategoriaController extends AbstractController
{

    private CategoriaModel $model;

    public function __construct()
    {
        $this->model = new CategoriaModel();
    }

    public function index(array $requestData): void
    {
        try {
            if(!$requestData['nome']) {
                throw new \Exception('Informe o nome da categoria.');
            }
            $this->model->cadastrar($requestData['nome']);
            $this->redirect('/categoria.php');

        } catch (\Exception $e) {
            $this->redirectToError($e->getMessage());
        }
    }
}