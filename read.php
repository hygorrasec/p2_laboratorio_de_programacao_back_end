<?php
include(__DIR__ . '/config.php');
$sql = "SELECT * FROM amigos";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$row['nome']}</td>";
    echo "<td>{$row['endereco']}</td>";
    echo "<td>{$row['bairro']}</td>";
    echo "<td>{$row['cidade']}</td>";
    echo "<td>{$row['estado']}</td>";
    echo "<td>{$row['cep']}</td>";
    echo "<td><a href='update.php?id={$row['id']}'>Editar</a> | <a href='delete.php?id={$row['id']}'>Excluir</a></td>";
    echo "</tr>";
}
