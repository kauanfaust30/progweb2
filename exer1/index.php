<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 1</title>

<link rel="stylesheet" href="index.css">

</head>
<body>

<div class="container">

    <h2>Formulário</h2>

    <form action="dados.php" method="POST">

        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Telefone:</label>
        <input type="number" name="telefone" required>

        <label>E-mail:</label>
        <input type="email" name="email" required>

        <label>Mensagem:</label>
        <textarea name="mensagem" placeholder="Escreva aqui..."></textarea>

        <button type="submit">Enviar</button>

    </form>

    <a class="url-link" href="dados.php?nome=Kauan+Faust&telefone=988251529&email=kauan.faust@unidavi.edu.br&mensagem=Uma boa noite a todos!">
    Enviar dados por URL</a>

</div>

</body>
</html>