<!doctypehtml>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width,initial-scale=1" name="viewport">
        <title>Lista de Amigos</title>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="table-container">
                <h1>Lista de Amigos</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>CEP</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody><?php include(__DIR__ . '/read.php'); ?></tbody>
                </table><a href="create.php">Adicionar Novo Amigo</a>
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