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
                <div class="col-md-6">
                    <label for="distancia" class="form-label">Insira uma distanância em KM:</label>
                    <input type="number" id="distancia" name="distancia" class="form-control" step="any"required="">
                </div>
            <div class="col-md-6">
                    <label for="horas" class="form-label">Insira um tempo em Horas:</label>
                    <input type="number" id="horas" name="horas" class="form-control" step="any"required="">
                </div>
            </div> 
            <div class="d-flex justify-content-between mt-3">
                <!-- Botão Enviar à esquerda -->
                <button type="submit" class="btn btn-success">Enviar</button>

                <!-- Botões Voltar e Próximo à direita -->
                <div class="d-flex gap-2">
                    <button class="btn btn-primary" type="button" onclick="window.location.href='exercicio19.php'">Voltar</button>
                    <button class="btn btn-primary" type="button" onclick="window.location.href='/index.php'">Finalizar</button>
                </div>
            </div>
        </form>
       <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $distancia = $_POST['distancia'];
            $horas = $_POST['horas'];
            $vel_media = $distancia  / $horas;


            echo "<div class='result_div'><p class='resultado'>A velocidade média é: $vel_media KM/h</p>";
        }
        include 'rodape.php';
        ?>
