<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MS Code - Projeto Estoque 2025</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="/css/styles.css" rel="stylesheet">
</head>

<body>
  <main>
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <div class="container py-5">
      <div class="mb-4 d-flex flex-row justify-content-between">
        <h1>Produtos</h1>
        <div>
          <a href="/novo_produto" class="btn btn-primary"><i class="bi bi-plus"></i>Novo produto</a>
        </div>
      </div>

      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Categoria Id</th>
            <th scope="col">Valor</th>
            <th scope="col">Qtd. Disponível</th>
            <th scope="col-2 text-align-right">Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data['produtos'] as $produto) { ?>
          <tr>
            <th scope="row"><?php echo $produto['id']; ?></th>
            <td><?php echo $produto['nome']; ?></td>
            <td><?php echo $produto['descricao']; ?></td>
            <td><?php echo $produto['categoria_id']; ?></td>
            <td>R$ <?php echo number_format($produto['valor'], 2, ',', '.'); ?></td>
            <td><?php echo $produto['quantidade_disponivel']; ?></td>
            <td class="col-2 d-flex gap-1 w-auto flex-wrap">
              <button class="btn btn-primary btn-sm" title="Adicionar 1 (incrementar quantidade)"><i class="bi bi-plus"></i></button>
              <button class="btn btn-secondary btn-sm" title="Editar produto"><i class="bi bi-pencil"></i></button>
              <button class="btn btn-danger btn-sm" title="Excluir"><i class="bi bi-trash"></i></button>
              <button class="btn btn-primary btn-sm" title="Vender produto (decrementar 1)">Vender</button>
            </td>
          </tr>
          <?php } ?>
        </tbody>

      </table>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>

</html>
