<?php
    if (isset($_POST['cordefundo'])) {
        setcookie('cordefundo', $_POST['cordefundo'], time() + 120);

    }
?>
<!DOCTYPE html>
<head></head>
<body>
    <h3>Cookie criado com sucesso! </h3>
    <a href="form.php">Voltar ao formulário</a>
</body>