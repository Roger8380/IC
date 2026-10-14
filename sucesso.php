<?php
    echo "<h1>Resultados do formulário de candidatura</h1>";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     echo "<p><strong>Nome:</strong> " . $_POST["nome"] . "</p>";
     echo "<p><strong>Idade:</strong> " . $_POST["idade"] . "</p>";
     echo "<p><strong>Morada:</strong> " . $_POST["morada"] . "</p>";
     $tmp_name = $_FILES["cv"]["tmp_name"];
     $cv_name = $_FILES["cv"]["name"];
     $p = "uploads/";
    if (!is_dir($p)) {
        mkdir($p);
        }
        if (is_uploaded_file($tmp_name)) {
            echo "<p><strong>CV enviado com sucesso:</strong> " . $cv_name . "</p>";
        } else {
            echo "<p><strong>Erro ao enviar o CV.</strong></p>";
        }
        move_uploaded_file($tmp_name, "uploads/" . $cv_name);
}
?>