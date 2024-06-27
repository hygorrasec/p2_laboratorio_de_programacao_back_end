<?php
include(__DIR__ . '/config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $endereco = htmlspecialchars($_POST['endereco']);
    $bairro = htmlspecialchars($_POST['bairro']);
    $cidade = htmlspecialchars($_POST['cidade']);
    $estado = htmlspecialchars($_POST['estado']);
    $cep = htmlspecialchars($_POST['cep']);
    $sql = "INSERT INTO amigos (nome, endereco, bairro, cidade, estado, cep) VALUES ('$nome', '$endereco', '$bairro', '$cidade', '$estado', '$cep')";
    if ($db->query($sql)) {
        $db->close();
        header("Location: index.php");
        exit();
    } else {
        $db->close();
        return "Erro ao inserir registro. Tente novamente.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Amigos</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="form-container">
                <form action="create.php" method="post">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" required>
                    <label for="bairro">Bairro:</label>
                    <input type="text" id="bairro" name="bairro" required>
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" required>
                    <label for="estado">Estado:</label>
                    <input type="text" id="estado" name="estado" required>
                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" name="cep" required>
                    <input type="submit" value="Adicionar Amigo">
                    <a href="index.php">Voltar</a>
                </form>
            </div>
        </div>
        <footer>
            <p>Universidade de Vassouras - Campus Maricá/RJ - 26/06/2024</p>
            <p>Curso: Engenharia de Software - Turma: B</p>
            <p>Disciplina: Laboratório de Programação Back End</p>
            <p>Professor: Vitor Cesar</p>
            <p>Equipe: Fábio Correia Lima (202212176) e Hygor Rasec de SantAnna Machado (202212020)</p>
        </footer>
    </body>
</html>