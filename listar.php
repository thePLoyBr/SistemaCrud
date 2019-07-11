<?php
include 'conexao.php';

$sql = mysqli_query($conn, "SELECT * FROM tb_aluno");

$linhas = mysqli_num_rows($sql);

while ($dados = mysqli_fetch_assoc($sql)) {
  ?> <a href="excluir.php">excluir</a> <?php echo $dados["cod_aluno"]." ||| ".$dados["nome_aluno"]." ||| ".$dados["curso_aluno"]."<br>";
}
?>
