<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Primeiro exemplo de Formulario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
        <style>
            .container{
                background: #7c7c7c;
            }
            p{
                color: red;
            }
        </style>
    </head>
    <body class="container"> 
        <?php
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];

            $soma = $n1 + $n2;

            echo "<p> A soma de N1 e N2 é: $soma </p>"
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </body>
</html>