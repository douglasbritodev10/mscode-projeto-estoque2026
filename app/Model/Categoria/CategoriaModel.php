<?php

namespace App\Model\Categoria;

use App\Database\Query;

class CategoriaModel
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();
    }

    public function cadastrar(string $nome): void
    {
        $dados = [
            'nome' => $nome
        ];
        $this->query->insert('categorias', $dados);

        if (! $resultado) {
            throw new \Exception('Erro ao cadastrar categoria. $nome');
        }
    }
}