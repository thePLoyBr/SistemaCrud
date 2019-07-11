<META HTTP-EQUIV=Refresh CONTENT="0; URL=listar.php">
<?php

include 'conexao.php';
include 'funcoes.php';
$procedimento = $_GET["procedimento"];
$id_aluno = $_GET["id_aluno"];
$nome_aluno = $_GET["nome_aluno"];
$curso_aluno = $_GET["curso_aluno"];


if ($procedimento == "alterar") {
    alterarAluno($conn,$nome_aluno,$curso_aluno,$id_aluno);
} elseif ($procedimento == "cadastrar") {
    cadastrarAluno($conn,$nome_aluno,$curso_aluno);
} else if($procedimento == "excluir"){
    exluirAluno($conn,$id_aluno);
} else {
    echo "erro";
}


?>
