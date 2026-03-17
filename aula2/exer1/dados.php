<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado</title>

<link rel="stylesheet" href="dados.css">

</head>
<body>

<div class="container">

    <h2>Dados Recebidos</h2>

        <p class="metodo">Método utilizado:
            <span class="tag"><?php echo $_SERVER['REQUEST_METHOD']; ?></span>
        </p>

    <table>

        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>

        <tr>
            <td>Nome</td>
            <td><?php echo htmlspecialchars($_REQUEST['nome']); ?></td>
        </tr>

        <tr>
            <td>Telefone</td>
            <td><?php echo htmlspecialchars($_REQUEST['telefone']); ?></td>
        </tr>

        <tr>
            <td>E-mail</td>
            <td><?php echo htmlspecialchars($_REQUEST['email']); ?></td>
        </tr>

        <tr>
            <td>Mensagem</td>
            <td><?php echo nl2br(htmlspecialchars($_REQUEST['mensagem'])); ?></td>
        </tr>

    </table>

    <h3>Cabeçalhos da Requisição</h3>

    <table>

        <tr>
            <th>Header</th>
            <th>Valor</th>
        </tr>

        <?php
            $headers = apache_request_headers();
            foreach ($headers as $header => $value) {
                echo "<tr>
                    <td>$header</td>
                    <td>$value</td>
                 </tr>";
            }
        ?>

    </table>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>