<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="results.php" method="get">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required><br><br>
            <label for="apelido">Apelido:</label>
            <input type="text" name="apelido" required><br><br>
            <label>Aluno do Ctesp de Informatica?:</label>
            <input type="checkbox" name="aluno" checked><br>
            <label>Idade:</label><br>
            <input type="radio" name="idade" value="menor ou igual que 20" required> <=20<br>
            <input type="radio" name="idade" value="21-30" required> 21-30<br>
            <input type="radio" name="idade" value="31-40" required> 31-40<br>
            <input type="radio" name="idade" value=">40" required> >40<br>
            <label>Localidade</label>
            <select name="localidade" required>
                <option value="Chaves">Chaves</option>
                <option value="Porto">Porto</option>
                <option value="Coimbra">Coimbra</option>
                <option value="Faro">Faro</option>
            </select><br><br>
            <label>Sugestoes:</label>
            <textarea name="sugestoes" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </form>
    </body>
</html>