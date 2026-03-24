<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Gerar PDF</title>

<link rel="stylesheet" href="style.css">

</head>
<body>

<form action="gerar.php" method="post">
    
    <h2>Gerador de PDF</h2>

    <label>Nome:</label>
    <input type="text" name="nome"><br><br>

    <label>Telefone:</label>
    <input type="text" name="telefone"><br><br>

    <label>Endereço:</label>
    <input type="text" name="endereco"><br><br>

    <label>Email:</label>
    <input type="text" name="email"><br><br>

    <label>Mensagem:</label>
    <textarea name="mensagem"></textarea><br><br>

    <button type="submit">Gerar PDF</button>

</form>

</body>
</html>