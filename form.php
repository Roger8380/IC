<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
</head>
<body style="background-color: <?php

if (isset($_COOKIE['cordefundo'])) 
    echo $_COOKIE['cordefundo'];
else
    echo 'white';
?>">    
    <h1> Selecione a cor de fundo que seja daqui em diante: </h1>
    <form action="create_cookie.php" method="post">
        <input type="radio" name="cordefundo" value="blue"> Azul<br>
        <input type="radio" name="cordefundo" value="green"> Verde<br>
        <input type="radio" name="cordefundo" value="red"> Vermelho<br>
        <input type="submit" value="Criar cookie">
    </form>
</body>
