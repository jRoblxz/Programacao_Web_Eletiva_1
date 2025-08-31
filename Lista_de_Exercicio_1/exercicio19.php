<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Exercício 19</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<?php
include 'base_cabecalho.php';
?>
    <main class="container_1">
        <h1>Exercício 19</h1>
        <form method="post">
            <div class="row inline-row mb-3">
                <div class="col-md-12">
                    <label for="dias" class="form-label">Insira um valor em dias:</label>
                    <input type="number" id="dias" name="dias" class="form-control" step="any"required="">
                </div>
    
            </div> 
            <div class="d-flex justify-content-between mt-3">
                <!-- Botão Enviar à esquerda -->
                <button type="submit" class="btn btn-success">Enviar</button>

                <!-- Botões Voltar e Próximo à direita -->
                <div class="d-flex gap-2">
                    <button class="btn btn-primary" type="button" onclick="window.location.href='exercicio18.php'">Voltar</button>
                    <button class="btn btn-primary" type="button" onclick="window.location.href='exercicio20.php'">Próximo</button>
                </div>
            </div>
        </form>
       <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $dias = $_POST['dias'];
            $horas = $dias * 24;
            $minutos = $horas * 60;
            $segundos = $minutos * 60;

            echo "<div class='result_div'><p class='resultado'>A quantidade de dias é equivalente a: </p>";
            echo "<div class='result_div'><ul class='resultado'>";
            echo "<div class='result_div'><li class='resultado'>Horas: $horas</li></div>";
            echo "<div class='result_div'><li class='resultado'>Minutos: $minutos</li></div>";
            echo "<div class='result_div'><li class='resultado'>Segundos: $segundos</li></div>";
            echo "</ul>";
        }
        include 'rodape.php';
        ?>
