<?php
include 'conexao.php';

function alterarAluno($conn,$nome_aluno,$curso_aluno,$id_aluno)
{
    $up = mysqli_query($conn, "UPDATE tb_aluno SET nome_aluno='$nome_aluno', curso_aluno='$curso_aluno' WHERE id_aluno='$id_aluno'") or die("ERRO!");

    if ($id_aluno) {
        echo "Registro Alterado com Sucesso";

    } else {
        echo "erro";

    }
}

function exluirAluno($conn,$id_aluno)
{
    $sql = "DELETE FROM tb_aluno WHERE id_aluno=$id_aluno";

    if ($conn->query($sql) === TRUE) {
        echo "Registro Deletado com Sucesso";
    } else {
        echo "Erro ao deletar registro!" . $conn->error;
    }
}

function cadastrarAluno($conn,$nome_aluno,$curso_aluno)
{
    $sql = mysqli_query($conn, "INSERT INTO tb_aluno (nome_aluno,curso_aluno) VALUES ('$nome_aluno','$curso_aluno')");

    if ($sql) {
        echo "Cadastrado com sucesso";

    } else {
        echo "Erro";
    }
}

?>