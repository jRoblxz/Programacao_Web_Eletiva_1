<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Exercício 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<?php
include 'base_cabecalho.php';
?>
<main class="container_1">
    <h1>Exercício 1</h1>
    <form method="post">
        <div class="row inline-row mb-3">
            <div class="col-md-3">
                <label for="valor1" class="form-label">Insira o 1º numero:</label>
                <input type="number" id="valor1" name="valor1" class="form-control" step="any" required="">
            </div>
            <div class="col-md-3">
                <label for="valor2" class="form-label">Insira o 2º numero:</label>
                <input type="number" id="valor2" name="valor2" class="form-control" step="any" required="">
            </div>
            <div class="col-md-3">
                <label for="valor3" class="form-label">Insira o 3º numero:</label>
                <input type="number" id="valor3" name="valor3" class="form-control" step="any" required="">
            </div>
            <div class="col-md-3">
                <label for="valor4" class="form-label">Insira o 4º numero:</label>
                <input type="number" id="valor4" name="valor4" class="form-control" step="any" required="">
            </div>
        </div>
        <div class="row inline-row mb-3">
            <div class="col-md-3">
                <label for="valor5" class="form-label">Insira o 5º numero:</label>
                <input type="number" id="valor5" name="valor5" class="form-control" step="any" required="">
            </div>
            <div class="col-md-3">
                <label for="valor6" class="form-label">Insira o 6º numero:</label>
                <input type="number" id="valor6" name="valor6" class="form-control" step="any" required="">
            </div>
            <div class="col-md-3">
                <label for="valor7" class="form-label">Insira o 7º numero:</label>
                <input type="number" id="valor7" name="valor7" class="form-control" step="any" required="">
            </div>
        </div>
        <div class="d-flex justify-content-between mt-3">
            <!-- Botão Enviar à esquerda -->
            <button type="submit" class="btn btn-success">Enviar</button>

            <!-- Botões Voltar e Próximo à direita -->
            <div class="d-flex gap-2">
                <button class="btn btn-primary" type="button" onclick="window.location.href='/index.php'">Voltar</button>
                <button class="btn btn-primary" type="button" onclick="window.location.href='exer2.php'">Finalizar</button>
            </div>
        </div>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];
        $valor4 = $_POST['valor4'];
        $valor5 = $_POST['valor5'];
        $valor6 = $_POST['valor6'];
        $valor7 = $_POST['valor7'];

        $menor = $valor1;
        $posicao = 1;

        if ($valor2 < $menor) {
            $menor = $valor2;
            $posicao = 2;
        }

        if ($valor3 < $menor) {
            $menor = $valor3;
            $posicao = 3;
        }

        if ($valor4 < $menor) {
            $menor = $valor4;
            $posicao = 4;
        }

        if ($valor5 < $menor) {
            $menor = $valor5;
            $posicao = 5;
        }

        if ($valor6 < $menor) {
            $menor = $valor6;
            $posicao = 6;
        }

        if ($valor7 < $menor) {
            $menor = $valor7;
            $posicao = 7;
        }

        echo "<div class='result_div'><p class='resultado'> O menor valor informado é: $menor e está na posição $posicao</p></div>";
    }
    include 'rodape.php';
    ?>