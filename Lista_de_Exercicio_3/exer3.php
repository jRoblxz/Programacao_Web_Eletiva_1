<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Exercício 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<?php
include 'base_cabecalho.php';
?>
<main class="container_1">
    <h1>Exercício 3</h1>
    <form method="post">
        <div class="row inline-row mb-3">
            <div class="col-md-6">
                <label for="palavra1" class="form-label">Insira a 1º palavra:</label>
                <input type="text" id="palavra1" name="palavra1" class="form-control" step="any" required="">
            </div>
            <div class="col-md-6">
                <label for="palavra2" class="form-label">Insira a 2º palavra:</label>
                <input type="text" id="palavra2" name="palavra2" class="form-control" step="any" required="">
            </div>
        </div>
        
        <div class="d-flex justify-content-between mt-3">
            <!-- Botão Enviar à esquerda -->
            <button type="submit" class="btn btn-success">Enviar</button>

            <!-- Botões Voltar e Próximo à direita -->
            <div class="d-flex gap-2">
                <button class="btn btn-primary" type="button" onclick="window.location.href='exer2.php'">Voltar</button>
                <button class="btn btn-primary" type="button" onclick="window.location.href='exer4.php'">Próximo</button>
            </div>
        </div>
    </form>
    <?php
    function verificarPalavraContida($palavra1, $palavra2) {
        return strpos($palavra1, $palavra2) !== false;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $palavra1 = $_POST['palavra1'];
        $palavra2 = $_POST['palavra2'];
        if (verificarPalavraContida($palavra1, $palavra2)) {
            echo "<div class='result_div'><p class='resultado'>A palavra '$palavra2' está contida em '$palavra1'.</p></div>";
        } else {
            echo "<div class='result_div'><p class='resultado_erro'>A palavra '$palavra2' NÃO está contida em '$palavra1'.</p></div>";
        }
    }

    include 'rodape.php';
    ?>