<?php
$resultado = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $numero = $_POST["numero"];

    if (is_numeric($numero)) {

        if ($numero % 2 == 0) {
            $resultado = "O número $numero é PAR ";
        } else {
            $resultado = "O número $numero é ÍMPAR ";
        }

    } else {
        $resultado = "Digite um número válido!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Exercicio 2</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="app">

    <h1>Verificador de Par ou Ímpar</h1>

    <form method="POST">
        <input type="number" name="numero" placeholder="Digite um número" required>
        <button type="submit">Verificar</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado">
            <?php echo $resultado; ?>
        </div>
    <?php endif; ?>

</div>

</body>
</html>