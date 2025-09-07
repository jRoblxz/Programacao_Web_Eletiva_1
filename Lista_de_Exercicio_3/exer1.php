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
            <div class="col-md-12">
                <label for="palavra" class="form-label">Insira uma palavra:</label>
                <input type="text" id="palavra" name="palavra" class="form-control" step="any" required="">
            </div>

        </div>
        </div>
        <div class="d-flex justify-content-between mt-3">
            <!-- Botão Enviar à esquerda -->
            <button type="submit" class="btn btn-success">Enviar</button>

            <!-- Botões Voltar e Próximo à direita -->
            <div class="d-flex gap-2">
                <button class="btn btn-primary" type="button" onclick="window.location.href='/index.php'">Voltar</button>
                <button class="btn btn-primary" type="button" onclick="window.location.href='exer2.php'">Próximo</button>
            </div>
        </div>
    </form>
    <?php
    function contarCaracteres($palavra)
    {
        return strlen($palavra);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $palavra = $_POST['palavra'];
        echo "<div class='result_div'><p class='resultado'>A palavra '$palavra' tem " . contarCaracteres($palavra) . " caracteres.</p></div>";
    }
    include 'rodape.php';
    ?>