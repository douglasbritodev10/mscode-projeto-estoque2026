<?php

namespace App\Controller\Categoria;

use App\Controller\AbstractController;
use App\Model\Categoria\CategoriaModel;

class CategoriaController extends AbstractController
{
    private CategoriaModel $model;

    public function __construct()
    {
        $this->model = new CategoriaModel();
    }
    
    public function index(array $requestData): void
    {
        $categorias = $this->model->buscarCategorias();

        $data = [
            'categorias' => $categorias
        ];

        $this->render('/categoria/categoria.php', $data);
    }
}