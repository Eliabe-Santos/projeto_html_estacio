<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>processamento </title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['fone'];
        $descricao = $_POST['desc'];
        $data_ocorrencia = $_POST['data_ocorrencia'];

        // exibição dos dados recebidos pelo usuario:
        echo "Nome Completo: " . $nome . "<br>";
        echo "E-mail: " . $email . "<br>";
        echo "Telefone: " . $telefone . "<br>";
        echo "Descrição da ocorrência: " . $descricao . "<br>";
        echo "Data da ocorrência: " . $data_ocorrencia . "<br>";

        

        ?>
    </main>
</body>
</html>