<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Exercício 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<?php
include 'base_cabecalho.php';
?>
<main class="container_1">
    <h1>Exercício 4</h1>
    <form method="post">
        <div class="row inline-row mb-3">
            <div class="col-md-4">
                <label for="dia" class="form-label">Insira um dia:</label>
                <input type="number" id="dia" name="dia" class="form-control" step="any" required="">
            </div>
            <div class="col-md-4">
                <label for="mes" class="form-label">Insira um mês:</label>
                <input type="number" id="mes" name="mes" class="form-control" step="any" required="">
            </div>
            <div class="col-md-4">
                <label for="ano" class="form-label">Insira um ano:</label>
                <input type="number" id="ano" name="ano" class="form-control" step="any" required="">
            </div>
        </div>
        
        <div class="d-flex justify-content-between mt-3">
            <!-- Botão Enviar à esquerda -->
            <button type="submit" class="btn btn-success">Enviar</button>

            <!-- Botões Voltar e Próximo à direita -->
            <div class="d-flex gap-2">
                <button class="btn btn-primary" type="button" onclick="window.location.href='exer3.php'">Voltar</button>
                <button class="btn btn-primary" type="button" onclick="window.location.href='exer5.php'">Próximo</button>
            </div>
        </div>
    </form>
    <?php
    function verificarDataValida($dia, $mes, $ano) {
        return checkdate($mes, $dia, $ano);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];
        if (verificarDataValida($dia, $mes, $ano)) {
            echo "<div class='result_div'><span class='resultado'>A data informada é válida:  </span>&nbsp;<span class='resultado'>" . sprintf('%02d/%02d/%04d', $dia, $mes, $ano) . "</span></div>";
        } else {
            echo "<div class='result_div'><span class='resultado_erro'>A data informada é inválida.</span></div>";
        }
    }

    include 'rodape.php';
    ?>