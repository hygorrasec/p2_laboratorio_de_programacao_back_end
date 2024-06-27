<?php
include(__DIR__ . '/config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $db->real_escape_string($_POST['id']);
    $nome = $db->real_escape_string($_POST['nome']);
    $endereco = $db->real_escape_string($_POST['endereco']);
    $bairro = $db->real_escape_string($_POST['bairro']);
    $cidade = $db->real_escape_string($_POST['cidade']);
    $estado = $db->real_escape_string($_POST['estado']);
    $cep = $db->real_escape_string($_POST['cep']);
    $sql = "UPDATE amigos SET nome = '$nome', endereco = '$endereco', bairro = '$bairro', cidade = '$cidade', estado = '$estado', cep = '$cep' WHERE id = $id";
    if ($db->query($sql)) {
        $db->close();
        header("Location: index.php");
        exit();
    } else {
        $db->close();
        echo "Erro ao editar o amigo. Tente novamente.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Amigo</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="form-container">
                <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM amigos WHERE id = $id";
                        $result = $db->query($sql);
                        $row = $result->fetch_assoc();
                        if ($row) {
                            ?>
                            <form action="update.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <label for="nome">Nome:</label>
                                <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>" required>
                                <label for="endereco">Endereço:</label>
                                <input type="text" id="endereco" name="endereco" value="<?php echo $row['endereco']; ?>" required>
                                <label for="bairro">Bairro:</label>
                                <input type="text" id="bairro" name="bairro" value="<?php echo $row['bairro']; ?>" required>
                                <label for="cidade">Cidade:</label>
                                <input type="text" id="cidade" name="cidade" value="<?php echo $row['cidade']; ?>" required>
                                <label for="estado">Estado:</label>
                                <input type="text" id="estado" name="estado" value="<?php echo $row['estado']; ?>" required>
                                <label for="cep">CEP:</label>
                                <input type="text" id="cep" name="cep" value="<?php echo $row['cep']; ?>" required>
                                <input type="submit" value="Atualizar Amigo">
                                <a href="index.php">Voltar</a>
                            </form>
                            <?php
                        } else {
                            echo "<p>Amigo não encontrado.</p>";
                        }
                    } else {
                        echo "<p>ID não fornecido.</p>";
                    }
                ?>
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