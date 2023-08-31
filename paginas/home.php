<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimento a ocorrências</title>
    <script src="../scripts/jquery-1.8.2.min.js"></script>
    <link rel="stylesheet" href="../styles/Home.css">
</head>

<?php
    session_start();
?>

<body>
    <header>
        <img src="../sources/logo_pequena.png">
        <ul class="ul-1">
            <li><a href="Ocorrencia.php">Ocorrência</a></li>
            <li><a href="#">Suporte</a></li>
            <li><a href="Login.php">Fazer login</a></li>
        </ul>
        <nav class="hidden_nav">
            <ul class="ul-2">
                <li><a href="Ocorrencia.php">Ocorrência</a></li>
                <li><a href="#">Suporte</a></li>
                <li><a href="Login.php">Fazer login</a></li>
            </ul>
        </nav>
        <div class="menu">
            <div class="menu_burguer"></div>
        </div>
    </header>

    <main>
        <section>
            <h2>Bem vindo a plataforma de ocorrências!</h2>
            <button>Clique aqui para login</button>
        </section>
    </main>
</body>
<script src="../scripts/Home.js"></script>
</html>