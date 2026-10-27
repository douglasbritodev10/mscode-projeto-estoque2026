<?php

namespace App\Controller\NovaCategoria;

use App\Controller\AbstractController;

class NovaCategoriaController extends AbstractController
{
    public function index(array $requestData): void
    {
        $this->render('categoria/nova_categoria.php');
    }
}