<?php

require_once __DIR__ . '/../vendor/autoload.php';

$nome = $_POST['nome'] ;
$telefone = $_POST['telefone'] ;
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$mpdf = new \Mpdf\Mpdf();

$html = "
<h1 style='text-align:center;'>Relatório</h1>
<hr>

<p><strong>Nome:</strong> $nome</p>
<p><strong>Telefone:</strong> $telefone</p>
<p><strong>Endereço:</strong> $endereco</p>
<p><strong>Email:</strong> $email</p>

<br>

<p><strong>Mensagem:</strong></p>
<p>$mensagem</p>

<hr>
<p style='text-align:right;'>Gerado em: " . date('d/m/Y H:i') . "</p>
";

$mpdf->WriteHTML($html);

$mpdf->Output();