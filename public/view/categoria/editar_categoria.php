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
      <div class="mb-4">
        <h1>Editar categoria</h1>
      </div>
      <?php if (isset($data['error'])) { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $data['error']; ?>
        </div>
      <?php } ?>
      <form action="salvar_edicao_categoria" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['categoria']['id'] ?? ''; ?>">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $data['categoria']['nome'] ?? ''; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="/categoria" class="btn btn-secondary">Cancelar</a>
      </form>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>

</html>
