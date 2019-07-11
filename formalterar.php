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

<form action="crud.php" method="get">
    Nome: <input type="text" name="nome_aluno" required> </br></br></br>
    Curso: <input type="text" name="curso_aluno" required></br></br></br>
    <input type="text" name="id_aluno" value="<?php echo $id_aluno; ?>" hidden="true">
    <input type="text" name="procedimento" value="alterar" hidden="true">
    <input type="submit" value="Alterar">

</form>
</body>
</html>