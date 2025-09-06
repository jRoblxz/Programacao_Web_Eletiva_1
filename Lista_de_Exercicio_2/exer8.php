<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Exercício 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<?php
include 'base_cabecalho.php';
?>
<main class="container_1">
    <h1>Exercício 8</h1>
    <form method="post">
        <div class="row inline-row mb-3">
            <div class="col-md-12">
                <label for="num1" class="form-label">Insira um número:</label>
                <input type="number" id="num1" name="num1" class="form-control" step="any" required="">
            </div>
        </div>
        <div class="d-flex justify-content-between mt-3">
            <!-- Botão Enviar à esquerda -->
            <button type="submit" class="btn btn-success">Enviar</button>

            <!-- Botões Voltar e Próximo à direita -->
            <div class="d-flex gap-2">
                <button class="btn btn-primary" type="button" onclick="window.location.href='exer7.php'">Voltar</button>
                <button class="btn btn-primary" type="button" onclick="window.location.href='exer9.php'">Próximo</button>
            </div>
        </div>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $num1 = $_POST['num1'];
        $contagem = $num1;

        echo "<div class='result_div'><p class='resultado'>A contagem regressiva do $num1 é:</p></div>";

        do {
            echo "<div class='result_div'><li>$contagem</li></div>";
            $contagem--;
          } while ($contagem >= 1);
    }
    
    include 'rodape.php';
    ?>