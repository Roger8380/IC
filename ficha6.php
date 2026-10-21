<?php
$idioma = "en";


if (isset($_POST['idioma'])) {
    $idioma = $_POST['idioma'];

    
    setcookie("idioma_preferido", $idioma, time() + (30 * 24 * 60 * 60), "/");
}


elseif (isset($_COOKIE['idioma_preferido'])) {
    $idioma = $_COOKIE['idioma_preferido'];
}

switch ($idioma) {
    case "es":
        $mensagem = "Bienvenido al sitio web";
        break;

    case "fr":
        $mensagem = "Bienvenue sur le site web ";
        break;

    case "en":
        $mensagem = "Welcome to the website";
        break;

    default:
        $mensagem = "Welcome to the website!";
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Preferência de Idioma</title>
</head>
<body>

    <h2>Selecione o idioma preferido</h2>

    <form method="post">
        <input type="radio" name="idioma" value="en" required> Inglês<br>
        <input type="radio" name="idioma" value="es"> Espanhol<br>
        <input type="radio" name="idioma" value="fr"> Francês<br><br>

        <input type="submit" value="Guardar preferência">
    </form>

    <hr>

    <?php
    if (isset($_COOKIE['idioma_preferido']) || isset($_POST['idioma'])) {
        echo "<h3>$mensagem</h3>";
    } else {
        echo "<h3>Não foi encontrado nenhum cookie. O idioma padrão é Inglês.</h3>";
        echo "<p>Welcome to the website!</p>";
    }
    ?>

</body>
</html>