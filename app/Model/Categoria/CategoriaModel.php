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

        $resultado = $this->query->insert('categoria', $dados);

        if (! $resultado) {
            throw new \Exception("Erro ao cadastrar categoria. $nome");
        }
    }

    public function editar(int $id, string $nome): void
    {
        $dados = [
            'nome' => $nome
        ];

        $resultado = $this->query->update('categoria', $dados, "id = $id");

        if (! $resultado) {
            throw new \Exception("Erro ao atualizar categoria. ID: $id");
        }
    }

    public function excluir(int $id): void
    {
        $resultado = $this->query->delete('categoria', "id = $id");

        if (! $resultado) {
            throw new \Exception("Erro ao excluir categoria. ID: $id");
        }
    }
  
    public function buscarCategorias(): array
    {
        $resultado = $this->query->select('categoria');

        if (! $resultado) {
            throw new \Exception("Erro ao buscar categorias.");
        }

        return $resultado;
    }
}