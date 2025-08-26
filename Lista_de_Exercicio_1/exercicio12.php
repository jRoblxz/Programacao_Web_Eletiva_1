<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Exercício 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <main class="container">
        <h1>Exercício 12</h1>
        <form method="post">
            <div class="row inline-row mb-3">
                <div class="col-md-6">
                    <label for="valor1" class="form-label">Insira o valor da base:</label>
                    <input type="number" id="valor1" name="valor1" class="form-control" required="">
                </div>
                <div class="col-md-6">
                    <label for="valor2" class="form-label">Insira o valor do expoente:</label>
                    <input type="number" id="valor2" name="valor2" class="form-control" required="">
                </div>
            </div> 
            <div class="d-flex justify-content-between mt-3">
                <!-- Botão Enviar à esquerda -->
                <button type="submit" class="btn btn-success">Enviar</button>

                <!-- Botões Voltar e Próximo à direita -->
                <div class="d-flex gap-2">
                    <button class="btn btn-primary" type="button" onclick="window.location.href='exercicio11.php'">Voltar</button>
                    <button class="btn btn-primary" type="button" onclick="window.location.href='exercicio13.php'">Próximo</button>
                </div>
            </div>


        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $valor1 = $_POST["valor1"];
            $valor2 = $_POST["valor2"];
            $potencia = $valor1 ** $valor2;
            echo "<div class='result_div'><p class='resultado'>$valor1 elevado a $valor2 é: $potencia</p></div>";
        }
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>