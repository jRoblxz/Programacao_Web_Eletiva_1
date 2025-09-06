<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<?php
include 'base_cabecalho.php';
?>
<main class="container_1">
    <h1>Exercício 2</h1>
    <form method="post">
        <div class="row inline-row mb-3">
            <div class="col-md-6">
                <label for="valor1" class="form-label">Insira o 1º numero:</label>
                <input type="number" id="valor1" name="valor1" class="form-control" step="any" required="">
            </div>
            <div class="col-md-6">
                <label for="valor2" class="form-label">Insira o 2º numero:</label>
                <input type="number" id="valor2" name="valor2" class="form-control" step="any" required="">
            </div>
        </div>
        
        <div class="d-flex justify-content-between mt-3">
            <!-- Botão Enviar à esquerda -->
            <button type="submit" class="btn btn-success">Enviar</button>

            <!-- Botões Voltar e Próximo à direita -->
            <div class="d-flex gap-2">
                <button class="btn btn-primary" type="button" onclick="window.location.href='exer1.php'">Voltar</button>
                <button class="btn btn-primary" type="button" onclick="window.location.href='exer3.php'">Próximo</button>
            </div>
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $soma = $valor1 + $valor2;
        if ($valor1 == $valor2) {
          $resultado = 3 * $soma;
          $mensagem = "<div class='result_div'><p class='resultado'>Os números são iguais. O triplo é:$resultado</p></div>";
        } else {
          $resultado = $soma;
          $mensagem = "<div class='result_div'><p class='resultado'>Os números são diferentes. A soma é:$resultado</p></div>";
        }
    
        echo $mensagem;
    }
      

    include 'rodape.php';
    ?>