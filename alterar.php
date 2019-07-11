<META HTTP-EQUIV=Refresh CONTENT="5; URL=listar.php">
<?php

include 'conexao.php';

$id_aluno = $_GET["id_aluno"];
$nome_aluno = $_GET["nome_aluno"];
$curso_aluno = $_GET["curso_aluno"];
$del = mysqli_query($conn, "UPDATE tb_aluno SET nome_aluno='$nome_aluno', curso_aluno='$curso_aluno' WHERE id_aluno='$id_aluno'") or die("ERRO!");

if($id_aluno) {
    echo "Registro Alterado com Sucesso";

} else{
    echo "erro";
}

?>