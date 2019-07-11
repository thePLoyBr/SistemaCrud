<?php
$id_aluno = $_GET["id_aluno"];
?>
<html>

<head>
    <title>SistemaCRUD-github</title>
    <meta charset="utf-8">
</head>

<body>
<h1>Alterar Alunos</h1>

<form action="alterar.php" method="get">
    Nome: <input type="text" name="nome_aluno" required> </br></br></br>
    Curso: <input type="text" name="curso_aluno" required></br></br></br>
    id: <input type="text" name="id_aluno" value="<?php echo $id_aluno; ?>">
    <input type="submit" value="Alterar">

</form>
</body>
</html>