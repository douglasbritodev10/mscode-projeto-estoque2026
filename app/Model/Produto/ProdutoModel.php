<?php

namespace App\Model\Produto

use App\Database\Query;

class ProdutoModel
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();
    }

    public function cadastrar(string $nome, float $preco, int $categoriaId): void
    {
        $dados = [
            'nome' => $nome,
            'preco' => $preco,
            'categoria_id' => $categoriaId
        ];
        $resultado = $this->query->insert('produtos', $dados);

        if (! $resultado) {
            throw new \Exception('Erro ao cadastrar produto: ' . $nome);
        }
    }
}