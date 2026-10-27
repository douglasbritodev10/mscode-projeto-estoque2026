<?php

namespace App\Controller\Categoria;

class CategoriaController extends AbstractController
{
    public function index(array $requestData): void
    {
        $this->render('categoria/categoria.php');
    }
}