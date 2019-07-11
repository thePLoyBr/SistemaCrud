<?php
include 'conexao.php';
$id_aluno = $_GET["id_aluno"];

$sql = "DELETE FROM tb_aluno WHERE id_aluno=$id_aluno";

if ($conn->query($sql) === TRUE) {
    echo "Registro Deletado com Sucesso";
} else {
    echo "Erro ao deletar registro!" . $conn->error;
}

?>