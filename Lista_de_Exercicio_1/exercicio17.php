<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Exercício 17</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<?php
include 'base_cabecalho.php';
?>
    <main class="container_1">
        <h1>Exercício 17</h1>
        <form method="post">
            <div class="row inline-row mb-3">
                <div class="col-md-4">
                    <label for="capital" class="form-label">Insira o capital:</label>
                    <input type="text" id="capital" name="capital" class="form-control" step="any"required="">
                </div>
                <div class="col-md-4">
                    <label for="taxa" class="form-label">Insira a taxa:</label>
                    <input type="text" id="taxa" name="taxa" class="form-control" step="any" lang="en"required="">
                </div>
                <div class="col-md-4">
                    <label for="periodo" class="form-label">Informe o periodo:</label>
                    <input type="text" id="periodo" name="periodo" class="form-control" step="any" lang="en"required="">
                </div>
    
            </div> 
            <div class="d-flex justify-content-between mt-3">
                <!-- Botão Enviar à esquerda -->
                <button type="submit" class="btn btn-success">Enviar</button>

                <!-- Botões Voltar e Próximo à direita -->
                <div class="d-flex gap-2">
                    <button class="btn btn-primary" type="button" onclick="window.location.href='exercicio16.php'">Voltar</button>
                    <button class="btn btn-primary" type="button" onclick="window.location.href='exercicio18.php'">Próximo</button>
                </div>
            </div>
        </form>
       <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $capital = $_POST['capital'];
            $taxa = $_POST['taxa'];
            $periodo = $_POST['periodo'];

            $juros = $capital * ($taxa / 100) * $periodo;
            echo "<div class='result_div'><p class='resultado'>O valor do juros é: $juros </p></div>";
        }
        include 'rodape.php';
        ?>
