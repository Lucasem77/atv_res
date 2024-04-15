<?php
// Definição das variáveis em PHP
$nome = "Lucas";
$idade = 26;
$peso = 64.0;
$altura = 1.80;
$escolaridade = "Ensino Superior";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
</head>
<body>
    <h1>Informações Pessoais</h1>
    <p><strong>Nome:</strong> <?php echo $nome; ?></p>
    <p><strong>Idade:</strong> <?php echo $idade; ?> anos</p>
    <p><strong>Peso:</strong> <?php echo $peso; ?> kg</p>
    <p><strong>Altura:</strong> <?php echo $altura; ?> m</p>
    <p><strong>Grau de Escolaridade:</strong> <?php echo $escolaridade; ?></p>
</body>
</html>
