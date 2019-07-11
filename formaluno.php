<html>

    <head>
        <title>SistemaCRUD-github</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="_CSS/formaluno.css">
    </head>

    <body>
        <fieldset>
            <legend>Cadastro de Aluno</legend>
            <form action="crud.php" method="get">
                Nome: <input type="text" name="nome_aluno" required> </br></br>
                Curso: <input type="text" name="curso_aluno" required></br></br>
                <input type="submit" value="CADASTRAR" id="btnCadastrar">
                <input type="text" name="procedimento" value="cadastrar" hidden="true">
            </form>
        </fieldset>
    </body>
</html>
