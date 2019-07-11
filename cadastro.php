<META HTTP-EQUIV=Refresh CONTENT="0; URL=listar.php">
<?php
include 'conexao.php';
$nome_aluno = $_GET["nome_aluno"];
$curso_aluno = $_GET["curso_aluno"];

$sql = mysqli_query($conn,"INSERT INTO tb_aluno (nome_aluno,curso_aluno) VALUES ('$nome_aluno','$curso_aluno')");

if($sql){
  echo "Cadastrado com sucesso";
} else {
  echo "Erro";
}


 ?>
