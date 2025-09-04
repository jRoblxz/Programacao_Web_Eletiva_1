<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Exercício 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<?php
    include 'base_cabecalho.php';
?>
    <main class="container_1">
        <h1>Exercício 11</h1>
        <form method="post">
            <div class="row inline-row mb-3">
                <div class="col-md-12">
                    <label for="valor1" class="form-label">Insira o raio de um círculo:</label>
                    <input type="number" id="valor1" name="valor1" class="form-control" required="">
                </div>
            </div> 
            <div class="d-flex justify-content-between mt-3">
                <!-- Botão Enviar à esquerda -->
                <button type="submit" class="btn btn-success">Enviar</button>

                <!-- Botões Voltar e Próximo à direita -->
                <div class="d-flex gap-2">
                    <button class="btn btn-primary" type="button" onclick="window.location.href='exercicio10.php'">Voltar</button>
                    <button class="btn btn-primary" type="button" onclick="window.location.href='exercicio12.php'">Próximo</button>
                </div>
            </div>


        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $valor1 = $_POST["valor1"]; // leitura da variavel
            $perimetro = 2 * $valor1 * pi();
            echo "<div class='result_div'><p class='resultado'>O perímetro do círculo é: $perimetro</p></div>";
        }
        include 'rodape.php';
        ?>