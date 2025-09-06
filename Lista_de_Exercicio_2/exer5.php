<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Exercício 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<?php
include 'base_cabecalho.php';
?>
<main class="container_1">
    <h1>Exercício 5</h1>
    <form method="post">
        <div class="row inline-row mb-3">
            <div class="col-md-12">
                <label for="numero" class="form-label">Insira o numero de um mês:</label>
                <input type="number" id="numero" name="numero" class="form-control" step="any" required="">
            </div>
        </div>
        <div class="d-flex justify-content-between mt-3">
            <!-- Botão Enviar à esquerda -->
            <button type="submit" class="btn btn-success">Enviar</button>

            <!-- Botões Voltar e Próximo à direita -->
            <div class="d-flex gap-2">
                <button class="btn btn-primary" type="button" onclick="window.location.href='exer4.php'">Voltar</button>
                <button class="btn btn-primary" type="button" onclick="window.location.href='exer6.php'">Próximo</button>
            </div>
        </div>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $numero = $_POST['numero'];
        switch($numero){
            case 1:
                echo "<div class='result_div'><p class='resultado'>Janeiro</p></div>";
                break;
            case 2:
                echo "<div class='result_div'><p class='resultado'>Fevereiro</p></div>";
                break;
            case 3:
                echo "<div class='result_div'><p class='resultado'>Março</p></div>";
                break;
            case 4:
                echo "<div class='result_div'><p class='resultado'>Abril</p></div>";
                break;
            case 5:
                echo "<div class='result_div'><p class='resultado'>Maio</p></div>";
                break;
            case 6:
                echo "<div class='result_div'><p class='resultado'>Junho</p></div>";
                break;
            case 7:
                echo "<div class='result_div'><p class='resultado'>Julho</p></div>";
                break;
            case 8:
                echo "<div class='result_div'><p class='resultado'>Agosto</p></div>";
                break;
            case 9:
                echo "<div class='result_div'><p class='resultado'>Setembro</p></div>";
                break;
            case 10:
                echo "<div class='result_div'><p class='resultado'>Outubro</p></div>";
                break;
            case 11:
                echo "<div class='result_div'><p class='resultado'>Novembro</p></div>";
                break;
            case 12:
                echo "<div class='result_div'><p class='resultado'>Dezembro</p></div>";
                break;
            default:
                echo "<div class='result_div'><p class='resultado_erro'>Número não possui mês correspondente!</p></div>";
        }
    }
    
    include 'rodape.php';
    ?>