<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Exercício 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f8f9fa;
            background-image: url('../images/DSC03870.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
        }

        main {
            margin-top: 20px;
        }

        .container {
            max-width: 800px;
            margin: center;
            padding: 20px;
            background: rgba(255, 255, 255, 0.35);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(13.5px);
            -webkit-backdrop-filter: blur(13.5px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .row {
            margin: auto;
        }

        .form-label {
            font-weight: bold;
            color: #f0f8ff;
        }

        h1 {
            font-weight: bold;
            color: #f0f8ff;
        }

        .form-check-label {
            color: #f0f8ff;
        }

        .resultado {
            font-weight: bold;
            color: rgb(2, 111, 25);
            margin-top: 15px;
            font-size: 1.2em;
        }

        .result_div {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <main class="container">
        <h1>Exercício 5</h1>
        <form method="post">
            <div class="row inline-row mb-3">
                <div class="col-md-4">
                    <label for="valor1" class="form-label">Insira o primeiro valor:</label>
                    <input type="number" id="valor1" name="valor1" class="form-control" required="">
                </div>
                <div class="col-md-4">
                    <label for="valor2" class="form-label">Insira o segundo valor</label>
                    <input type="number" id="valor2" name="valor2" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="valor3" class="form-label">Insira o terceiro valor</label>
                    <input type="number" id="valor3" name="valor3" class="form-control" required="">
                </div>
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" type="button"onclick="window.location.href='exercicio6.php'" >Voltar</button>
                <button class="btn btn-primary" type="button" onclick="window.location.href='exercicio8.php'">Próximo</button>
            </div>



        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $valor1 = $_POST["valor1"]; // leitura da variavel
            $valor2 = $_POST["valor2"];
            $valor3 = $_POST["valor3"];
            $media = ($valor1 + $valor2 + $valor3) / 3;
            echo "<div class='result_div'><p class='resultado'>Média: $media </p></div>";
        }
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>