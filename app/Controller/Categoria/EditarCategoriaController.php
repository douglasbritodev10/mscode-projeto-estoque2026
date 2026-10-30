<?php

namespace App\Controller\Categoria;

use App\Controller\AbstractController;
use App\Model\Categoria\CategoriaModel;

class EditarCategoriaController extends AbstractController
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
            $categorias = $this->model->buscarCategorias();
            $categoria = null;
            foreach ($categorias as $cat) {
                if ($cat['id'] == $requestData['id']) {
                    $categoria = $cat;
                    break;
                }
            }
            if (!$categoria) {
                throw new \Exception('Categoria não encontrada.');
            }
            $this->render('/categoria/editar_categoria.php', ['categoria' => $categoria]);
        } catch (\Exception $e) {
            $this->render('/categoria/editar_categoria.php', ['error' => $e->getMessage()]);
        } 
    }
}