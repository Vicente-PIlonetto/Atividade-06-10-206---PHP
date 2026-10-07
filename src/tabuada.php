<form method="post">
    <input name="numero" placeholder="Digite um número">
    <input value="Enviar" type="submit">
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = $_POST["numero"];
    echo "<h1>Tabuada do $numero</h1>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }

}