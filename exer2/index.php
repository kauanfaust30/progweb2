<?php
$resultado = null;
$lista = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nomes = trim($_POST["nomes"]);
    $lista = explode("\n", $nomes);

    $lista = array_map('trim', $lista);
    $lista = array_filter($lista);

    if (count($lista) > 0) {
        $resultado = $lista[array_rand($lista)];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Sorteador de Nomes</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="app">

    <header>
        <h1>Sorteador de Nomes</h1>
       
    </header>

    <main>

        <form method="POST" class="form-box">

            <label>Lista de participantes</label>

            <textarea name="nomes" placeholder="Digite um nome por linha..."><?php 
                echo isset($_POST["nomes"]) ? htmlspecialchars($_POST["nomes"]) : ""; 
            ?></textarea>

            <button type="submit">Sortear</button>

        </form>

        <?php if ($resultado): ?>
        <section class="resultado-box">

            <h2>Vencedor</h2>

            <div class="vencedor">
                <?php echo htmlspecialchars($resultado); ?>
            </div>

        </section>
        <?php endif; ?>

    </main>

</div>

</body>
</html>