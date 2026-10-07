<form method="post">
    <input name="nota1" placeholder="Digite a primeira nota">
    <input name="nota2" placeholder="Digite a segunda nota">
    <input name="nota3" placeholder="Digite a terceira nota">
    <input value="Calcular Média" type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    $media = ($nota1 + $nota2 + $nota3) / 3;

    echo "<h1>A média das notas é: $media</h1>";

}