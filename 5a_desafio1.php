<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Maioridade</title>
</head>

<body>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="ano">Ano:</label> <!-- Adicionado name="ano" -->
        <input type="text" name="ano" id="ano" required><br>

        <button type="submit">Verificar</button>
    </form>

    <?php

    echo "Preencha o formulário com seu nome e ano de nascimento";
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recebe os valores do formulário (e pega o ano atual)
        $nome = $_POST['nome'];
        $ano = (int)$_POST['ano'];
        $anoAtual = (int)date('Y');

        // Calcula a idade baseado no ano enviado e o ano atual
        $idade = $anoAtual - $ano;

        // Registro das informações
        if ($idade >= 18) {
            // Abre/Cria o arquivo log_acessos.txt
            $arquivo = fopen('log_acessos.txt', 'a');

            // Cria a linha
            $linha = $nome . ";" . $idade . "\n";

            // Escreve e fecha
            fwrite($arquivo, $linha);
            fclose($arquivo);

            echo "<script>alert('Usuário cadastrado com sucesso ✅');</script>";

        } else {
            // Nega o acesso a menores de idade
            echo "<script>alert('Acesso negado 🚫, {$nome}!');</script>";
        }
    }
    ?>
</body>

</html>