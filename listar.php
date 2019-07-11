<?php
include 'conexao.php';

$sql = mysqli_query($conn, "SELECT * FROM tb_aluno");

$linhas = mysqli_num_rows($sql);

while ($dados = mysqli_fetch_assoc($sql)) {
?><table border="1" style="border-collapse: collapse">
    <tr>
    <td><a href="excluir.php?id_aluno=<?php echo $dados["id_aluno"]; ?>">Excluir</a>&emsp;</td>
    <td><a href="formalterar.php?id_aluno=<?php echo $dados["id_aluno"]; ?>">Alterar</a>&emsp;</td>

    <?php echo "<td>".$dados["id_aluno"]."</td>" . "<td>".$dados["nome_aluno"]."</td>" . "<td>".$dados["curso_aluno"]."<td>"."</tr><br>";
        }
        ?>
</table>
<a href="formaluno.php">Cadastrar</a>