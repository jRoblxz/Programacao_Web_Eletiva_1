<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Exercício 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<?php
include 'base_cabecalho.php';
?>
<main class="container_1">
    <h1>Exercício 10</h1>
    <form method="post">
        <div class="row inline-row mb-3">
            <div class="col-md-12">
                <label for="numero" class="form-label">Insira o numero para vizualizar a tabuada:</label>
                <input type="number" id="numero" name="numero" class="form-control" step="any" required="">
            </div>
        </div>
        <div class="d-flex justify-content-between mt-3">
            <!-- Botão Enviar à esquerda -->
            <button type="submit" class="btn btn-success">Enviar</button>

            <!-- Botões Voltar e Próximo à direita -->
            <div class="d-flex gap-2">
                <button class="btn btn-primary" type="button" onclick="window.location.href='exer9.php'">Voltar</button>
                <button class="btn btn-primary" type="button" onclick="window.location.href='/index.php'">Finalizar</button>
            </div>
        </div>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $numero = $_POST['numero'];

        echo "<div class='result_div'><p class='resultado'>Tabuada de $numero é:</p></div>";

        echo "<div class='result_div'>";
        echo "<ul style='list-style:none; padding-left:0;'>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li class='resultado'>$numero x $i = $resultado</li>";
        }
        echo "</ul></div>";
      
    }
    
    include 'rodape.php';
    ?>