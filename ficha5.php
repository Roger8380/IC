<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Formulario de candidatura</h1>
        <form action="sucesso.php" method="post" enctype="multipart/form-data">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required><br><br>    
            <label for="idade">Idade:</label>
            <input type="number" name="idade" required><br><br>
            <label for="morada">Morada:</label>
            <input type="text" name="morada" required><br><br>
            <label for="cv">CV:</label>
            <input type="file" name="cv" required><br><br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </form>
    </body>
</html>