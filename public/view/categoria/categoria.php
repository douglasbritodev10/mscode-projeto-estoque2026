<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MS Code - Projeto Estoque 2026</title>

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
        <h1>Categorias</h1>
        <div>
          <a href="/nova_categoria" class="btn btn-primary"><i class="bi bi-plus"></i>Nova categoria</a>
        </div>
      </div>

      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col-1 text-align-right">Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data['categorias'] as $categoria) { ?>
          <tr>
            <th scope="row"><?php echo $categoria['id']; ?></th>
            <td><?php echo $categoria['nome']; ?></td>
            <td class="col-1 text-align-right">
              <button class="btn btn-secondary btn-sm" title="Editar"><i class="bi bi-pencil"></i></button>
              <button class="btn btn-danger btn-sm" title="Excluir"><i class="bi bi-trash"></i></button>
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
