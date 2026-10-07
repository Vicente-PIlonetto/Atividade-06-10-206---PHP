<form method="post">
    <input name="nome" placeholder="Digita o teu nome o arrombado">
    <button>Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    echo "Ola $nome";
}