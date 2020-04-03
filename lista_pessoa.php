<?php
    require_once 'conexao.php';
    $sql = "SELECT * FROM pessoa";

    $query = $con->query($sql);

    $registros = $query->fetchAll();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Lista de Cidades!</title>
  </head>
  <body>

    <div class="container">
      <h1>Lista de Pessoa!</h1>
      <a class="btn btn-info" href="form_pessoa.php">Novo</a>
      <table class="table table-hover table-striped">
        <thead>
          <th>#</th>
          <th>Nome</th>
          <th>Idade</th>
          <th>Ações</th>
        </thead>
        <tbody>
          <?php foreach ($registros as $linha): ?>
            <tr>
              <td><?php echo $linha['id']; ?></td>
              <td><?php echo $linha['nome']; ?></td>
              <td><?php echo $linha['idade']; ?></td>
              <td>
                  <a class="btn btn-warning btn-sm" href="buscar_pessoa.php?id=<?php echo $linha['id']; ?>">Editar</a>
                  <a class="btn btn-danger btn-sm" href="exclui_pessoa.php?id=<?php echo $linha['id']; ?>">Excluir</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
