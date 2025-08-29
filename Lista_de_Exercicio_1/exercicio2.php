<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercício 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<?php
include 'base_cabecalho.php';
?>
<body>
  <div class="container_1">
    <h1>Exercício 2</h1>
    <form method="post">
      <div class="row inline-row mb-3">
        <div class="col-md-6">
          <label for="" class="form-label">Informe o primeiro valor</label>
          <input type="number" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <div class="col-md-6">
          <label for="valor2" class="form-label">Informe o segundo valor</label>
          <input type="number" id="valor2" name="valor2" class="form-control" required="">
        </div>
      </div>
      <div class="d-flex justify-content-between mt-3">
                <button type="submit" class="btn btn-success">Enviar</button>
                <div class="d-flex gap-2">
                    <button class="btn btn-primary" type="button" onclick="window.location.href='exercicio1.php'">Voltar</button>
                    <button class="btn btn-primary" type="button" onclick="window.location.href='exercicio3.php'">Próximo</button>
                </div>
            </div>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $valor1 = $_POST["valor1"]; // leitura da variavel
        $valor2 = $_POST["valor2"];
        $subtracao = $valor1 - $valor2;
        echo "<p> Subtracao: $subtracao </p>";
    }
    include 'rodape.php';
    ?>