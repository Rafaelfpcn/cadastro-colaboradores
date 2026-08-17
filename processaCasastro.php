<?php

// Recebendo os dados enviados pelo formulário
$nome = $_POST["nome1"];
$idade = $_POST["idade2"];
$profissao = $_POST["profissao3"];
$salario = $_POST["salario4"];
$experiencia = $_POST["experiencia5"];

// Formatando o salário
$salarioFormatado = number_format($salario, 2, ",", ".");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Confirmado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container resultado">

        <h1>Cadastro realizado!</h1>

        <h2>Dados do colaborador</h2>

        <p><strong>Nome completo:</strong> <?php echo htmlspecialchars($nome); ?></p>

        <p><strong>Idade:</strong> <?php echo htmlspecialchars($idade); ?> anos</p>

        <p><strong>Profissão:</strong> <?php echo htmlspecialchars($profissao); ?></p>

        <p><strong>Salário pretendido:</strong> R$ <?php echo $salarioFormatado; ?></p>

        <p>
            <strong>Experiência anterior:</strong><br>
            <?php echo nl2br(htmlspecialchars($experiencia)); ?>
        </p>

        <div class="mensagem">
            <h2>Mensagem personalizada</h2>

            <p>
                Olá, <strong><?php echo htmlspecialchars($nome); ?></strong>!
                Recebemos seu cadastro para a área de
                <strong><?php echo htmlspecialchars($profissao); ?></strong>.
                A experiência informada foi:
                <strong><?php echo htmlspecialchars($experiencia); ?></strong>.
                Agradecemos seu interesse em fazer parte das Lojas Brincos e Companhia!
            </p>
        </div>

        <a href="cadastro.html" class="botao">Voltar ao formulário</a>

    </div>

</body>
</html>
